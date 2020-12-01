@extends('layouts.app')

@section('content')
	@foreach ($LessonRowset as $LessonRow)
		{{$LessonRow->name}}
	@endforeach
@endsection

