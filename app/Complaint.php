<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    protected $fillable=[
	    'building_id',
		'customer_name',
        'customer_email',
		'customer_mobilephone',
		'customer_aptphone',
		'customer_complaint',
		'customer_address',
	];
	
	public function building()
    {
        return $this->belongsTo('App\Building');
    }
	
	public function workorder()
    {
        return $this->hasOne('App\Workorder');
    }
}
