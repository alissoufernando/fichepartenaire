

<div>
    <div class="page-wrapper">
        <!-- Page Body Start-->
        <div class="auth-bg">
          <div class="authentication-box">
            <div class="text-center"><img src="../assets/images/endless-logo.png" alt="" width="100" height="100"></div>
            <div class="card mt-4 p-4">
              <h4 class="text-center">Inscription</h4>
              <form class="theme-form" method="post" action="{{route('register')}}">
                @csrf
                <div class="form-row">
                    <div class="form-group">
                      <label class="col-form-label">Votre Nom</label>
                      <input type="text" required="" class="form-control" name="name" placeholder="Enter Your Name" value="{{old('name')}}" required autofocus autocomplete="name">
                    </div>
                    <div class="form-group">
                      <label class="col-form-label">Votre adresse Mail</label>
                      <input type="text" required="" class="form-control" name="email" placeholder="Enter Your Email" required value="{{old('email')}}">
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
                    <button class="btn btn-success" type="submit">S'inscrire</button>
                  </div>
                  <div class="col-sm-8">
                    <div class="text-left mt-2 m-l-20">j'ai déja un compte ?  <a class="btn-link text-capitalize"
                        href="{{route('login')}}">Se connecter</a></div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- Page Body End-->
      </div>
</div>
