<?php

namespace better_elder;

use Illuminate\Database\Eloquent\Model;

class Specialist extends Model
{
    protected $table = 'specialists';
    protected $primaryKey = 'id_specialist';
    public $timestamps = false;
    protected $guarded = [];
}
