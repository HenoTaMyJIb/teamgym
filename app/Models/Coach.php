<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Coach extends Model {

    use SoftDeletes;

    protected $fillable = [
        'coach_category',
        'club_id'
    ];

    protected $dates = ['deleted_at'];

    public function club()
    {
        return $this->belongsTo('App\Models\Club');
	}

    public function person()
    {
        return $this->belongsTo('App\Models\Person');
    }

}
