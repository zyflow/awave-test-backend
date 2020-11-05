<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuestionFormValidation;
use App\QuestionForm;

class QuestionFormController extends Controller
{

    public function index() {

        return QuestionForm::all();
    }

    public function create(QuestionFormValidation $request) {

        /**
         * Filterd by model fillable fields
         */
        QuestionForm::create($request->all());
        return [
            'status' => 'ok'
        ];
    }
}
