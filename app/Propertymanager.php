<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propertymanager extends Model
{
	  protected $fillable=[
        'propertymanager_name',
        'propertymanager_mobilephone',
        'propertymanager_email',
   ];
   	public function property()
    {
        return $this->hasMany('App\Property');
    }
}
