<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coach extends Model {

    public function club()
    {
        return $this->belongsTo('App\Models\Club');
	}

    public function person()
    {
        return $this->belongsTo('App\Models\Person');
    }

}
