@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Cart Quantity</div>
                <div class="panel-body">
                  <form class="form-horizontal" action="/cart/store/{{$order->id}}" method="post" >
                    {{csrf_field()}}
                    <div class="form-group">
                      <label for="item" class="col-md-4 control-label">Quantity</label>
                      <div class="col-md-6">
                        <input id="quantity" type="text" class="form-control" name="quantity" value="{{ old('quantity') }}" required autofocus>
                      </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <button type="submit" class="btn btn-raised btn-primary">
                                Update Quantity
                            </button>
                        </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection
