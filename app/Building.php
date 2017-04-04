<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
	 protected $fillable=[
        'building_name',
		'building_id',
        'building_address',
		'number_of_apartments',

		
	 ];
	 public function buildingmanager() {
        return $this->belongsTo('App\Buildingmanager');
    }
	
	 public function complaint() {
        return $this->hasMany('App\Complaint');
    }
	
	
}