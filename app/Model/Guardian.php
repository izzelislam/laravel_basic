<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Guardian extends Model
{
    protected $fillable=[
    	'name','nik','phone','birth_date','address','is_parent'
    ];

    public function Students()
    {
    	return $this->hasMany('App\Model\Student');
    }
}
