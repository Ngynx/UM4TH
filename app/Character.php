<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;

class Character extends Moloquent
{
    protected $fillable = [
		'level', 'exp', 'avatar', 'damage', 'defense', 'life', 'img', 'sound'
	];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
