<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MovieGenre extends Model
{
    //
    protected $table = 'movie_genres';
    protected $primaryKey = 'gen_id';
    public $incrementing = false;
    public $timestamps = false;

    public function genre() {
    	return $this->belongsTo('App\Models\Genre', 'gen_id', 'gen_id');
    }

    public function movie() {
    	return $this->belongsTo('App\Models\Movie', 'mov_id', 'mov_id');
    }
}
