@extends('layouts.main')
@section('content')
@foreach($quizzes as $quiz)
    <p class="text-center mt-5">
    <a href="{{route('quiz.attempt', [$quiz->id])}}">{{$quiz->title}}</a>
    </p>
@endforeach
@endsection
