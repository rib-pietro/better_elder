<?php

namespace better_elder;

use Illuminate\Database\Eloquent\Model;

class FallReports extends Model
{
    public $guarded = [];
    protected $table = 'fall_reports';
    public $timestamps = false;
}
