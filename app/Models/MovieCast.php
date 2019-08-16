<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MovieCast extends Model
{
    //
    protected $table = 'movie_cast';
    protected $primaryKey = 'act_id';
    public $incrementing = false;
    public $timestamps = false;

    public function movies() {
    	return $this->belongsTo('App\Models\Movie', 'mov_id', 'mov_id');
    }

    public function actors() {
    	return $this->belongsTo('App\Models\Actor', 'act_id', 'act_id');
    }

}
