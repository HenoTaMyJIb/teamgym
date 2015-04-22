<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Judge extends Model {

	use SoftDeletes;

    protected $fillable = [
        'judge_category',
        'club_id'
    ];

    protected $dates = ['deleted_at'];

    public function person()
    {
        return $this->belongsTo('App\Models\Person');
    }

    public function club()
    {
        return $this->belongsTo('App\Models\Club');
    }

}
