@extends('layouts.app')

@section('content')

<div class="container">
  <div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">Success!</h3>
  </div>
  <div class="panel-body">
    <p>Congratulations! Your order has been put to the cart!</p>

    <a href="/products" class="btn btn-raised btn-primary">Back to products</a>
    <a href="/cart" class="btn btn-raised btn-primary">Back to cart</a>
  </div>
</div>
</div>
@endsection
