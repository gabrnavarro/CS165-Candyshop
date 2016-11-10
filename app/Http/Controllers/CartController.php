<?php

namespace App\Http\Controllers;
use App\Order;
use App\User;
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
      $cart = $user->orders()->where('status','in-cart')->get();
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

      return view('cart.add_to_cart');

    }
}
