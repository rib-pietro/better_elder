<?php

namespace better_elder;

use Illuminate\Database\Eloquent\Model;

class Feeding extends Model
{
    public $guarded = [];
    protected $table = 'feeding';
    public $timestamps = false;
}
