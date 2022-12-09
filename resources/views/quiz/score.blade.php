@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center mt-5">
                <p>Attempted questions: {{$total_answers}} </p>
                <p>Correct Answers: {{$correct_answers}}</p>
                <p>Score: {{$percentage}}</p>
            </div>
        </div>
    </div>



@endsection
