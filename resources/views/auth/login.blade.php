@extends('front.index')

@section('content')
      <section class="section section-lg bg-default text-center">
        <div class="container">
          <h3>Login</h3>
          <div class="row row-fix justify-content-sm-center">
            <div class="col-md-8 col-lg-6 col-xl-4">
              <!-- RD Mailform-->
              <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-wrap form-wrap-validation">
                  <input class="form-input{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" type="text" name="email" value="{{ old('email') }}" required autofocus placeholder="E-mail">
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-wrap form-wrap-validation">
                    <input id="password" type="password" class="form-input{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">

                    @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
                <br>
                <div class="form-button">
                  <button class="button button-block button-secondary button-nina" type="submit">Sign In</button>
                </div>
              </form>
              <br>
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            </div>
          </div>
        </div>
      </section>
@endsection
