<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
   public function create(){
       return view('signup');
   }

   public function store(){
       //return request()->all();
       //var_dump(request()->all());
       //create the user
       $attributes = request()->validate([
           'firstname'=>'required|max:255',
           'lastname'=>'required|max:255|min:3',
           'email'=>'required|email|max:255|unique:users,email',
           'password'=>'required|min:6|max:255|same:passwordConfirmation',
           'subscription'=>'required'
           ]);
      // $attributes['password'] = bcrypt($attributes['password']);
      $user = User::create($attributes);
      auth()->login($user);
      session()->flash('success', 'Your account has been successfully created!');

     return redirect('/dashboard');
   }

}
