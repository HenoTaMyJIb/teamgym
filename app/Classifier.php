<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Classifier extends Model {

    public function items(){
        return $this->hasMany('App\ClassifierItem');
	}

}
