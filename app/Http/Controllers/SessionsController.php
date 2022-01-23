<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nette\Schema\ValidationException;

class SessionsController extends Controller
{
    public function create(){
        return view('authorization');
    }
    public function store(){
       $data =  request()->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

       if(auth()->attempt($data)){
           return redirect('/dashboard');
       }

       return back()
          ->withInput()
           ->withErrors(['email'=>'Your provided credentials could not be verified.']);
    }
    public function destroy(){
        auth()->logout();
        return redirect('/');
    }
}
