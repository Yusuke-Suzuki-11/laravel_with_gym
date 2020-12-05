<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Lesson;
use App\LessonUser;

class UsersController extends Controller
{
	public function index()
	{

		return view('users.index')->with('UserRowset', User::all());
	}

	public function show($id)
	{
		$UserRow = User::find($id);
		return view("users.show", compact('UserRow'));
	}


	public function edit($id)
	{
		$UserRow = User::find($id);


		if(Auth::user()->user_type != 1){
			abort(404);
		}
		return view("users.edit", compact("UserRow"));
	}

	public function update(Request $request, $id)
	{
		$UserRow = User::find($id);

		$UserRow->name = $request->name;
		$UserRow->email = $request->email;
		$UserRow->birth_day = $request->brDay;
		$UserRow->members_path = $request->membersId;
		$UserRow->gender = $request->gender;
		$UserRow->difficulty_point = $request->difficulty_point;
		$UserRow->save();

		$lessonId = Lesson::where('age_type', $request->ageType)
			->where('lessons_time_type', $request->lessonsTimeType)
			->where('week_type', $request->weekDay)
			->first(['id'])
			;
		//追加していく処理なので、変更したい場合に別ページでしてあげた方が良いかも
		$lessonId = $lessonId->id;
		$UserRow->lessons()->attach($lessonId);



		return redirect(route('user.show', ['id' => $id]))->with('UserRow', $UserRow);
	}

	public function new()
	{
		if(Auth::user()->user_type != 1){
			abort(404);
		}
		return view("users.new");
	}

	public function store(Request $request)
	{
		$UserRow = new User;
		$UserRow->name = $request->name;
		$UserRow->email = $request->email;
		$UserRow->password = $request->email;
		$UserRow->save();

		$lessonId = Lesson::where('age_type', $request->ageType)
			->where('lessons_time_type', $request->lessonsTimeType)
			->where('week_type', $request->weekDay)
			->first(['id'])
			;
		$lessonId = $lessonId->id;
		$UserRow->lessons()->attach($lessonId);

		return redirect(route('user.show', ['id' => $UserRow->id]))->with('UserRow', $UserRow );
	}
}