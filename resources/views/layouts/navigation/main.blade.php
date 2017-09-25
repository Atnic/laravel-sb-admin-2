<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="/">@yield('title', config('app.name', 'AdminLTE'))</a>
  </div>
  <!-- /.navbar-header -->

  <ul class="nav navbar-top-links navbar-right">
    @if (auth()->check())
    @include('sb-admin-2::layouts.navigation.navbar-top-links.messages-menu')
    @include('sb-admin-2::layouts.navigation.navbar-top-links.tasks-menu')
    @include('sb-admin-2::layouts.navigation.navbar-top-links.alerts-menu')
    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">
        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
      </a>
      <ul class="dropdown-menu dropdown-user">
        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a></li>
        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a></li>
        <li class="divider"></li>
        <li>
          <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
          </form>
          <a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
        </li>
      </ul>
      <!-- /.dropdown-user -->
    </li>
    <!-- /.dropdown -->
    @elseif(!isset($exception))
    <li>
      <a href="{{ route('login') }}">
        <i class="fa fa-sign-in fa-fw"></i>
      </a>
    </li>
    @endif
  </ul>
  <!-- /.navbar-top-links -->

  <div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
      @section('sidebar-menu')
      <ul class="nav" id="side-menu">
        {{-- <li class="sidebar-search">
          <div class="input-group custom-search-form">
            <input type="text" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">
                <i class="fa fa-search"></i>
              </button>
            </span>
          </div>
          <!-- /input-group -->
        </li> --}}
        <li>
          <a href="/"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
        </li>
        <li>
          <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
          <ul class="nav nav-second-level">
            <li>
              <a href="#">Flot Charts</a>
            </li>
            <li>
              <a href="#">Morris.js Charts</a>
            </li>
          </ul>
          <!-- /.nav-second-level -->
        </li>
        <li>
          <a href="#"><i class="fa fa-table fa-fw"></i> Tables</a>
        </li>
        <li>
          <a href="#"><i class="fa fa-edit fa-fw"></i> Forms</a>
        </li>
        <li>
          <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
          <ul class="nav nav-second-level">
            <li>
              <a href="panels-#">Panels and Wells</a>
            </li>
            <li>
              <a href="#">Buttons</a>
            </li>
            <li>
              <a href="#">Notifications</a>
            </li>
            <li>
              <a href="#">Typography</a>
            </li>
            <li>
              <a href="#"> Icons</a>
            </li>
            <li>
              <a href="#">Grid</a>
            </li>
          </ul>
          <!-- /.nav-second-level -->
        </li>
        <li>
          <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
          <ul class="nav nav-second-level">
            <li>
              <a href="#">Second Level Item</a>
            </li>
            <li>
              <a href="#">Second Level Item</a>
            </li>
            <li>
              <a href="#">Third Level <span class="fa arrow"></span></a>
              <ul class="nav nav-third-level">
                <li>
                  <a href="#">Third Level Item</a>
                </li>
                <li>
                  <a href="#">Third Level Item</a>
                </li>
                <li>
                  <a href="#">Third Level Item</a>
                </li>
                <li>
                  <a href="#">Third Level Item</a>
                </li>
              </ul>
              <!-- /.nav-third-level -->
            </li>
          </ul>
          <!-- /.nav-second-level -->
        </li>
        <li>
          <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
          <ul class="nav nav-second-level">
            <li>
              <a href="#">Blank Page</a>
            </li>
            <li>
              <a href="#">Login Page</a>
            </li>
          </ul>
          <!-- /.nav-second-level -->
        </li>
      </ul>
      @show
    </div>
    <!-- /.sidebar-collapse -->
  </div>
  <!-- /.navbar-static-side -->
</nav>
