@extends('layouts.app')

@section('content')
    クラス
    <br>
    {{config('const.Lesson.AGE_TYPE')[$LessonRow->age_type]}}
    <br>
@endsection

