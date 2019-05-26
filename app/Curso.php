<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;

class Curso extends Moloquent
{
    protected $fillable = [
		'name', 'description', 'attendant', 'state', 'img'
    //
	];
}
