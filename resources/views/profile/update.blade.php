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
                          {{Form::text('username', Auth::user()->username,['class' => 'form-control'])}}
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
                            {{Form::text('fullname', Auth::user()->fullname,['class' => 'form-control'])}}

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
                            {{Form::text('address', Auth::user()->address,['class' => 'form-control'])}}

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
                              {{Form::text('relationship', Auth::user()->relationship,['class' => 'form-control'])}}

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
