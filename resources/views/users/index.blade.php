@extends('layouts.app')

@section('content')
	@foreach ($UserRowset as $UserRow)
	<a href={{route('user.show', ['id' => $UserRow->id])}}>
		{{$UserRow->name}}
	</a>
	@endforeach
@endsection

