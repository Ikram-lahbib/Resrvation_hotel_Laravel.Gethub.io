<?php

namespace App;
use App\User;
use App\Room;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function room()
    {
    	return $this->belongsTo('App\Room');
    }
}
