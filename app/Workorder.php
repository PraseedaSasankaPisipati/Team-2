<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workorder extends Model
{
     protected $fillable=[
        'complaint_id',
		'worker_id',
        'worker_mobilephone',
		'order_description',
		'order_est_cost',
		'order_actual_cost',
		'order_date',
		'order_completion_date',
    'order_status',
    ];
	
  public function worker()
    {
        return $this->belongsTo('App\Worker');
    }	
	
  public function complaint()
    {
        return $this->belongsTo('App\Complaint');
    }	
}
