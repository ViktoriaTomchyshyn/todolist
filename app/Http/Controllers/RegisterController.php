<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
   public function create(){
       return view('signup');
   }

   public function store(CreateUserRequest $request){
      $user = User::create($request->all());
      auth()->login($user);
      session()->flash('success', 'Your account has been successfully created!');

     return redirect('/dashboard');
   }

}
