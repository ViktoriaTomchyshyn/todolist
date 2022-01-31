<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CardsList;
use App\Models\User;

class ListsViewController extends Controller
{
   public function view(){
       if(!auth()->user()->isAdmin())
       {
           $user_id = auth()->user()->id;
           $CardsLists = CardsList::where('user_id', $user_id)->get();
           $users = User::all();
           foreach ($users as $user) {
               return $user->CardsLists;//posts is the function made in model.
           }
       }
       else return CardsList::all();
   }
}
