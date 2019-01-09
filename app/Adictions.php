<?php

namespace better_elder;

use Illuminate\Database\Eloquent\Model;

class Adictions extends Model
{
    public $guarded = [];
    protected $table = 'adictions';
    public $timestamps = false;
}
