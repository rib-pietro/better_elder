<?php

namespace better_elder;

use Illuminate\Database\Eloquent\Model;

class SocialBasics extends Model
{
    public $guarded = [];
    protected $table = 'social_basics';
    public $timestamps = false;
}
