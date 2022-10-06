

<div>
    <div class="page-wrapper">
        <!-- Page Body Start-->
        <div class="auth-bg">
          <div class="authentication-box">
            <div class="text-center"><img src="../assets/images/endless-logo.png" alt=""></div>
            <div class="card mt-4 p-4">
              <h4 class="text-center">NEW USER</h4>
              <h6 class="text-center">Enter your Username and Password For Signup</h6>
              <form class="theme-form" method="post" action="{{route('register')}}">
                @csrf
                <div class="form-row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-form-label">Name</label>
                      <input type="text" required="" class="form-control" name="name" placeholder="Enter Your Name" value="{{old('name')}}" required autofocus autocomplete="name">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-form-label">Mail</label>
                      <input type="text" required="" class="form-control" name="email" placeholder="Enter Your Email" required value="{{old('email')}}">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-form-label">Password</label>
                  <input class="form-control" required="" type="password" name="password" placeholder="Password" required autocomplete="new-password">
                </div>
                <div class="form-group">
                  <label class="col-form-label">Confirm Password</label>
                  <input class="form-control" required="" type="password" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">

                </div>
                <div class="form-row">
                  <div class="col-sm-4">
                    <button class="btn btn-primary" type="submit">Sign Up</button>
                  </div>
                  <div class="col-sm-8">
                    <div class="text-left mt-2 m-l-20">Are you already user?  <a class="btn-link text-capitalize"
                        href="{{route('login')}}">Login</a></div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- Page Body End-->
      </div>
</div>
