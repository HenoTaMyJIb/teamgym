<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ElementType extends Model {

    public function elements()
    {
        return $this->hasMany('App\Models\Element');
    }

    public function discipline()
    {
        return $this->belongsTo('App\Models\Discipline', 'discipline_code', 'code');
    }

}
