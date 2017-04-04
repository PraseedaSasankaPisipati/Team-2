<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Property;
use DB;
use Excel;

class PropertyController extends Controller
{
   public function index()
    {        
        $properties=Property::all();
		
        return view('properties.index',compact('properties'));
    }
	
	public function show($id)
    {
        $property = Property::findOrFail($id);
		
		return view('properties.show',compact('property'));
				
    }
	
	public function create()
    {
        return view('properties.create');
    }
	
	public function store(Request $request)   
    {
       $property= new Property($request->all());
       $property->save();
              return redirect('properties');
    }
	
	 public function edit($id)
    {
        $property = Property::find($id);
        return view('properties.edit',compact('property'));
    }
	
	public function update($id,Request $request)
    {
        //
        $property= new Property($request->all());
        $property=Property::find($id);
        $property->update($request->all());
        return redirect('properties');
    }
	
	public function destroy($id)
    {
        Property::find($id)->delete();
        return redirect('properties');
    }

	
	public function downloadExcel($type)
	{
		$data = Property::get()->toArray();
		date_default_timezone_set("America/Chicago");
		return Excel::create('Properties -' . date("Y-m-d h:i:sa"), function($excel) use ($data) {
			$excel->sheet('mySheet', function($sheet) use ($data)
	        {
				$sheet->fromArray($data);
	        });
		})->download($type);
	}
	
}
