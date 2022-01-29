<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use Illuminate\Http\Request;
use Illuminate\Session\Store;
use Nette\Schema\ValidationException;

class SessionsController extends Controller
{
    public function create(){
        return view('authorization');
    }
    public function store(StoreUserRequest $request){

       if(auth()->attempt($request->validated())){
           session()->regenerate();
           session()->flash('success', 'Welcome back!');
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
