<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    //
    protected $table = 'rating';
    protected $primaryKey = 'rev_id';
    public $incrementing = false;
    public $timestamps = false;

    public function movie() {
    	return $this->belongsTo('App\Models\Movie', 'mov_id', 'mov_id');
    }

    public function reviewer() {
    	return $this->belongsTo('App\Models\Reviewer', 'rev_id', 'rev_id');
    }

}
