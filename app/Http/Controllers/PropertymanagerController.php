<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Propertymanager;
use App\User;

use DB;
use Excel;
class PropertymanagerController extends Controller

{
     public function index()
    {
        
        $propertymanagers=Propertymanager::all();
		
        return view('propertymanagers.index',compact('propertymanagers'));
    }
	
	public function show($id)
    {
        $propertymanager = Propertymanager::findOrFail($id);
		
		return view('propertymanagers.show',compact('propertymanager'));
				
    }
	
	public function create()
    {
	  return view('propertymanagers.create');
	  
    }
	
	public function store(Request $request)   
    {
       $propertymanager= new Propertymanager($request->all());
       $propertymanager->save();
	    User::create([
            'name' => $request['propertymanager_name'],
            'email' => $request['propertymanager_email'],
            'password' => bcrypt('123456'),
            'role'=>"pman",
        ]);
              return redirect('propertymanagers');
    }
	
	 public function edit($id)
    {
        $propertymanager = Propertymanager::find($id);
        return view('propertymanagers.edit',compact('propertymanager'));
    }
	
	public function update($id,Request $request)
    {
        //
        $propertymanager= new Propertymanager($request->all());
        $propertymanager=Propertymanager::find($id);
        $propertymanager->update($request->all());
        return redirect('propertymanagers');
    }
	
	public function destroy($id)
    {
        Propertymanager::find($id)->delete();
        return redirect('propertymanagers');
    }
	
	public function downloadExcel($type)
	{
		$data = Propertymanager::get()->toArray();
		date_default_timezone_set("America/Chicago");
		return Excel::create('Propertymanagerss -' . date("Y-m-d h:i:sa"), function($excel) use ($data) {
			$excel->sheet('mySheet', function($sheet) use ($data)
	        {
				$sheet->fromArray($data);
	        });
		})->download($type);
	}
	
}

