<?php

namespace better_elder;

use Illuminate\Database\Eloquent\Model;

class PhysicalActivities extends Model
{
    public $guarded = [];
    protected $table = 'physical_activities';
    public $timestamps = false;
}
