<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function register(Request $request)
    {

        if ($request->isMethod('post')) {

            $this->validate(request(), [
                'firstName' => 'required|min:3|max:50',
                'lastName' => 'required|min:3|max:50',
                'email' => 'required|email|unique:users',
                'password' => 'required|confirmed|min:6|max:20'
            ]);

            $user = User::create([
                'name' => Str::of($request->firstName . ' ' . $request->lastName)->title()->trim(),
                //  'email' => Str::of($request->email)->trim(),
                'phone' => $request->phone,
                'email' => trim($request->email),
                'password' => Hash::make($request->password),
                'activation_code' => Str::random(50),
                'status' => 0
            ]);
            auth()->login($user);
            return redirect()->route('components');
        }
        return view('pages.register');
    }




}
