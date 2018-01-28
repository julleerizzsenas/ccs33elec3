@include('layouts.header')

@section('content')

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
                  {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> --}}
                </div>
              </div>
            </div>


            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">

                  <form class="form" role="form" method="POST" action="{{ route('login') }}">
                  {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                      <input id="email" type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>

                      @if ($errors->has('email'))
                      <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                      @endif
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                      <input id="password" type="password" name="password" class="form-control" placeholder="Password" required>
                      
                      @if ($errors->has('password'))
                      <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                      @endif
                    </div>

                    <button type="submit" class="btn btn-default submit">Log in</button>

                    <br><small>Do not have an account? </small><a href="register" class="signup">Signup</a>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>

