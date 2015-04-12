<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassifierItem extends Model {

    public function classifier(){
        return $this->belongsTo('App\Classifier');
	}

}
