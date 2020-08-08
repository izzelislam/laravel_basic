<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable=
    ['guardian_id','name','nis','gender','birth_date','address','class','major','height','weight'];

    public function Guardian()
    {
    	return $this->belongsTo('App\Model\Guardian');
    }
}
