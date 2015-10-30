<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

class Person extends Model
{

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = ['first_name', 'last_name', 'code', 'phone', 'email', 'country', 'birth_day', 'gender'];

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
        if (!empty($date)) {
            $this->attributes['birth_day'] = Carbon::createFromFormat('d.m.Y', $date);
        }
    }

    public function setCodeAttribute($code)
    {
        if (!empty($code)) {
            if (starts_with($code, '4') || starts_with($code, '6')) {
                $this->attributes['gender'] = 'women';
            } else if (starts_with($code, '3') || starts_with($code, '5')) {
                $this->attributes['gender'] = 'men';
            }
            $year = substr($code, 1, 2);
            if (starts_with($code, '3') || starts_with($code, '4')) {
                $year = '19' . $year;
            }
            else if(starts_with($code, '5') || starts_with($code, '6')){
                $year = '20' . $year;
            }
            $month = substr($code, 3, 2);
            $day = substr($code, 5, 2);
            $this->attributes['birth_day'] = Carbon::createFromDate($year, $month, $day);
            $this->attributes['code'] = $code;

            $now = Carbon::now();
            $this->attributes['age'] = $now->year - $year;
        }
    }

}
