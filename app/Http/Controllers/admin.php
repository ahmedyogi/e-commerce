<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class admin extends Controller
{

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


    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);


        // 2. الـ Validation الذكي
        $validated = $request->validate([
            'name' => 'required|min:3|string',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|min:6'
        ]);

        if ($request->filled('password')) {
            $validated['password'] = Hash::make($request->password);
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
}
