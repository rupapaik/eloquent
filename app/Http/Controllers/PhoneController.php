<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use\App\Phone;
class PhoneController extends Controller
{
  public function index(){
 $phone=Phone::all();
/*
    //.......belongsTo join with query builder......

    $phone=DB::table('phones')
    ->join('users','phones.user_id','users.id')
    ->get();
*/
    return view('phones',compact('phone'));
  }
}
