<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Workorder;
use App\Worker;
use App\Complaint;
use DB;
use Excel;


class WorkorderController extends Controller
{
     public function index()
    {
        
        $workorders=Workorder::all();
		
        return view('workorders.index',compact('workorders'));
    }
	
	public function show($id)
    {
        $workorder = Workorder::findOrFail($id);
		
		return view('workorders.show',compact('workorder'));
				
    }
	
	public function create()
    {
		$workers = Worker::lists('worker_name','id');
		$complaints = Complaint::lists('id','id');
		 if(count($workers) > 0 && count($complaints) >0){
			         return view('workorders.create', compact('workers','complaints'));
		 }

     	else if(count($workers) > 0 && count($complaints) <=0){
			echo "There are no complaints to create work orders.Please register a new complaint";
		
		}
		else
		{
			echo "There are no workers created.Please create a worker to create work order" ;
	}
                 
		
      
    }
	
	public function store(Request $request)   
    {
       $workorder= new Workorder($request->all());
       $workorder->save();
              return redirect('workorders');
    }
	
	 public function edit($id)
    {
        
		$workers = Worker::lists('worker_name','id');
		$complaints = Complaint::lists('id','id');
		$workorders = Workorder::find($id);

        return view('workorders.edit', compact('workers','complaints','workorders'));
	   
    }
	
	public function update($id,Request $request)
    {
        //
        $workorder= new Workorder($request->all());
        $workorder=Workorder::find($id);
        $workorder->update($request->all());
        return redirect('workorders');
    }
	
	public function destroy($id)
    {
        Workorder::find($id)->delete();
        return redirect('workorders');
    }
	
    public function importExport()
	{
		return view('importExport');
	}
	public function downloadExcel($type)
	{
		$data = Workorder::get()->toArray();
		date_default_timezone_set("America/Chicago");
		return Excel::create('WorkOrders -' . date("Y-m-d h:i:sa"), function($excel) use ($data) {
			$excel->sheet('mySheet', function($sheet) use ($data)
	        {
				$sheet->fromArray($data);
	        });
		})->download($type);
	}

}

