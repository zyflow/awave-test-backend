<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionForm extends Model
{
    protected $table = 'question_form';

    protected $fillable = ['firstName', 'lastName', 'phone', 'email', 'message'];
}
