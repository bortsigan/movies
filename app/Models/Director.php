<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    //
    public $table = 'director';
    protected $primaryKey = 'dir_id';
    public $incrementing = false;
    public $timestamps = false;

    public function movieDirections() {
    	return $this->hasMany('App/Models/MovieDirection', 'dir_id', 'dir_id');
    }

}
