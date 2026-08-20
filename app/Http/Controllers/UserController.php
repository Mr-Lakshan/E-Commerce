<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register()
    {

        return view('auth.register');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'mothername' => 'required|string|max:255',
            'fathername' => 'required|string|max:255',
            'email' => 'required|email',
            'dob' => 'required|date',
            'address' => 'required|string',
            'state' => 'required|string',
            'city' => 'required|string',
            'pincode' => 'required|integer',
            'gender' => 'required|string',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $validated['name'] =
            $validated['first_name'].' '.$validated['last_name'];

        unset($validated['first_name']);
        unset($validated['last_name']);

        $user = User::create($validated);

        return redirect('/register')->with(
            'success',
            'Registration successful!'
        );
    }

    public function users()
    {
        $users = User::all();

        return view('auth.users', compact('users'));
    }

    public function edit(User $user)
    {
        return view('auth.edit', compact('user'));
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect('/users')->with(
            'success',
            'User deleted successfully!'
        );
    }

    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'mothername' => 'required|string|max:255',
            'fathername' => 'required|string|max:255',
            'email' => 'required|email',
            'dob' => 'required|date',
            'address' => 'required|string',
            'state' => 'required|string',
            'city' => 'required|string',
            'pincode' => 'required|integer',
            'gender' => 'required|string',
        ]);

        $validated['name'] = $validated['first_name'].' '.$validated['last_name'];

        unset($validated['first_name']);
        unset($validated['last_name']);
        $user->update($validated);

        return redirect('/users')->with('success', 'User updated sucessfully');
    }

    public function login(){
        return view('auth.login');
    }
}
