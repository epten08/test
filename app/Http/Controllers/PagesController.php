<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver;
use App\Models\Tractor;
class PagesController extends Controller
{
    public function index(){
        $data= Driver::all();
        return view('pages.index',compact('data'));
        
    }
    public function contacts(){
        return view('pages.contacts');
    }
}
