@extends('layouts.app')

@section('content')
	@foreach ($LessonRowset as $LessonRow)
	<a href={{route('lesson.show', ['id' => $LessonRow->id])}}>
		{{$LessonRow->lessons_time_type}}
	</a>
	<br>
	@endforeach
@endsection

