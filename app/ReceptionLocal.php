<?php

namespace better_elder;

use Illuminate\Database\Eloquent\Model;

class ReceptionLocal extends Model
{
    protected $table = 'reception_local';
    protected $primaryKey = 'id_local';
    public $guarded = [];

}
