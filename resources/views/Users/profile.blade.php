@extends('dashboard')

@section('content')
    {{--<div class="container">--}}
        <div class="row" style="background-color: #1f79a3">
            <div class="col-md-10 col-md-offset-1">
                {{--<div class="panel panel-default">--}}
                    {{--<div class="panel-heading">Register</div>--}}

                    {{--<div class="panel-body">--}}
                        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="tittle" class="col-md-4 control-label">Tittle</label>

                                <div class="col-md-6">
                                    <input id="tittle" type="text" class="form-control" name="tittle" required autofocus>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="surname" class="col-md-4 control-label">Surname</label>

                                <div class="col-md-6">
                                    <input id="surname" type="text" class="form-control" name="surname" required autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="idNumber" class="col-md-4 control-label">ID Number</label>

                                <div class="col-md-6">
                                    <input id="idNumber" type="text" class="form-control" name="idNumber" required autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="cellphone" class="col-md-4 control-label">Cellphone Number</label>

                                <div class="col-md-6">
                                    <input id="cellphone" type="text" class="form-control" name="cellphone" required autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="address" class="col-md-4 control-label">Address</label>

                                <div class="col-md-6">
                                    <input id="address" type="text" class="form-control" name="address" required autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="role" class="col-md-4 control-label">Role</label>

                                <div class="col-md-6">
                                    <input id="role" type="text" class="form-control" name="role" required autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="gender" class="col-md-4 control-label">Gender</label>

                                <div class="col-md-6">
                                    <input id="gender" type="text" class="form-control" name="gender" required autofocus>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                {{--</div>--}}
            </div>
        </div>
    {{--</div>--}}
@endsection