<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Branch;

class BranchesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branches = Branch::all();
        return view('branches.index')->with('branches',$branches);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('branches.create');
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
            
        ]);
        $branch = new Branch;
        $branch-> name = $request->input('branch');
        $branch->save();

        return redirect('/branches')->with('success','Branch Info Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $branch = Branch::find($id);
        return view('branches.show')->with('branches',$branch);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $branch = Branch::find($id);
        
        if (!isset($branch)){
            return redirect('/branches')->with('error','This Branch does not exist');
        }
        if(auth()->user()->id !==$branch->user_id){
            return redirect('/branches')->with('error','Unathorised Access');
        }
        return view('branches.edit')->with('branches',$branches);
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
            
        ]);
        $branch = new Branch;
        $branch-> name = $request->input('branch');
        $branch->save();

        return redirect('/branches')->with('success','Branch Info Added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!isset($branch)){
            return redirect('/branches')->with('error','This Branch does not exist');
        }
        if(auth()->user()->id !==$branch->user_id){
            return redirect('/branches')->with('error','Unathorised Access');
        }
        $branch->delete();
        return redirect('/branches')->with('success','Branch Removed');

    }
}
