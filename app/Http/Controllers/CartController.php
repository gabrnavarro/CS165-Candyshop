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
      $cart = $user->orders()->select('timestamp', 'orders.id as order_id',
      'orders.product_id','products.id as product_id', 'quantity','item','description')->where('orders.status','in-cart')->
      join('products','orders.product_id','=','products.id')->orderBy('item')->get();
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
      $product->decrement('available_items');
      return View::make('cart.add_to_cart')->with('product', $product);

    }

    public function remove_from_cart(Request $request){
      $user = User::find(Auth::id()); //NEED TO CREATE ALL FOREIGN KEYS TO EACH TABLE IF NECESSARY
      $order_id = $request->input('order_id');
      $product_id= $request->input('product_id');
      $product = Product::find($product_id);
      $product->increment('available_items');
      Order::destroy($order_id);
      return View::make('cart.remove_from_cart')->with('product', $product);
    }

    public function checkout(){
      $user = User::find(Auth::id());
      $orders = $user->orders();
      $orders->where('status','in-cart')->update(['status'=>'sold']);
      return View::make('cart.checkout');
    }

    public function edit($id){
      $user = User::find(Auth::id());
      $order = Order::find($id);
      return view('cart.edit')->with('order', $order);
    }
    public function store(Request $request, $id){
      $order = Order::find($id);
      $order->quantity = $request->quantity;
      $order->save();
      return redirect('/cart');
    }
}
