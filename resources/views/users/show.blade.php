@extends('layouts.app')

@section('content')
	名前
	{{$UserRow->name}}
	<br>
	{{$UserRow->email}}
	<br>
	<a href={{route('user.edit',['id' => $UserRow->id])}}>
		編集する
	</a>
@endsection

