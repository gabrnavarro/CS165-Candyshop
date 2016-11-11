<?php

namespace App\Http\Controllers;
use App\Order;
use App\User;
use App\Product;
use Carbon;
use View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function __contruct(){
      $this->middleware('auth');
    }

    public function index(){
      $user = User::find(Auth::id());
      $cart = $user->orders()->where('orders.status','in-cart')->
      join('products','orders.product_id','=','products.id')->get();
      $cart->toarray();
      return View::make('cart.index')->with('cart', $cart);

    }
    /**Create an order, set status to in-cart, and tie to user order**/
    public function add_to_cart(Request $request){
      $user = User::find(Auth::id()); //NEED TO CREATE ALL FOREIGN KEYS TO EACH TABLE IF NECESSARY
      $id = $request->input('id');
      $order = new Order;
      $order->product_id = $id;
      $order->quantity = 1;
      $order->status = 'in-cart'; //in-cart, available
      $order->timestamp = Carbon\Carbon::now();
      $user->orders()->save($order);
      $product = Product::find($id);
      return View::make('cart.add_to_cart')->with('product', $product);

    }
}
