@extends('layouts.app')

@section('content')
<div class="container">
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
       </tr>
       @endforeach
     </tbody>

  </table>
  @else
    There are no users
  @endif
  @stop
</div>
