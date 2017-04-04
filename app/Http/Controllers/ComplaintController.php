<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Complaint;
use App\Building;

use DB;
use Excel;

class ComplaintController extends Controller
{
    public function index()
    {
        
        $complaints=Complaint::all();
		
        return view('complaints.index',compact('complaints'));
    }
	
	public function show($id)
    {
        $complaint = Complaint::findOrFail($id);
		
		return view('complaints.show',compact('complaint'));
		
		
    }
	
	
	public function create()
    {
		
		$buildings = Building::lists('building_name','id');
        return view('complaints.create', compact('buildings'));
        //return view('complaints.create');
    }
	
	public function store(Request $request)   
    {
       $complaint= new Complaint($request->all());
       $complaint->save();
              return redirect('complaints');
    }
	 public function edit($id)
    {
        $complaint = Complaint::find($id);
        return view('complaints.edit',compact('complaint'));
    }
	
	public function update($id,Request $request)
    {
        //
        $complaint= new Complaint($request->all());
        $complaint=Complaint::find($id);
        $complaint->update($request->all());
        return redirect('complaints');
    }
	
	public function destroy($id)
    {
        Complaint::find($id)->delete();
        return redirect('complaints');
    }
	
	 public function importExport()
	{
		return view('importExport');
	}
	public function downloadExcel()
	{
		$data = Complaint::get()->toArray();
		date_default_timezone_set("America/Chicago");
		return Excel::create('Complaints -' . date("Y-m-d h:i:sa"), function($excel) use ($data) {
			$excel->sheet('mySheet', function($sheet) use ($data)
	        {
				$sheet->fromArray($data);
	        });
		})->download();
	}
}