<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\DB;
use \App\Models\Cake;

class CakeController extends Controller
{

    //

    public function index(){

        $cake = Cake::all();
        $data['cakes'] = $cake;
        return view('index',$data);
    }


    public function showDetails($id){

        $cake = DB::table('cake')->find($id);
        // return $cake;
        return view('cake',['cake'=>$cake]);
    }

    public function addToCart($cake_id){

        //insert

        if(!session()->has('user')){
            return redirect('login');
        }
        
        $user_id = session()->get('user')->id;
        DB::table('carts')->insert([
            'user_id'=> $user_id,
            'cake_id' => $cake_id,
        ]);

        return redirect('mycart');
       
    }

    public function showCart(){

        $user_id = session()->get('user')->id;
        // dd($user_id);

        $cart_items = DB::table('carts')
                ->select('cake.*','carts.id as cart_id','carts.cake_id')
                    ->join('cake','cake.id','=','carts.cake_id')
                        ->where('user_id',$user_id)->get();

        // return $cart_items;

        return view('cart',['cart_items'=>$cart_items]);
    }

    public function deleteItem(Request $request){
        
        DB::table('carts')->where('id',$request->cart_id)->delete();
        return redirect('mycart');
    }

    public function buyNow($cake_id,$cart_id=''){

       $cake = DB::table('cake')->where('id',$cake_id)->first();
        return view('buy',['cake'=>$cake]);

    }


    public function FinalOrder(Request $request){

        $user_id = session()->get('user')->id;
        DB::table('orders')->insert([
            'cart_id'=>$request->cart_id,
            'cake_id'=>$request->cake_id,
            'user_id'=>$user_id,
            'price'=>$request->cost,
            'name'=>$request->name,
            'mobile'=>$request->mobile,
            'address'=>$request->address,
            'pincode'=>$request->pincode,
            'status'=>'Order Placed',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        if(!empty($request->cart_id)){

            DB::table('carts')->where('id',$request->cart_id)->delete();
           
        }

        return redirect('mycart');
       
    }
}
