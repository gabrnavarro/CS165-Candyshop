@extends('layouts.app')

@section('content')

<div class="container">
  <div class="jumbotron">
    <h1> User Profile</h1>
    <ul>
      <li> Username: {{Auth::user()->username}}</li>
      <li> Email: {{Auth::user()->email}}</li>
    </ul>
    <a href="/profile/order_history" class="btn btn-raised btn-primary">Order History</a>

  </div>

</div>
@endsection
