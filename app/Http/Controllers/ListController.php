<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateListRequest;
use App\Models\CardsList;

class ListController extends Controller
{
    /**
     * @param CreateListRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CreateListRequest $request)
    {
        if($request->validated()){
            $list = new CardsList;
            $list->user_id = auth()->user()->id;
            $list->title = $request->title;
            $list->description = $request->description;
            $list->save();
        }
        session()->flash('success', 'New list has been successfully created!');
        return back();
    }

    /**
     * @param CardsList $list
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(CardsList $list)
    {
        $list->delete();
        session()->flash('success', 'List deleted!');
        return back();
    }
}
