<?php

namespace better_elder;

use Illuminate\Database\Eloquent\Model;

class AvailableExam extends Model
{
    protected $table = 'available_exams';
    public $timestamps = false;
    protected $guarded = ['id_exam'];
}
