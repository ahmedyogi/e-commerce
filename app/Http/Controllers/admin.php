<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Doctrine\Inflector\Rules\English\Rules;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use TijsVerkoyen\CssToInlineStyles\Css\Rule\Rule;

class admin extends Controller
{
    public function home()
    {
        return view('admin.home', [
            'productsCount' => Product::count(),
            'usersCount' => User::count()
        ]);
    }
    public function productsIndex()
    {
        return view('admin.products', [
            'products' => Product::all(),
            'productsCount' => Product::count()
        ]);
    }

    //user functions
    function create()
    {
        $validated = request()->validate([
            'name' => 'required|min:3|string',
            'email' => 'required|email|min:3|unique:users,email',
            'password' => 'required|min:3|confirmed',
        ]);

        $validated['password'] = Hash::make($validated['password']);

        $user = User::create($validated);
        Auth::login($user);
        return redirect('/admin/users');
    }



    function index()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.edit', compact('user'));
    }


    public function update($id)
    {
        $user = User::findOrFail($id);


        $validated = request()->validate([
            'name' => 'required|min:3|string',
            'email' => [
                'required',
                'email',
                \Illuminate\Validation\Rule::unique('users')->ignore($user->id),
            ],
            'password' => 'nullable|min:6'
        ]);

        if (request()->filled('password')) {
            $validated['password'] = Hash::make(request()->password);
        } else {
            unset($validated['password']);
        }

        $user->update($validated);

        return redirect('/admin/users')->with('success', 'User updated successfully!');
    }

    function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return back();
    }


    //product functions
    function create_product()
    {
        $product = request()->validate([
            'name' => 'required|min:3',
            'price' => 'required|integer',
            'description' => 'required|min:8',
            'id' => 'required'
        ]);
        Product::create($product);
        return redirect('/admin/products');
    }

    function edit_product($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.edit_product', ['product' => $product]);
    }

    function update_product($id)
    {
        // validate the inputs
        $validated_product = request()->validate([
            'name' => 'required|min:3',
            'price' => 'required|integer',
            'id' => 'required',
            'description' => 'required|min:8'
        ]);
        //update the data of the product
        $product = Product::findOrFail($id);
        $product->update($validated_product);
        // return to the products page
        return redirect('/admin/products')->with('success', 'edited successfuly');
    }
    function delete_product($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return back()->with('success', 'deleted successfuly');
    }
}
