<?php

namespace better_elder;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'city';
    public $guarded = [];
    public $timestamps = false;
}
