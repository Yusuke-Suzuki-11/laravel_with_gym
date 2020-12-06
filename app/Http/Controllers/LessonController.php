<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lesson;
use Illuminate\Support\Facades\Auth;
use App\Helpers\PracticeHelper;

class LessonController extends Controller
{
	public function index()
	{
		return view('Lesson.index', ['LessonRowset' => Lesson::all()]);
	}

	public function new()
	{
		PracticeHelper::test();
		exit;

		if(Auth::user()->user_type != 1){
			abort(404);
		}
		return view('Lesson.new');
	}

	public function store(Request $request)
	{
		if(Auth::user()->user_type != 1){
			abort(404);
		}


		$LessonRow = new Lesson;
		$LessonRow->age_type = $request->ageType;
		$LessonRow->lessons_time_type = $request->lessonsTimeType;
		$LessonRow->week_type = $request->weekDay;
		$LessonRow->capacity_person = $request->capacityPerson;
		$LessonRow->capacity_difficulty_point = $request->capacityPerson * 3;
		$LessonRow->save();

		return view('Lesson.index', ['LessonRowset' => Lesson::all()]);

	}

	public function show($id)
	{
		return  view('Lesson.show', ['LessonRow' => Lesson::find($id)]);
	}

	public function edit($id)
	{
		return  view('Lesson.edit', ['LessonRow' => Lesson::find($id)]);
	}

	public function update(Request $request, $id)
	{
		$LessonRow = Lesson::find($id);

		$LessonRow->age_type = $request->ageType;
		$LessonRow->lessons_time_type = $request->lessonsTimeType;
		$LessonRow->week_type = $request->weekDay;
		$LessonRow->capacity_person = $request->capacityPerson;
		$LessonRow->capacity_difficulty_point = $request->capacityPerson * 3;
		$LessonRow->save();
		return redirect(route('lesson.show', ['id' => $id]))->with('LessonRow', Lesson::find($id) );
	}
}
