<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Building;
use App\Buildingmanager;
use App\User;

class BuildingController extends Controller
{
     public function index()
    {
        
        $buildings=Building::all();
		
        return view('buildings.index',compact('buildings'));
    }
	
	public function show($id)
    {
        $building = Building::findOrFail($id);
		
		return view('buildings.show',compact('building'));
				
    }
	
	public function create()
    {
	  $users = User::where('role','=','bman')->lists('name','id');
	 
	   //$count = User::where('role','=','bman')->count();
	   if(sizeOf($users) > 0){
		//return view('buildings.create');   
		return view('buildings.create', compact('users'));
	   }
	   else{
		   echo "There are no BuildingManagers created.Please create a BuildingManager" ;
	   }
	  
    }
	
	public function store(Request $request)   
    {
       $building= new Building($request->all());
       $building->save();
              return redirect('buildings');
    }
	
	 public function edit($id)
    {
        $building = Building::find($id);
        return view('buildings.edit',compact('building'));
    }
	
	public function update($id,Request $request)
    {
        //
        $building= new Building($request->all());
        $building=Building::find($id);
        $building->update($request->all());
        return redirect('buildings');
    }
	
	public function destroy($id)
    {
        Building::find($id)->delete();
        return redirect('buildings');
    }
	
}