<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
      protected $fillable=[
		'property_name',
        'property_address',
		'propertymanager_id',
		'number_of_buildings',
		];
		
		public function buildings()
    {
        return $this->hasMany('App\Building');
    }
	
		public function buildingmanagers()
    {
        return $this->hasMany('App\Buildingmanager');
    }
	
		public function properties()
    {
        return $this->belongsTo('App\Propertymanager');
    }
}
