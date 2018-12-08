<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-20">
            <div class="card">
                <div class="card-header">Login</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('email') }}</label>
                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('password') }}</label>
                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Login</button>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <br>
                                <a href="{{ route('password.request') }}">
                                    {{ __('비밀번호찾기') }}
                                </a>
                                <br>
                                <!--social Login-->
                                <li class="list-inline-item">
                                  <a href="{{ url('/redirect') }}">
                                    <span>Login Google</span>
                                  </a>
                                </li>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
