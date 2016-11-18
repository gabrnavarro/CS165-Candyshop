<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\User;
use App\Product;
use Carbon;
use View;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }
    public function index(){
      return view('profile.index');
    }
    public function order_history(){
      $user = User::find(Auth::id());
      $cart = $user->orders()->select('timestamp', 'orders.id as order_id',
      'orders.product_id','products.id as product_id', 'quantity','item','description')->where('orders.status','sold')->
      join('products','orders.product_id','=','products.id')->get();
      $cart->toarray();
      return View::make('profile.order_history')->with('cart', $cart);
    }
}
