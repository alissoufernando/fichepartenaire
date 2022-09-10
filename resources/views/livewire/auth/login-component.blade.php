
<div>
    <div class="page-wrapper">
        <!-- Page Body Start-->
        <div class="auth-bg">
          <div class="authentication-box">
            <div class="text-center"><img src="{{ asset('assets/images/endless-logo.png') }}" alt=""></div>
            <div class="card mt-4">
              <div class="card-body">
                <div class="text-center">
                  <h4>LOGIN</h4>
                  <h6>Enter your Username and Password </h6>
                </div>
                <form class="theme-form" method="post" action="{{route('login')}}">
                    @csrf
                  <div class="form-group">
                    <label class="col-form-label pt-0">Your Name</label>
                    <input type="text" required="" class="form-control" name="email" placeholder="Your Email" :value="old('email')" required autofocus >
                  </div>
                  <div class="form-group">
                    <label class="col-form-label">Password</label>
                    <input class="form-control" type="password" name="password" placeholder="Password" required autocomplete="current-password">
                  </div>
                  <div class="checkbox p-0">
                    <input id="checkbox1" type="checkbox" name="remember" id="remember_me" value="">
                    <label for="checkbox1" for="remember_me">Remember me</label>
                  </div>
                  @if (Route::has('password.request'))
                  <a href="{{ route('password.request') }}">Forgot password?</a>
                  @endif
                  <div class="form-group form-row mt-3 mb-0">
                    <button class="btn btn-primary btn-block" type="submit">Login</button>
                  </div>
                </form>
                <div class="form-note text-center">Don't Have an Account? <a href="{{route('register')}}">Sign up now</a></div>
              </div>
            </div>
          </div>
        </div>
        <!-- Page Body End-->
      </div>
</div>
