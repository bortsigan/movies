<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MovieDirection extends Model
{
    //
    protected $table  = 'movie_direction';
    protected $primaryKey = 'dir_id';
    public $incrementing = false;
    public $timestamps = false;

    public function director() {
    	return $this->belongsTo('App\Models\Director', 'dir_id', 'dir_id');
    }

}
