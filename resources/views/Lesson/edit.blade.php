@extends('layouts.app')

@section('content')
アップデーと
		<form action="{{ route('lesson.update',['id' => $LessonRow->id]) }}" accept-charset="UTF-8" method="post" class="auth-form-start" novalidate>
			@csrf
			クラス
			<select name="ageType">
				@foreach (config('const.Lesson.AGE_TYPE') as $key => $val)
					<option value="{{ $key }}">{{ $val }}</option>
				@endforeach
			</select>
			<br>

			<select name="lessonsTimeType">
				@foreach (config('const.Lesson.LESSON_TIME') as $key => $val)
				<option value="{{ $key }}">{{ $val }}</option>
				@endforeach
			</select>

			<br>
			<select name="weekDay">
				@foreach (config('const.Lesson.WEEK_TYPE') as $key => $val)
				<option value="{{ $key }}">{{ $val }}</option>
				@endforeach
			</select>
			<br>

			<input name="capacityPerson" placeholder="人数" type="number">
			<button>ボタン</button>
		</form>
@endsection

