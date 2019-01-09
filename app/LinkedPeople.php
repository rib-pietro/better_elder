<?php

namespace better_elder;

use Illuminate\Database\Eloquent\Model;

class LinkedPeople extends Model
{
    public $guarded = [];
    protected $table = 'linked_people';
    public $timestamps = false;
}
