<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\menu;
use DB;

class adminController extends Controller
{

    public function savemenu(Request $request) { 
        $this->validate($request, [
            'id' => 'required',
            //'name' => 'required',
            //'price' => 'required',
            //'calories' => 'required',
            //'category' => 'required',
            //'ingredients' => 'required',
            //'image' => 'required|image'
  
        ],[
            //'name.regex' => ' The Name field contains only letters.',
            //'name.max' => ' The Name may not be greater than 30 characters.',
            //'email.regex' => ' The email should be in proper format and accepts only gmail address.',
            //'subject.max' => ' The Subject may not be greater than 50 characters.',
            //'message.max' => ' The Message may not be greater than 200 characters.'
            
        ]);
  
        $menu = new menu;
  
        $menu->item_no = $request->id;
        $menu->item_name = $request->name;
        $menu->calories = $request->calories;
        $menu->price = $request->price;
        $menu->category = $request->category;
        $menu->ingredients = json_encode($request->ingredients_list);
        //$menu->ingredients = $request->ingredients_list;
  
        /*if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . ' . ' . $extension;
            $file->move('uploads/menu/',$filename);
            
            $menu->image = $filename;
        }
        else{
            return $request;
            $menu->image = ''; 
        }*/
  
      
  
    
  
      $imageExt = $request->file('image');
      $image_base64 = base64_encode(file_get_contents($request->file('image')));
      $image = 'data:image/'.$imageExt->getClientOriginalExtension().';base64,'.$image_base64;
  
      
       
  
        //$image = $request->file('image');
  
        //$new_name = rand() . '.' . $image->getClientOriginalExtension();
        //$image->move(public_path('images'), $new_name);
  
        $menu->image = $image;
  
        $menu->save();
  
        $request->session()->flash('alert-success', 'Details added successfully');
        return back()->with('success', 'Thank you');
  
     }


   public function index() { 
    $menu = DB::select('Select * from menu');
    return view('admin',['menu'=>$menu]); 
} 

   
   public function show($item_no) {
    $menu = DB::select('select * from menu where item_no = ?',[$item_no]);
    return view('editMenu',['menu'=>$menu]);

   }

   public function edit(Request $request,$item_no) {
    $item_name = $request->input('item_name');
    $calories = $request->input('calories');
    $price = $request->input('price');


    DB::update('update menu set item_name = ?,calories=?, price=? where item_no = ?',[$item_name,$calories,$price,$item_no]);
    return redirect()->route('admin')->with('success_msg', 'Record updated successfully!');

    /* echo "Record updated successfully.<br/>";
    echo '<a href = "/admin">Click Here</a> to go back.'; */
 }

 public function destroy($item_no) {
    DB::delete('delete from menu where item_no = ?',[$item_no]);
    echo "Record deleted successfully.<br/>";
    echo '<a href = "/admin">Click Here</a> to go back.';
 }
}