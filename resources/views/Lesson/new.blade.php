@extends('layouts.app')

@section('content')
		<form action="{{ route('user.store') }}" accept-charset="UTF-8" method="post" class="auth-form-start" novalidate>
			@csrf
				<input type="text" name="name" placeholder="名前を入力してください" autofocus>
			<br>
				<input id="email" type="email" name="email" placeholder="メールアドレス" autofocus>
			<br>
			<button>ボタン</button>
		</form>
@endsection

