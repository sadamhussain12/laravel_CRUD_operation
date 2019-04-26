<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\police_station;
use DB;

class police extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $police= DB::table("police_stations")->get();
		return view ("show_police",compact("police"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $this->validate($request,[
	
	"sho"     => "required",
	"contact" => "required",
    "location"=> "required"	
	]);
	$obj= new police_station;
	
	$obj->sho=     $request->sho;
	$obj->contact= $request->contact;
	$obj->location=$request->location;
	$file= $request->file("image");
	$file->move("upload/",$file->getClientOriginalName());	
	
	$obj->image=$file->getClientOriginalName();
	$save= $obj->save();
	if($save) {
	session()->flash("Message", "Successful Add Record");	
	return redirect("police");	
	}
    }
	
     //
	
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		
		$edit= police_station::find($id);
        return view("edit",compact("edit"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
	 $this->validate($request,[
	
	"sho"     => "required",
	"contact" => "required",
    "location"=> "required"	
	]);
        $police= police_station::find($id);
		$police->sho       =$request->sho;
		$police->location  =$request->location;
		$police->contact   =$request->contact;
		$save= $police->save();
		if($save) {
		   session()->flash("Message", "Successfuly Update Record");
		   return redirect("police");	
		}
		
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $police= police_station::find($id);
		$delete= $police->delete();
		if($delete) {
			session()->flash("Message", "Record has benn Delete Successfuly");
			return redirect('police');
			
		}
    }
}
