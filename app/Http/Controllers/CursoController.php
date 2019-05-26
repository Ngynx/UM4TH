<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;
use Jenssegers\Date\Date;

class CursoController extends Controller
{
    public function index()
	{
		$courses = Curso::all();
		return view('course', compact('courses'));
	}

	public function show($id)
	{
		return view('courseid',['course' => Curso::find($id)]);
	}
    //
}
