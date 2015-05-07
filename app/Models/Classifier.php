<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classifier extends Model {

    public function items(){
        return $this->hasMany('App\Models\ClassifierItem');
	}
        
    public function scopeOfCode($query, $code) 
    {
        return $query->whereCode($code);
    }

}
