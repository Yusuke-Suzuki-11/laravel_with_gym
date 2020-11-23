@extends('layouts.app')

@section('content')

			<form class="new_user"  action="{{ route('login') }}" accept-charset="UTF-8" method="post">
			@csrf
			<input id="email" type="email" name="email" class="form-control sign-form-control" placeholder="メールアドレス" value="{{ old('email') }}" required autofocus>
			<input class="form-control sign-form-control" type="password" class="form-control" name="password" placeholder="パスワード" required>
			<input type="submit" name="commit" value="ログイン" class="sign-btn">
			<a href="{{ route('register') }}" class="sign-link white">アカウントを登録する</a>
@endsection

