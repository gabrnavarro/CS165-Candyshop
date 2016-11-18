<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Product;
use View;
use DB;
use App\User;

class ProductController extends Controller
{

    public function index()
    {
        $products = DB::table('products')->where('available_items','>',0)->orderBy('item')->get();
        $products->toarray();
        return View::make('products.index')->with('products', $products);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          $user = User::find(Auth::id());
          if(!($user->is_admin)){
            return redirect('/products');
          }
          return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $user = User::find(Auth::id());
      if(!($user->is_admin)){
        return redirect('/products');
      }
      $product = new Product;
      $product->item = $request->input('item');
      $product->description = $request->input('description');
      $product->available_items = $request->input('available_items');
      $product->status = "available";
      $product->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
