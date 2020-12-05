@extends('layouts.app')

@section('content')
		<form action="{{ route('user.update',['id' => $UserRow->id]) }}" accept-charset="UTF-8" method="post" class="auth-form-start" novalidate>
			@csrf
				<input type="text" name="name" placeholder="名前を入力してください" value="{{ $UserRow->name }}" autofocus>
			<br>
				<input id="email" type="email" name="email" placeholder="メールアドレス" value="{{ $UserRow->email }}" autofocus>
			<br>
				<input name="brDay" placeholder="生年月日" value="{{ $UserRow->birth_day }}" autofocus>
			<br>
				<input name="membersId" placeholder="登録番号" value="{{ $UserRow->members_id }}" autofocus>
			<br>
				@foreach (config('const.User.GENDER_TYPE') as $key => $val)
					<input type="radio" name="gender" value="{{$key}}">{{$val}}
				@endforeach
			<br>
			<select id="difficulty_point" name="difficulty_point">
				@foreach (config('const.User.DIFFICULTY_POINT') as $key => $val)
					<option value="{{ $key }}" {{ $key == 3 ? "selected" : "" }} >{{ $val }}</option>
				@endforeach
			</select>

			<br>
			<br>

			クラスを登録する
			<?php $LessonRowset = $UserRow->lessons()?>
			@if ($LessonRowset)
				現在登録しているクラス
				@foreach ($LessonRowset as $item)
					{{$item->}}
				@endforeach
			@endif
			<br>
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


			<button>ボタン</button>
		</form>
@endsection

