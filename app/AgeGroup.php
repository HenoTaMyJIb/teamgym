<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class AgeGroup extends Model {

    use SoftDeletes;

	protected $fillable = [
        'name',
        'min_year',
        'max_year',
        'rule_type',
        'gymnasts_amount'
    ];

    protected $dates = ['deleted_at'];

    public function setNameAttribute($name)
    {
        $this->attributes['name'] = ucfirst($name);
        $this->attributes['slug'] = Str::slug($name);
    }
}
