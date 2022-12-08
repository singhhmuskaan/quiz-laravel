<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    function index(): Factory|View|Application
    {
        $quizzes = Quiz::all();
        return view('quiz.index', compact("quizzes"));
    }

    function attempt($id){
        $quiz = Quiz::with(['questions','questions.options'])->find($id);
        return view('quiz.attempt', compact('quiz'));
    }
}
