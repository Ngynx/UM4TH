<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;

class Monitor extends Moloquent
{
    protected $fillable = [
		'nombre', 'email', 'cell' 
	];

	public function curso()
	{
		return $this->embedsMany('App\Curso');
	}

}
