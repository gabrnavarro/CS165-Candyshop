@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Update profile information</div>
                <div class="panel-body">
                  <form class="form-horizontal" action="/profile/store" method="post" >
                    {{csrf_field()}}
                    <div class="form-group{{$errors->has('username') ? ' has error' : ''}}">
                      <label for="item" class="col-md-4 control-label">Username</label>
                        <div class="col-md-6">
                          <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>
                          @if ($errors->has('username'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('username') }}</strong>
                              </span>
                          @endif
                        </div>
                      </div>

                      <div class="form-group">
                          <label for="fullname" class="col-md-4 control-label">Full Name</label>

                          <div class="col-md-6">
                              <input id="email" type="text" class="form-control" name="fullname" required>

                              @if ($errors->has('fullname'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('fullname') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group">
                          <label for="address" class="col-md-4 control-label">Address</label>

                          <div class="col-md-6">
                              <input id="address" type="text" class="form-control" name="address" required>

                              @if ($errors->has('address'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('address') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group">
                          <label for="relationship" class="col-md-4 control-label">Relationship Status</label>

                          <div class="col-md-6">
                              <input id="relationship" type="text" class="form-control" name="relationship" required>

                              @if ($errors->has('relationship'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('relationship') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-md-8 col-md-offset-4">
                              <button type="submit" class="btn btn-raised btn-primary">
                                  Update user profile
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
