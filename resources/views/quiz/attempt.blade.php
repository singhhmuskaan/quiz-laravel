@extends('layouts.main')
@section('content')

<h4>{{$quiz->title}}</h4>

<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-sm-6">
            <form action="{{route('answer.store')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div>
                    @foreach($quiz->questions as $question)
                        <p>Q:{{$question->label}}</p>
                        <div class="form-check">
                            @foreach($question->options as $option)
                                <input class="form-check-input" type="radio" value="{{$option->id}}" name="option[]" id="option-radio-{{$option->id}}">
                                <label class="form-check-label" for="option-radio-{{$option->id}}">
                                    {{$option->option}}
                                </label>
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

