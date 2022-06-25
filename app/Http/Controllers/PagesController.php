<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver;
use App\Models\Tractor;
use App\Models\Branch;
class PagesController extends Controller
{
    public function index(){
        $data= Branch::all();
        return view('pages.index',compact('data'));
        
    }
    public function contacts(){
        return view('pages.contacts');
    }
}
