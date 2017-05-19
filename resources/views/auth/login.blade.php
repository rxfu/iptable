@extends('layouts.one_column')

@section('content')
    <fieldset class="well">
        <div class="col-md-12">
            <form action="{{ route('login') }}" role="form" method="post">
                {{ csrf_field() }}

                <legend>用户登录</legend>
                <div class="form-group label-floating{{ $errors->has('email') ? ' has-error' : '' }}">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons text-primary">person</i>
                        </span>
                        <label for="username" class="control-label">用户名</label>
                        <input type="text" class="form-control" id="username" name="username" required>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group label-floating{{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons text-primary">vpn_key</i>
                        </span>
                        <label for="password" class="control-label">密码</label>
                        <input type="password" class="form-control" id="password" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-8">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> 保持登录状态
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
@endsection
