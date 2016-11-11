@extends('layouts.app')

@section('content')
<div class="container">
  @if($cart->count())
  <table class = "table">
    <thead>
      <tr>
        <th> Timestamp </th>
        <th> Status </th>
        <th> Quantity </th>
        <th> Candy Name </th>
        <th> Description </th>
      </tr>
    </thead>
    <tbody>
      @foreach ($cart as $cart_item)
       <tr>
         <td> {{$cart_item->timestamp}}</td>
         <td> {{$cart_item->status}}</td>
         <td> {{$cart_item->quantity}}</td>
         <td> {{$cart_item->item}}</td>
         <td> {{$cart_item->description}} </td>
       </tr>
       @endforeach
     </tbody>
   </table>
   @else
     There are no orders.
   @endif
   @stop
   </div>
