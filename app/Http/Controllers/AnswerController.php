<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Option;
use App\Models\Question;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    function store(Request $request){
        $question_ids = $request->get("question_id");
        foreach ($question_ids as $question_id){
            $question = Question::find($question_id);
            $option_id = $request->get("answer-{$question_id}");
            $option = Option::find($option_id);
            $existing = Answer::where('username', $request->get('username'))->where('question_id', $question_id)->where('quiz_id', $request->get('quiz_id'))->exists();
             if (!$existing){
                 $answer = new Answer();
                 $answer->quiz_id = $question->quiz_id;
                 $answer->username = $request->get('username');
                 $answer->option_id = $option_id;
                 $answer->is_correct = $option->is_correct;
                 $answer->question_id = $question_id;
                 $answer->save();
             }


        }

        $total_answers = Answer::where('username', $request->get('username'))->where('quiz_id', $question->quiz_id)->count();
        $correct_answers = Answer::where('username', $request->get('username'))->where('is_correct', 1)->where('quiz_id', $question->quiz_id)->count();
         $percentage = round($correct_answers/$total_answers*100);
        return view('quiz.score', compact(['total_answers', 'correct_answers', 'percentage']));
    }




}
