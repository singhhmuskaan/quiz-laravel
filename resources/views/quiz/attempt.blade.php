@extends('layouts.main')
@section('content')

<h4 class="text-center mt-3">{{$quiz->title}}</h4>

<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-sm-6">
            @if($errors->any())
                <p class="text-danger">{{$errors->first()}}</p>
            @endif
            <form action="{{route('quiz.score', [$quiz->id])}}" method="post">
                @csrf
                <input type="hidden" value="{{$quiz->id}}" name="quiz_id"/>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label" >Username</label>
                    <input type="text" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div>
                    @foreach($quiz->questions as $question)
                        <p>Q:{{$question->label}}</p>
                    <input type="hidden" value="{{$question->id}}" name="question_id[]"/>

                        <div class="form-check">
                            @foreach($question->options as $option)
                                <input required class="form-check-input" type="radio" value="{{$option->id}}" name="answer-{{$question->id}}" id="option-radio-{{$option->id}}">
                               <p>
                                   <label class="form-check-label" for="option-radio-{{$option->id}}">
                                       {{$option->option}}
                                   </label>
                               </p>
                            @endforeach
                        </div>
                    @endforeach
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

</div>


@endsection

