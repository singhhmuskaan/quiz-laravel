<?php

use App\Http\Controllers\AnswerController;
use App\Http\Controllers\QuizController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('quiz', [QuizController::class, 'index'])->name('quiz');
Route::get('quiz-attempt/{id}', [QuizController::class, 'attempt'])->name('quiz.attempt');
Route::post('answer', [AnswerController::class, 'store'])->name('answer.store');
