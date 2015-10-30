<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Element extends Model {

    public function elementValues()
    {
        return $this->hasMany('App\Models\ElementValue');
    }

    public function elementType()
    {
        return $this->belongsTo('App\Models\ElementType', 'type_code', 'code');
    }

    public function series()
    {
        return $this->belongsToMany('App\Models\Series');
    }
}
