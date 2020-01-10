<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //protected $fillable = [''];

    public function order(){
        return $this->belongsTo(User::class);
    }
}
