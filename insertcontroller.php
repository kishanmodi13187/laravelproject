<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class insertcontroller extends Controller
{
    //
    public function display()
    {
    	return view('user');
    }
    public function save(Request $request)
    {
    	$name = $request->input('name');
    	$mobile = $request->input('mobile');
    	$psw = $request->input('psw');
    	$adhar = $request->input('adhar');
    	$address = $request->input('address');

    	DB::insert('insert into exam (name,mobile,psw,adhar,address) values(?,?,?,?,?)',[$name,$mobile,$psw,$adhar,$address]);

    	return redirect('user')->with('success','save');
    }
}
