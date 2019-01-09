<?php

namespace better_elder;

use Illuminate\Database\Eloquent\Model;

class Obstacles extends Model
{
    public $guarded = [];
    protected $table = 'obstacles';
    public $timestamps = false;
}
