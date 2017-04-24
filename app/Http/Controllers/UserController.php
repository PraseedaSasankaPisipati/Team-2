<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\Buildingmanager;
use App\Propertymanager;
use App\Worker;
use DB;
use Excel;

class UserController extends Controller
{
     public function index()
    {
        
        $users=User::all();
		
        return view('users.index',compact('users'));
    }
	public function show($id)
    {
        $user = User::findOrFail($id);
		
		return view('users.show',compact('user'));
				
    }
	public function create()
    {
        return view('users.create');
    }
	public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit',compact('user'));
    }	
	public function store(Request $request)   
    {
	
	  User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'role'=>$request['role']
        ]);
		if($request['role'] === 'bman'){
			//echo "Building $$$$$$$$$$$$$$$$$$$$$$$$ Manager";
			 Buildingmanager::create([
            'buildingmanager_name' => $request['name'],
            'buildingmanager_email' => $request['email'],
            'buildingmanager_mobilephone' => "963852741",
        ]);
		}	else if ($request['role'] === 'pman'){
				 Propertymanager::create([
            'propertymanager_name' => $request['name'],
            'propertymanager_email' => $request['email'],
            'propertymanager_mobilephone' => "963852741",
        ]);	
		}else if($request['role'] === 'work'){
			 Worker::create([
            'worker_name' => $request['name'],
            'worker_mobilephone' => "123456789",
            'worker_skills' => "Electrician",
		]);
		}
       return redirect('users');
    }
	
	public function update($id,Request $request)
    {
        //
        $user= new User($request->all());
        $user=User::find($id);
        $user->update($request->all());
        return redirect('users');
    }
	public function destroy($id)
    {
        User::find($id)->delete();
        return redirect('users');
    }
	
	public function downloadExcel($type)
	{
		$data = User::get()->toArray();
		date_default_timezone_set("America/Chicago");
		return Excel::create('Users -' . date("Y-m-d h:i:sa"), function($excel) use ($data) {
			$excel->sheet('mySheet', function($sheet) use ($data)
	        {
				$sheet->fromArray($data);
	        });
		})->download($type);
	}
	
	

	
	
}