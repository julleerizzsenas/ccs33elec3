
@include('layouts.header')

  <body>
    <div class="page login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">

            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                    <h1>discussionRoom</h1>
                  </div>
                </div>
              </div>
            </div>

            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <form role="form" method="POST" action="{{ route('register') }}">
                     {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                      <input id="name" type="text" name="name" class="form-control" placeholder="Username" value="{{ old('name') }}" required autofocus>
                    @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                      <input id="email" type="text" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                      <input id="password" type="password" name="password" class="form-control" placeholder="Password" value="{{ old('password') }}" required autofocus>
                    @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                    </div>

                    <div class="form-group">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
                    </div>
                    
                    <div>
                      <button type="submit" class="btn btn-primary submit">Register</button>
                    </div>
               
                  </form>
                  <small>Already have an account? </small><a href="/" class="login">Login</a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
      

@include('layouts.footer')