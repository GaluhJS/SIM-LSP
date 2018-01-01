<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('images/avataradmin.png') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
    
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">HEADER</li>

        <li>
          <a href="{{url('apl01')}}">
            <i class="fa fa-bar-chart"></i>
            <span>APL-01</span>
          </a>
        </li>
        <li>
          <a href="{{url('apl01')}}">
            <i class="fa fa-bar-chart"></i>
            <span>APL-02</span>
          </a>
        </li>
        <li>
          <a href="{{url('apl01')}}">
            <i class="fa fa-bar-chart"></i>
            <span>Pengecekan</span>
          </a>
        </li>

    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>
