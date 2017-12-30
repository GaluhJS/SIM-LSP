 <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>LSP</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SIM</b>LSP</span>
    </a>

    <nav class="navbar navbar-static-top" role="navigation">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="">
            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
              <span class=" fa fa-angle-down"></span>
            </a>
            
            <ul class="dropdown-menu dropdown-usermenu pull-right">
              <li><a href=""> Profil</a></li>
              
              <li><a href="" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-sign-out pull-right"></i> Keluar</a></li>
              
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form>

            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>