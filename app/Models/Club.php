<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Club extends Model {

    public function coaches()
    {
        return $this->hasMany('App\Models\Coach');
	}

    public function gymnasts()
    {
        return $this->hasMany('App\Models\Gymnast');
    }

    public function judges()
    {
        return $this->hasMany('App\Models\Judge');
    }

}
