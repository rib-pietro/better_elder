<?php

namespace better_elder;

use Illuminate\Database\Eloquent\Model;

class HealthBasics extends Model
{
    public $guarded = [];
    protected $table = 'health_basics';
    public $timestamps = false;
}
