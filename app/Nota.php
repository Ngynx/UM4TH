<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;

class Nota extends Moloquent
{
    protected $fillable = [
		'note', 'ranking', 'last_note' 
	];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
