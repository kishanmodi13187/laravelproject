<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class reportconrtroller extends Controller
{
    //
    public function display()
    {
    	return view('report');
    }
    public function save(Request $request)
    {
    	$name = $request->input('name');
    	$number = $request->input('number');
    	$type = $request->input('type');
    	$report = $request->input('report');

    	DB::insert('insert into report (name,number,type,report) values(?,?,?,?)',[$name,$number,$type,$report]);

    	return redirect('report')->with('success','save');
    }
}
