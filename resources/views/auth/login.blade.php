@extends('layouts.app')

@section('content')
	<div class="auth-container">
		<div class="login-main">
			<h1>ウィズ体操クラブ</h1>
		</div>
		<div class="auth-form">
			<div class="auth-form-box">
				<form action="{{ route('login') }}" accept-charset="UTF-8" method="post" class="auth-form-start" novalidate>
					@csrf
					<input id="email" type="email" name="email" placeholder="メールアドレス" value="{{ old('email') }}" required autofocus>
					<br>
					<input type="password" name="password" placeholder="パスワード" required>
					<br>
					<input type="submit" name="commit" value="ログイン" class="sign-btn">
					<br>
					<a href="{{ route('register') }}">アカウントを登録する</a>
			</div>
		</div>
	</div>



@endsection

