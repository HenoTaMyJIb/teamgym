<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Series extends Model
{
    use SoftDeletes;

    protected $fillable = ['round_id', 'order'];
    protected $dates = ['deleted_at'];

    public function elements()
    {
        return $this->belongsToMany('App\Models\Element');
    }

}
