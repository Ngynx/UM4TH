<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;

class Curso extends Moloquent
{
    protected $fillable = [
		'name', 'description', 'state', 'img'
	];

	public function monitor()
    {
        return $this->belongsTo('App\Monitor');
    }
}
