<!-- Page Sidebar Start-->
<div class="page-sidebar">
  <div class="main-header-left d-none d-lg-block">
    <div class="logo-wrapper"><a href=""><img src="{{asset('assets/images/endless-logo.png')}}" alt=""></a></div>
  </div>
  <div class="sidebar custom-scrollbar">

    <ul class="sidebar-menu">
        {{-- <li>
            <a href="{{route('welcome')}}" class="sidebar-header {{ Route::currentRouteName()== 'welcome' ? 'active' : '' }}"><i data-feather="home"></i><span>Home</span></i>
            </a>
        </li> --}}
        <li>
            <a href="{{route('creation.de.artenariat')}}" class="sidebar-header {{ Route::currentRouteName()== 'creation.de.artenariat' ? 'active' : '' }}"><i data-feather="home"></i><span>créer un partenariat</span></i>
            </a>
        </li>
        <li>
            <a href="{{route('allpartenariat')}}" class="sidebar-header {{ Route::currentRouteName()== 'allpartenariat' ? 'active' : '' }}"><i data-feather="home"></i><span>Tous les partenariats</span></i>
            </a>
        </li>
        <li>
            <a href="{{route('mes.partenariat')}}" class="sidebar-header {{ Route::currentRouteName()== 'mes.partenariat' ? 'active' : '' }}"><i data-feather="home"></i><span>Mes partenariats</span></i>
            </a>
        </li>
        <li>
            <a href="{{route('entite')}}" class="sidebar-header {{ Route::currentRouteName()== 'entite' ? 'active' : '' }}"><i data-feather="home"></i><span>Entités</span></i>
            </a>
        </li>
        <li>
            <a href="{{route('object')}}" class="sidebar-header {{ Route::currentRouteName()== 'object' ? 'active' : '' }}"><i data-feather="home"></i><span>Objects partenariat</span></i>
            </a>
        </li>
        <li>
            <a href="{{route('struture')}}" class="sidebar-header {{ Route::currentRouteName()== 'struture' ? 'active' : '' }}"><i data-feather="home"></i><span>Strutures</span></i>
            </a>
        </li>
        <li>
            <a href="{{route('type')}}" class="sidebar-header {{ Route::currentRouteName()== 'type' ? 'active' : '' }}"><i data-feather="home"></i><span>Types de partenariat</span></i>
            </a>
        </li>


        <li class="{{request()->route()->getPrefix() == '/administration' ? 'active' : '' }}">
          <a class="sidebar-header" ><i data-feather="user"></i><span>Administration</span><i class="fa fa-angle-right pull-right"></i>
          </a>
          <ul class="sidebar-submenu">
            <li><a href="{{route('admin.user-index')}}" class="{{ Route::currentRouteName()== 'admin.user-index' ? 'active' : '' }}"><i class="fa fa-circle"></i>User</a></li>
          </ul>
        </li>





    </ul>
  </div>
</div>
<!-- Page Sidebar Ends-->
<!-- Right sidebar Start-->
<div class="right-sidebar" id="right_side_bar">
  <div>
    <div class="container p-0">
      <div class="modal-header p-l-20 p-r-20">
        <div class="col-sm-8 p-0">
          <h6 class="modal-title fw-bold">FRIEND LIST</h6>
        </div>
        <div class="col-sm-4 text-end p-0"><i class="me-2" data-feather="settings"></i></div>
      </div>
    </div>
    <div class="friend-list-search mt-0">
      <input type="text" placeholder="search friend"><i class="fa fa-search"></i>
    </div>
    <div class="chat-box">
        <div class="people-list friend-list">
          <ul class="list">
            <li class="clearfix"><img class="rounded-circle user-image" src="{{asset('assets/images/user/1.jpg')}}" alt="">
              <div class="status-circle online"></div>
              <div class="about">
                <div class="name">Vincent Porter</div>
                <div class="status"> Online</div>
              </div>
            </li>
            <li class="clearfix"><img class="rounded-circle user-image" src="{{asset('assets/images/user/2.png')}}" alt="">
              <div class="status-circle away"></div>
              <div class="about">
                <div class="name">Ain Chavez</div>
                <div class="status"> 28 minutes ago</div>
              </div>
            </li>
            <li class="clearfix"><img class="rounded-circle user-image" src="{{asset('assets/images/user/8.jpg')}}" alt="">
              <div class="status-circle online"></div>
              <div class="about">
                <div class="name">Kori Thomas</div>
                <div class="status"> Online</div>
              </div>
            </li>
            <li class="clearfix"><img class="rounded-circle user-image" src="{{asset('assets/images/user/4.jpg')}}" alt="">
              <div class="status-circle online"></div>
              <div class="about">
                <div class="name">Erica Hughes</div>
                <div class="status"> Online</div>
              </div>
            </li>
            <li class="clearfix"><img class="rounded-circle user-image" src="{{asset('assets/images/user/5.jpg')}}" alt="">
              <div class="status-circle offline"></div>
              <div class="about">
                <div class="name">Ginger Johnston</div>
                <div class="status"> 2 minutes ago</div>
              </div>
            </li>
            <li class="clearfix"><img class="rounded-circle user-image" src="{{asset('assets/images/user/6.jpg')}}" alt="">
              <div class="status-circle away"></div>
              <div class="about">
                <div class="name">Prasanth Anand</div>
                <div class="status"> 2 hour ago</div>
              </div>
            </li>
            <li class="clearfix"><img class="rounded-circle user-image" src="{{asset('assets/images/user/7.jpg')}}" alt="">
              <div class="status-circle online"></div>
              <div class="about">
                <div class="name">Hileri Jecno</div>
                <div class="status"> Online</div>
              </div>
            </li>
          </ul>
        </div>
      </div>
  </div>
</div>
<!-- Right sidebar Ends-->
