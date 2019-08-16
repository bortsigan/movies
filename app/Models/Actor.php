<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    //
    protected $table = 'actor';
    protected $primaryKey = 'act_id';
    public $incrementing = false;
    public $timestamps = false;

    public function movieCasts() {
    	$this->hasMany('App/Models/MovieCast', 'act_id', 'act_id');
    }
}
