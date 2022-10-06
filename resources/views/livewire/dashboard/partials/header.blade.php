<div class="page-main-header">
        <div class="main-header-right row">
          <div class="main-header-left col-auto px-0 d-lg-none">
            <div class="logo-wrapper"><a href=""><img src="../assets/images/endless-logo.png" alt="" width="90" height="90"></a></div>
          </div>
          <div class="vertical-mobile-sidebar col-auto ps-3 d-none"><i class="fa fa-bars sidebar-bar"></i></div>
          <div class="mobile-sidebar col-auto ps-0 d-block">
            <div class="media-body switch-sm">
              <label class="switch"><a href="#"><i id="sidebar-toggle" data-feather="align-left"></i></a></label>
            </div>
          </div>
          <div class="nav-right col p-0">
            <ul class="nav-menus">
              <li>
                <form class="form-inline search-form" action="#" method="get">
                  <div class="form-group me-0">
                    <div class="Typeahead Typeahead--twitterUsers">
                      <div class="u-posRelative">
                        <input class="Typeahead-input form-control-plaintext" id="demo-input" type="text" name="q" placeholder="Search...">
                        <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div><span class="d-sm-none mobile-search"><i data-feather="search"></i></span>
                      </div>
                      <div class="Typeahead-menu"></div>
                    </div>
                  </div>
                </form>
              </li>
              <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
              <li class="onhover-dropdown">
                    <a class="txt-dark" href="#">
                        <h6 style="text-transform: uppercase;">{{ (App::getLocale() == 'en') ? 'EN' : App::getLocale() }}</h6>
                    </a>
                    <ul class="language-dropdown onhover-show-div p-20">
                      <li><a href="{{ route('lang', 'en' )}}" data-lng="en" class="{{ (App::getLocale()  == 'en') ? 'active' : ''}}"><i class="flag-icon flag-icon-is"></i> English</a></li>
                      <li><a href="{{ route('lang', 'fr' )}}" data-lng="fr" class="{{ (App::getLocale()  == 'fr') ? 'active' : ''}}"><i class="flag-icon flag-icon-nz"></i> Française</a></li>
                    </ul>
              </li>
              <li class="onhover-dropdown">
                <div class="media align-items-center"><img class="align-self-center pull-right img-50 rounded-circle" src="../assets/images/dashboard/user.png" alt="header-user">
                  <div class="dotted-animation"><span class="animate-circle"></span><span class="main-circle"></span></div>
                </div>
                <ul class="profile-dropdown onhover-show-div p-20">
                  <li><a href="#"><i data-feather="user"></i>Création d'un partenarit</a></li>
                  <li><a href="#"><i data-feather="user"></i>Mes partenariats</a></li>
                  <li>
                  <form action="{{route('logout')}}" method="post">
                    @csrf
                    <button type="submit" class="btn-success">Déconnexion</button>
                </form>
                </li>
                </ul>
              </li>
            </ul>
            <div class="d-lg-none mobile-toggle pull-right"><i data-feather="more-horizontal"></i></div>
          </div>
          <script id="result-template" type="text/x-handlebars-template">
            <div class="ProfileCard u-cf">
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details">
            <div class="ProfileCard-realName">@{{name}}</div>
            </div>
            </div>
          </script>
          <script id="empty-template" type="text/x-handlebars-template">
            <div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div>

          </script>
        </div>
      </div>
