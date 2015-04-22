<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model {

    protected $fillable = [
        'first_name',
        'last_name',
        'code',
        'phone',
        'email'
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

}
