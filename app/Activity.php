<?php

namespace better_elder;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $table = 'activities';
    public $timestamps = false;
    protected $guarded = ['id_activity'];
}
