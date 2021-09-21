<header class="main-header">

  <a href="{{ url('admin') }}" class="logo">
    <span class="logo-mini"><b>{{ site_name() }}</b></span>
    {{--<span class="logo-lg"><b>{{ site_name() }}</b></span>--}}
    <span class="logo-lg"><b><img src="{{asset('images/danglogo.png')}}">
  </a>

  <nav class="navbar navbar-static-top" role="navigation">
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>



    <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
      <ul class="nav navbar-nav">
        {{--<li class="{{ Ekko::isActiveRoute('home') }}"><a href="{{ route('home') }}">Home</a></li>--}}
        @if (Auth::user())
         <!-- <li class="{{ Ekko::areActiveRoutes(['tickets.index', 'tickets.show']) }}"><a href="{{ route('tickets.index') }}">My tickets</a></li>
          <li class="{{ Ekko::isActiveRoute('tickets.create') }}"><a href="{{ route('tickets.create') }}">Open new ticket</a></li> -->
        @endif
        {{--<li class="{{ request()->path() == "contact" ? 'active' : 'n' }}"><a href="{{ route('contact') }}">Contact</a></li>--}}
        {{--@permission('view-backend')--}}
        {{--<li><a href="{{ route('admin.dashboard') }}"> Admin</a></li>--}}
        {{--@endpermission--}}
      </ul>

    </div>



    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        

        <li class="dropdown user user-menu">

          <a href="#" class="dropdown-toggle" data-toggle="dropdown">

            {{--<img src="{{ Auth::user()->getAvatarUrl() }}" class="user-image" alt="User Image">--}}

            <span class="hidden-xs">{{ Auth::user()->fullname }}</span>
          </a>
          <ul class="dropdown-menu">

            <li class="user-header">
              {{--<img src="{{ Auth::user()->getAvatarUrl() }}" class="img-circle" alt="User Image">--}}

              <p>
                {{ Auth::user()->fullname }}
                <small>Member since {{ Auth::user()->created_at->format('l jS \\of F Y') }}</small>
              </p>
            </li>

            <li class="user-footer">
              <div class="pull-left">
                <a href="{{ route('account.dashboard') }}" class="btn btn-default btn-flat">Profile</a>
              </div>
              <div class="pull-right">
                <a href="{{ route('logout') }}" class="btn btn-default btn-flat">Sign out</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>