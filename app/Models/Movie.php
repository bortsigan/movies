<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //
    protected $table = 'movie';
    protected $primaryKey = 'mov_id';
    public $incrementing = false;
    public $timestamps = false;

    public function casts() {
    	return $this->hasMany('App\Models\MovieCast', 'mov_id', 'mov_id');
    }

    public function directions() {
    	return $this->hasMany('App\Models\MovieDirection', 'mov_id', 'mov_id');
    }

    public function ratings() {
    	return $this->hasMany('App\Models\Rating', 'mov_id', 'mov_id');
    }

    public function genres() {
    	return $this->hasMany('App\Models\MovieGenre', 'mov_id', 'mov_id');
    }
}
