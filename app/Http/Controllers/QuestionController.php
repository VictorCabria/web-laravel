<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function show(Question $question)
    {
        // Logic to retrieve and display a question by its ID
        return view('questions.show', ['question' => $question]);
    }
}
