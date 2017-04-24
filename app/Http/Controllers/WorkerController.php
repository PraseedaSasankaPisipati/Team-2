<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Worker;
use App\User;

use DB;
use Excel;

class WorkerController extends Controller
{
     public function index()
    {
        
        $workers=Worker::all();
		
        return view('workers.index',compact('workers'));
    }
	public function show($id)
    {
        $worker = worker::findOrFail($id);
		
		return view('workers.show',compact('worker'));
				
    }
	
	public function create()
    {
		
        return view('workers.create');
    }
	
	public function store(Request $request)   
    {
       $worker = new Worker($request->all());
       $worker->save();
	   User::create([
            'name' => $request['worker_name'],
            'email' => $request['worker_name'].'@mercy.com',
            'password' => bcrypt('123456'),
            'role'=>"work",
        ]);
       return redirect('workers');
    }
	
	 public function edit($id)
    {
        $worker = Worker::find($id);
        return view('workers.edit',compact('worker'));
    }
	
	public function update($id,Request $request)
    {
        //
        $worker= new Worker($request->all());
        $worker=Worker::find($id);
        $worker->update($request->all());
        return redirect('workers');
    }
	
	public function destroy($id)
    {
        Worker::find($id)->delete();
        return redirect('workers');
    }
	 public function importExport()
	{
		return view('importExport');
	}
	public function downloadExcel($type)
	{
		$data = Worker::get()->toArray();
		date_default_timezone_set("America/Chicago");
		return Excel::create('Workers -' . date("Y-m-d h:i:sa"), function($excel) use ($data) {
			$excel->sheet('mySheet', function($sheet) use ($data)
	        {
				$sheet->fromArray($data);
	        });
		})->download($type);
	}
}
