<?php

namespace better_elder;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'address';
    public $guarded = [];
    public $timestamps = false;
}
