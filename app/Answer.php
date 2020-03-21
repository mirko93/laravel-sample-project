<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\Console\Question\Question;

class Answer extends Model
{
    protected $guarded = [];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
