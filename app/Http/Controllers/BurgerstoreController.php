<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Validator;
use DB;

class BurgerstoreController extends Controller
{
    public function index()
    {
        $products = DB::select('Select * from menu');
        return view('menu',['products'=>$products]); 
    }

    public function cart()  {
        $cartCollection = \Cart::getContent();
       //dd($cartCollection);
        return view('cart')->with(['cartCollection' => $cartCollection]);;
    }

    public function add(Request $request){
        \Cart::add(array(
            'id' => $request->item_no,
            'name' => $request->item_name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->image,
                'slug' => $request->item_no
            )
        ));
        return redirect()->route('cart.index')->with('success_msg', 'Item is Added to Cart!');
    }

    public function remove(Request $request){
        \Cart::remove($request->item_no);
        return redirect()->route('cart.index')->with('success_msg', 'Item is removed!');
    }

    public function update(Request $request){
        \Cart::update($request->item_no,
            array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $request->quantity
                ),
        ));
        return redirect()->route('cart.index')->with('success_msg', 'Cart is Updated!');
    }


    public function clear(){
        \Cart::clear();
        return redirect()->route('menu')->with('success_msg', 'Cart is cleared!');
    }
}
