<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lesson;

class LessonController extends Controller
{
	public function index()
	{
		return view('Lesson.index', ['LessonRowset' => Lesson::all()]);
	}

	public function new()
	{

	}

	public function store()
	{

	}

	public function edit()
	{

	}

	public function update()
	{

	}
}
