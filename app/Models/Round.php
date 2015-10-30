<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Round extends Model {

	use SoftDeletes;

    protected $fillable = ['tariff_form_id', 'order'];
    protected $dates = ['deleted_at'];

    public function series()
    {
        return $this->hasMany('App\Models\Series');
    }

}
