<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class sessionController extends Controller
{
    function home()
    {
        $product = Product::all();
        return view('home', ['products' => $product]);
    }

    function showProducts()
    {
        $products = Product::all();
        return view('products', ['products' => $products]);
    }

    function store()
    {
        $validated = request()->validate([
            'name' => 'required|min:3|string',
            'email' => 'required|email|min:3|unique:users,email',
            'password' => 'required|min:3|confirmed',
            password::default()
        ]);

        $validated['password'] = Hash::make($validated['password']);

        $user = User::create($validated);
        Auth::login($user);
        return redirect('/');
    }

    function login()
    {
        // validate 
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // check the user in the database
        if (Auth::attempt($attributes)) {
            // Regenerate sessionx
            request()->session()->regenerate();

            return redirect('/');
        }
    }

    function edit($id)
    {
        // $userAuth = Auth::user();
        if (Auth::id() != $id) {
            abort(404);
        }
        $user = User::findOrFail($id);
        return view('edit', compact('user'));
    }


    function update(Request $request, $id)
    {
        // validate incoming data
        $attributes = $request->validate([
            'name' => 'required|min:3|string',
            'email' => 'required|email|min:3|unique:users,email,' . $id,
            'password' => 'nullable|min:3',
        ]);

        // find user by id from route
        $user = User::findOrFail($id);

        // if password is filled, hash it; otherwise keep old password
        if (!empty($attributes['password'])) {
            $attributes['password'] = Hash::make($attributes['password']);
        } else {
            unset($attributes['password']);
        }

        // update user data
        $user->update($attributes);

        return redirect('/')->with('success', 'edited successfuly');
    }

    function destroy()
    {
        Auth::logout();
        request()->session()->regenerate();
        return back();
    }
}
