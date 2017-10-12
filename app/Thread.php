<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    public function comments()
    {
    	return $this->belongsTo('App\comments');
    }
}
