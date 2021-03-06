@extends('layouts.app')

@section('content')
<div class="container">
  <h1> Order History </h1>
  @if($cart->count())
  <div class = "card">
  <table class = "table">
    <thead>
      <tr>
        <th> Time added </th>
        <th> Quantity </th>
        <th> Candy Name </th>
        <th> Description </th>
      </tr>
    </thead>
    <tbody>
      @foreach ($cart as $cart_item)
       <tr>
         <td> {{$cart_item->timestamp}}</td>
         <td> {{$cart_item->quantity}}</td>
         <td> {{$cart_item->item}}</td>
         <td> {{$cart_item->description}} </td>
       </tr>
       @endforeach
     </tbody>
   </table>
 </div>
   @else
     Order history is empty. Checkout some items and it will appear here.
   @endif
   @stop

 </div>
