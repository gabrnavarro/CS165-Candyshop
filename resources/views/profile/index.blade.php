@extends('layouts.app')

@section('content')

<div class="container">
  <div class="jumbotron ">
    <h1 class= "font-weight-normal"> User Profile</h1>
    <ul>
      <li> Username: {{Auth::user()->username}}</li>
      <li> Email: {{Auth::user()->email}}</li>
      <li> Full Name: {{Auth::user()->fullname}} </li>
      <li> Address: {{Auth::user()->address}} </li>
      <li> Relationship Status: {{Auth::user()->relationship}} </li>

    </ul>
    <a href="/profile/order_history" class="btn btn-raised btn-primary">Order History</a>
    <a href="/profile/update" class="btn btn-raised btn-primary">Update Profile</a>

  </div>

  

</div>
@endsection
