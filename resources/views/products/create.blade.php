@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create a product</div>
                <div class="panel-body">
                  <form class="form-horizontal" action="/products/store" method="post" >
                    {{csrf_field()}}
                    <div class="form-group{{$errors->has('item') ? ' has error' : ''}}">
                      <label for="item" class="col-md-4 control-label">Item name</label>
                        <div class="col-md-6">
                          <input id="item" type="text" class="form-control" name="item" value="{{ old('item') }}" required autofocus>
                          @if ($errors->has('item'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('item') }}</strong>
                              </span>
                          @endif
                        </div>
                      </div>

                      <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                          <label for="password" class="col-md-4 control-label">Description</label>

                          <div class="col-md-6">
                              <input id="description" type="text" class="form-control" name="description" required>

                              @if ($errors->has('description'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('description') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group">
                          <label for="available_items" class="col-md-4 control-label">Available Items</label>

                          <div class="col-md-6">
                              <input id="available_items" type="text" class="form-control" name="available_items" required>

                              @if ($errors->has('available_items'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('available_items') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-md-8 col-md-offset-4">
                              <button type="submit" class="btn btn-raised btn-primary">
                                  Create product
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
