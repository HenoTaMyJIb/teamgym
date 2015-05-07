<?php namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{

    protected $dates = ['start_date', 'end_date', 'reg_start', 'reg_end'];
    
    public function teams()
    {
        return $this->hasMany('App\Models\Team');
    }

    public function getStartDateAttribute($date)
    {
        return Carbon::parse($date)->format('d.m.Y H:i, l');
    }

    public function setStartDateAttribute($date)
    {
        $this->attributes['start_date'] = Carbon::createFromFormat('d.m.Y H:i', $date);
    }

    public function setEndDateAttribute($date)
    {
        $this->attributes['end_date'] = Carbon::createFromFormat('d.m.Y H:i', $date);
    }

    public function getRegStartAttribute($date)
    {
        return Carbon::parse($date)->format('d.m.Y');
    }

    public function setRegStartAttribute($date)
    {
        $this->attributes['reg_start'] = Carbon::createFromFormat('d.m.Y', $date);
    }

    public function getRegEndAttribute($date)
    {
        return Carbon::parse($date)->format('d.m.Y');
    }

    public function setRegEndAttribute($date)
    {
        $this->attributes['reg_end'] = Carbon::createFromFormat('d.m.Y', $date);
    }

}
