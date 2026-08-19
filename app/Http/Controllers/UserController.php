<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Http\View;
use App\Models\User;
class UserController extends Controller
{
    public function register() {
        
        return view('auth.register');
    }

    public function store(Request $request){
        
        $request->validate([
            'name'=> "required|string|max:255",
            'email'=> "required |email",
            'dob'=> "required|date",
            "address"=>'required|string',
            "state"=>'required|string',
            "city"=>'required|string',
            "pincode"=>'required|integer',
            "gender"=>'required|string',

        ]);

        $user = User::create([

        ]);
    }
}
