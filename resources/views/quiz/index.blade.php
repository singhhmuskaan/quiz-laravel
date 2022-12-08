@extends('layouts.main')
@section('content')
@foreach($quizzes as $quiz)
    <a href="{{route('quiz.attempt', [$quiz->id])}}">{{$quiz->title}}</a>
@endforeach
@endsection
