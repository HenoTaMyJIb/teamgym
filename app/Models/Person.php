<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Person extends Model {

    protected $fillable = [
        'first_name',
        'last_name',
        'code',
        'phone',
        'email',
        'country',
        'birth_day',
        'geneder'
    ];

	public function getFullName()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function coach()
    {
        return $this->hasOne('App\Models\Coach');
    }

    public function gymnast()
    {
        return $this->hasOne('App\Models\Gymnast');
    }

    public function judge()
    {
        return $this->hasOne('App\Models\Judge');
    }

    public function getBirthDayAttribute($date)
    {
        return Carbon::parse($date)->format('d.m.Y');
    }
    public function setBirthDayAttribute($date)
    {
        $this->attributes['birth_day'] = Carbon::createFromFormat('d.m.Y', $date);
    }

}
