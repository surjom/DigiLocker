<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Cart;
use App\Order;
use Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    function index()
    {
        $data= Product::all();
        return view('product',['products'=>$data]);
    }
    function detail($id)
    {
    $data = Product::find($id);
    return view('detail',['product'=>$data]);
    }
    function search(Request $req)
    {
        $data= Product::where('name', 'like', '%'. $req->input('query').'%')->get();
        return view('search',['products'=>$data]);
    }
    function addToCart(Request $req)
    {
        if($req->session()->has('user'))
            {
            $cart= new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/');
            }   
        else
        {
            return redirect('/login');
        }
    }
    static function cartItem()
    {
        $user_id = Session::get('user')['id'];
        return Cart::where('user_id',$user_id)->count();

    }
    function cartList()
    {
        $user_id = Session::get('user')['id'];
       $data = DB::table('cart')
      ->join('products','cart.product_id','=','products.id')
      ->select('products.*','cart.id as cart_id')
      ->where('cart.user_id',$user_id)
      ->get();
      return view('cartlist',['products'=>$data]);
    }
    function removeCart($id)
    {
       echo Cart::destroy($id);
       return redirect('cartlist');
    }
    function orderNow()
    {
       $user_id = Session::get('user')['id'];
       $total = DB::table('cart')
      ->join('products','cart.product_id','=','products.id')
      ->where('cart.user_id',$user_id)
      ->sum('products.price');
      return view('ordernow',['total'=>$total]);
    }
    function orderPlace(Request $req)
    {
         $user_id = Session::get('user')['id'];
         $allCart=Cart::where('user_id',$user_id)->get();
         foreach($allCart as $cart)
         {
              $order= new Order;
              $order->product_id=$cart['product_id'];
              $order->user_id=$cart['user_id'];
              $order->address=$req->address;
              $order->status="Will contact soon";
              $order->payment_method=$req->payment;
              $order->payment_status="pending";
              $order->save();
         }
         Cart::where('user_id',$user_id)->delete();
         return redirect('/');
      //  return $req->input();
    }
    function myOrder()
    {
       $user_id = Session::get('user')['id'];
       $orders = DB::table('orders')
      ->join('products','orders.product_id','=','products.id')
      ->where('orders.user_id',$user_id)
      ->get();
      return view('myorder',['orders'=>$orders]);
    }
}
