<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\menu;
use DB;

class actualMenuController extends Controller
{
    //
    public function index() { 
        $lists1 = DB::select('Select * from menu');
        return view('menu',['lists1'=>$lists1]); 
       } 
}
