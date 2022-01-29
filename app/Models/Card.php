<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    /*protected $fillable = [
        'title',
        'body',
        'priority',
        'status'
    ];*/
    public function cardsList(){
        return $this->belongsTo(CardsList::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

}
