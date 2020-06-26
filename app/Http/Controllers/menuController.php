<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\menu;
use DB;

class menuController extends Controller
{
    //
    public function index(){
        
        $lists1 = DB::select('Select * from menu ORDER BY RAND() LIMIT 6');
        $lists2 = DB::select('Select * from menu ORDER BY RAND()');
        $lists3 = DB::select('Select * from menu where category="Non-vegetarian"');
        $lists4 = DB::select("Select * from menu where category='Vegetarian'");
        $lists5 = DB::select("Select * from menu where category='Mixed'");
        $lists6 = DB::select("Select * from menu where category='Vegan'");

        return view('welcome',['lists1'=>$lists1 , 'lists2'=>$lists2 , 'lists3'=>$lists3 , 'lists4'=>$lists4 , 'lists5'=>$lists5 , 'lists6'=>$lists6]);
    }
}
