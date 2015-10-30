<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class AgeGroup extends Model {

    use SoftDeletes;

	protected $fillable = [
        'name',
        'min_year',
        'max_year',
        'code_of_points',
        'gymnasts_amount'
    ];

    protected $dates = ['deleted_at'];

    public function codeOfPoints()
    {
        return $this->hasOne('App\Models\CodeOfPoint', 'code', 'code_of_points');
    }

    public function gymnastsAmount()
    {
        return $this->hasOne('App\Models\GymnastAmount', 'code', 'gymnasts_amount');
    }

    public function setNameAttribute($name)
    {
        $this->attributes['name'] = ucfirst($name);
        $this->attributes['slug'] = Str::slug($name);
    }
}
