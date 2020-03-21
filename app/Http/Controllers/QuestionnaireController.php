<?php

namespace App\Http\Controllers;

use App\Questionnaire;
use Illuminate\Http\Request;

class QuestionnaireController extends Controller
{

    public function __construct()
    {
//        To protect the content, you must be logged in to access the content
        $this->middleware('auth');
    }

    public function create()
    {
        return view('questionnaire.create');
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'required',
            'purpose' => 'required',
        ]);

        $questionnaire = auth()->user()->questionnaires()->create($data);

        return redirect('/questionnaires/' .$questionnaire->id);
    }

    public function show(Questionnaire $questionnaire)
    {
        return view('questionnaire.show', compact('questionnaire'));
    }
}
