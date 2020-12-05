@extends('layouts.app')

@section('content')
		<form action="{{ route('user.store') }}" accept-charset="UTF-8" method="post" class="auth-form-start" novalidate>
			@csrf
				<input type="text" name="name" placeholder="名前を入力してください" autofocus>
			<br>
				<input id="email" type="email" name="email" placeholder="メールアドレス" autofocus>
			<br>
				<input name="brDay" placeholder="生年月日"  autofocus>
			<br>
				<input name="membersId" placeholder="登録番号" autofocus>
			<br>
				<input id="password" type="password" class="form-control is-invalid" name="password">
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

