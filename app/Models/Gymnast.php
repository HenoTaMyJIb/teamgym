<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gymnast extends Model
{

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function person()
    {
        return $this->belongsTo('App\Models\Person');
    }

    public function club()
    {
        return $this->belongsTo('App\Models\Club');
    }

    public function teams()
    {
        return $this->hasMany('App\Model\Team');
    }
}
