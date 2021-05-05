<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class StudUpdateController extends Controller {
   public function index() {
      $users = DB::select('select * from exam');
      return view('stud_edit_view',['users'=>$users]);
   }
   public function show($id) {
      $users = DB::select('select * from exam where id = ?',[$id]);
      return view('stud_update',['users'=>$users]);
   }
   public function edit(Request $request,$id) {
      $name = $request->input('name');
      DB::update('update exam set name = ? where id = ?',[$name,$id]);
      echo "Record updated successfully.<br/>";
      echo '<a href = "/edit-records">Click Here</a> to go back.';
   }
}