<?php

namespace better_elder;

use Illuminate\Database\Eloquent\Model;

class SocialInterests extends Model
{
    public $guarded = [];
    protected $table = 'social_interests';
    public $timestamps = false;
}
