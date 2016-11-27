@extends('layouts.app')

@section('content')
<div class="container">
  <h1> Products </h1>
  @if($products->count())
  <table class = "table">
    <thead>
      <tr>
        <th> Candy name </th>
        <th> Description </th>
        <th> Status </th>
        <th> Available Items </th>
      </tr>
    </thead>
    <tbody>
      @foreach ($products as $product)
       <tr>
         <td> {{$product->item}}</td>
         <td> {{$product->description}}</td>
         <td> {{$product->status}}</td>
         <td> {{$product->available_items}}</td>
         <td> <form action="/products/add_to_cart" method="post">
           {{ csrf_field() }}
           <input type="hidden" value="{{$product->id}}" name="id"\>
           <input type="submit" value="Add to cart" class="btn btn-raised btn-warning"/>
         </form></td>
       </tr>
       @endforeach
     </tbody>

  </table>
  @else
    There are no users
  @endif
  @stop
</div>
