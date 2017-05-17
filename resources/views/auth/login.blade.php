@extends('layouts.one_column')

@section('content')
    <fieldset class="well">
        <div class="col-md-10 col-md-offset-1">
            <form action="{{ route('login') }}" class="form-horizontal" role="form" method="post">
                {{ csrf_field() }}

                <legend>用户登录</legend>
                <div class="form-group label-floating{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="username" class="control-label">用户名</label>
                    <input type="text" class="form-control" id="username" name="username" required>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group label-floating{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="control-label">密码</label>
                    <input type="password" class="form-control" id="password" name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> 记住我
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">登录</button>
                        <a class="btn btn-link" href="{{ route('password.request') }}">忘记密码?</a>
                    </div>
                </div>
            </form>
        </div>
    </fieldset>
    <!--
    <md-card>
        <md-card-header>
            <header class="md-title">登录</header>
        </md-card-header>

        <form novalidate @submit.stop.prevent="submit">
            <md-card-content>
                <md-input-container>
                    <md-icon>person</md-icon>
                    <label>用户名</label>
                    <md-input type="text" required></md-input>
                </md-input-container>

                <md-input-container md-has-password>
                    <md-icon>security</md-icon>
                    <label>密码</label>
                    <md-input type="password" required></md-input>
                </md-input-container>
            </md-card-content>

            <md-card-actions>
                <md-button type="submit" class="md-primary">登录</md-button>
            </md-card-actions>
        </form>
    </md-card>
    -->
<!--
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

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
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
-->
@endsection
