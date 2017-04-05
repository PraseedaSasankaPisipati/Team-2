<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buildingmanager extends Model
{
     protected $fillable=[
		'buildingmanager_name',
        'buildingmanager_mobilephone',
		'buildingmanager_email',
];


}
