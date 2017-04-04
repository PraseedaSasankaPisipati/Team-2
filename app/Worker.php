<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
     protected $fillable=[
        'worker_name',
        'worker_mobilephone',
		'worker_skills',
    ];
	public function workorder()
    {
        return $this->hasMany('App\Workorder');
    }
}
