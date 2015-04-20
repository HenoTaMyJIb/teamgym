<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Club extends Model {

    public function coaches()
    {
        return $this->hasMany('App\Models\Coach');
	}

}
