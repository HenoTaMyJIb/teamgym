<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class Team extends Model
{

    use SoftDeletes;

    protected $fillable = [
        'name',
        'age_group_id',
        'gender_category',
        'club_id',
        'competition_id'
    ];

    public function ageGroup()
    {
        return $this->belongsTo('App\Models\AgeGroup');
    }
    public function club()
    {
        return $this->belongsTo('App\Models\Club');
    }

    public function gender()
    {
        return $this->belongsTo('App\Models\Gender', 'gender_category', 'code');
    }

    public function setNameAttribute($name)
    {
        $this->attributes['name'] = ucfirst($name);
        $this->attributes['slug'] = Str::slug($name);
    }

    public function competition()
    {
        return $this->belongsTo('App\Models\Competition');
    }

    public function creator()
    {
        return $this->belongsTo('App\User', 'created_by', 'id');
    }

    public function gymnasts()
    {
        return $this->belongsToMany('App\Models\Gymnast');
    }

    public function tariffForms()
    {
        return $this->hasMany('App\Models\TariffForm');
    }

    public function isAllowedToWatch()
    {
        $user = Auth::user();
        if ($user->isAdmin() || $this->creator->id === $user->id) {
            return true;
        }
    }

}
