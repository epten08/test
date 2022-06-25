<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tractor;

class TractorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tractors = Tractor::all();
        return view('tractors.index')->with('tractors',$tractors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        

        return view('tractors.create');
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
            'brand'=>'required',
            'model'=>'required',
            'reg'=>'required',
            'markers'=>'required',
        ]);
        $tractor = new Tractor;
        $tractor->brand = $request->input('brand');
        $tractor->model = $request->input('model');
        $tractor->reg = $request->input('reg');
        $tractor->markers = $request->input('markers');
        $tractor->user_id = auth()->user()->id;
        $tractor->save();

        return redirect('/tractors')->with('success','Tractor Info Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function show($id)
    {
        $tractor = Tractor::find($id);
        return view('tractors.show')->with('tractor',$tractor);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tractor = Tractor::find($id);
        
        if (!isset($tractor)){
            return redirect('/tractors')->with('error','This tractor does not exist');
        }
        if(auth()->user()->id !==$tractor->user_id){
            return redirect('/tractors')->with('error','Unathorised Access');
        }
        return view('tractors.edit')->with('tractor',$tractor);
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
            'brand'=>'required',
            'model'=>'required',
            'reg'=>'required',
            'markers'=>'required',
        ]);
        $tractor = new Tractor;
        $tractor->brand = $request->input('brand');
        $tractor->model = $request->input('model');
        $tractor->reg = $request->input('reg');
        $tractor->markers = $request->input('markers');
        $tractor->user_id = auth()->user()->id;
        $tractor->save();

        return redirect('/tractors')->with('success','Info Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tractor = Tractor::find($id);

        if (!isset($tractor)){
            return redirect('/tractors')->with('error','This tractor does not exist');
        }
        if(auth()->user()->id !==$tractor->user_id){
            return redirect('/posts')->with('error','Unathorised Access');
        }
        $tractor->delete();
        return redirect('/tractors')->with('sucess','Driver Removed');
    }
}
