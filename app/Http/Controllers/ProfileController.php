<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\User;
use App\Product;
use Carbon;
use View;
use DB;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }
    public function index(){
      $users = DB::table('users')->get();
      $users->toarray();
      return View::make('profile.index')->with('users', $users);
    }

    public function order_history(){
      $user = User::find(Auth::id());
      $cart = $user->orders()->select('timestamp', 'orders.id as order_id',
      'orders.product_id','products.id as product_id', 'quantity','item','description')->where('orders.status','sold')->
      join('products','orders.product_id','=','products.id')->get();
      $cart->toarray();
      return View::make('profile.order_history')->with('cart', $cart);
    }

    public function update(){
      return view('profile.update');
    }

    public function store(Request $request){
      $user = User::find(Auth::id());
      $username = $request->input('username');
      $fullname = $request->input('fullname');
      $address = $request->input('address');
      $relationship = $request->input('relationship');
      $user->username = $username;
      $user->fullname = $fullname;
      $user->address = $address;
      $user->relationship = $relationship;
      $user->save();

      return View::make('profile.store');


    }
}
