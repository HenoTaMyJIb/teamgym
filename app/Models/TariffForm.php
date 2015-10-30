<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TariffForm extends Model
{
    use SoftDeletes;

    protected $fillable = ['team_id', 'discipline_code'];
    protected $dates = ['deleted_at'];

    public function disciplineCode()
    {
        return $this->belongsTo('App\Models\Discipline', 'discipline_code', 'code');
    }

    public function team()
    {
        return $this->belongsTo('App\Models\Team');
    }

    public function rounds()
    {
        return $this->hasMany('App\Models\Round');
    }
}
