<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCardRequest;
use App\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    /**
     * @param CreateCardRequest $request
     * @return string
     */
    public function store(CreateCardRequest $request)
    {
        if($request->validated()){
            $card = new Card;
            $card->user_id = auth()->user()->id;
            $card->cards_list_id = $request->list_id;
            $card->title = $request->title;
            $card->body = $request->body;
            $card->priority = $request->priority;
            $card->save();
        }
        session()->flash('success', 'New card has been successfully created!');
        return back();
    }

    /**
     * @param Card $card
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Card $card)
    {
        $card->delete();
        session()->flash('success', 'Card deleted!');
        return back();
    }
}
