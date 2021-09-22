<?php

namespace App;
use App\Book;
use App\User;
use App\Hotel;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function hotel()
    {
    	return $this->belongsTo('App\Hotel','hotel_id');
    }
}
