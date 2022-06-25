<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver;

class DriversController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drivers = Driver::all();
        return view('drivers.index')->with('drivers',$drivers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('drivers.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($requests,[
            'name'=>'required',
            'surname'=>'required',
            'DOB'=>'required',
            'licenseNo'=>'required',
        ]);
        $driver = new Driver;
        $driver->name = $request->input('name');
        $driver->surname = $request->input('surname');
        $driver->DOB = $request->input('DOB');
        $driver->licenseNo = $request->input('licenseNo');
        $driver->save();

        return redirect('/drivers')->with('success','Driver Info Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $driver = Driver::find($id);
        return view('drivers.show')->with('driver',$driver);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $driver = Driver::find($id);
        
        if (!isset($driver)){
            return redirect('/drivers')->with('error','This driver does not exist');
        }
        if(auth()->user()->id !==$driver->user_id){
            return redirect('/drivers')->with('error','Unathorised Access');
        }
        return view('drivers.edit')->with('driver',$driver);
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
        $this->validate($requests,[
            'name'=>'required',
            'surname'=>'required',
            'DOB'=>'required',
            'licenseNo'=>'required',
        ]);
        $driver = new Driver;
        $driver->name = $request->input('name');
        $driver->surname = $request->input('surname');
        $driver->DOB = $request->input('DOB');
        $driver->licenseNo = $request->input('licenseNo');
        $driver->save();

        return redirect('/drivers')->with('success','Driver Info Added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $driver = Driver::find($id);
      /**   
        if (!isset($driver)){
            return redirect('/drivers')->with('error','This driver does not exist');
        }
        if(auth()->user()->id !==$driver->user_id){
            return redirect('/drivers')->with('error','Unathorised Access');
        }
        */
        $driver->delete();
        return redirect('/drivers')->with('success','Driver Removed');
    }
}
