<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Buildingmanager;
use App\Building;
use App\User;

use DB;
use Excel;

class BuildingmanagerController extends Controller
{
     public function index()
    {
        
        $buildingmanagers=Buildingmanager::all();
		
        return view('buildingmanagers.index',compact('buildingmanagers'));
    }
	
	public function show($id)
    {
        $buildingmanager = Buildingmanager::findOrFail($id);
		
		return view('buildingmanagers.show',compact('buildingmanager'));
				
    }
	
	public function create()
    {
	  return view('buildingmanagers.create');
	  
    }
	
	public function store(Request $request)   
    {
       $buildingmanager= new Buildingmanager($request->all());
       $buildingmanager->save();
	    User::create([
            'name' => $request['buildingmanager_name'],
            'email' => $request['buildingmanager_email'],
            'password' => bcrypt('123456'),
            'role'=>"bman",
        ]);
              return redirect('buildingmanagers');
    }
	
	 public function edit($id)
    {
        $buildingmanager = Buildingmanager::find($id);
        return view('buildingmanagers.edit',compact('buildingmanager'));
    }
	
	public function update($id,Request $request)
    {
        //
        $buildingmanager= new Buildingmanager($request->all());
        $buildingmanager=Buildingmanager::find($id);
        $buildingmanager->update($request->all());
        return redirect('buildingmanagers');
    }
	
	public function destroy($id)
    {
        Buildingmanager::find($id)->delete();
        return redirect('buildingmanagers');
    }
	
	public function downloadExcel($type)
	{
		$data = Buildingmanager::get()->toArray();
		date_default_timezone_set("America/Chicago");
		return Excel::create('Buildingmanagerss -' . date("Y-m-d h:i:sa"), function($excel) use ($data) {
			$excel->sheet('mySheet', function($sheet) use ($data)
	        {
				$sheet->fromArray($data);
	        });
		})->download($type);
	}
	
}
