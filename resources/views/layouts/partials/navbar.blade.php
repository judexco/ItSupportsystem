
<aside class="main-sidebar">

    <section class="sidebar">

        <div class="user-panel">
            <div class="pull-left image">
             <p>{{ Auth::user()->fullname }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
            <div class="pull-left info">
               
            </div>
        </div>


        <ul class="sidebar-menu">
            <li class="header">MENU</li>

            @permission('view-backend')
            <li class="{{ Ekko::isActiveRoute('admin.dashboard') }}"><a href="{{ url('admin') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            @endpermission

            
             @permission('Users-ticket')
            <li class="{{ Ekko::isActiveRoute('tickets.index', 'tickets.show.*') }}">
                <a href="{{ url('admin/Users-ticket') }}" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-users"></i> All Requests <span class="caret"></span></a>
                <ul class="treeview-menu" role="menu">
                    <li class="dropdown-header">User Tickets</li>
                    <li><a href="{{ route('tickets.create') }}">Create New Request</a></li>
                    <li><a href="{{ route('tickets.index') }}">View All My Requests</a></li>
                    
                </ul>
            </li>
            @endpermission


            @permission('manage-users')
            <!-- <li class="{{ Ekko::isActiveRoute('users.*') }}"><a href="{{ url('admin/users') }}"><i class="fa fa-users"></i> <span>Users</span></a></li> -->

            <li class="treeview">
                <a href="#"><i class='fa fa-server'></i> <span>MASTER DATA</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li ><a href="{{ url('admin/users') }}"><i class="fa fa-users"></i> <span>USERS</span></a></li>
                    <li class="divider"></li>
                    <li><a href="{{ url('admin/categorys')}}"><i class='fa fa-th-list'></i> <span>CATEGORY</span></a></li>
                    <li><a href="{{ url('/locations')}}"><i class='fa fa-map-marker'></i> <span>LOCATIONS</span></a></li>
                    <li><a href="{{ url('/divisions')}}"><i class='fa fa-group'></i> <span>DEPARTMENTS</span></a></li>
                </ul>
            </li>
            @endpermission

           
            @permission('manage-tickets')
            <li class="{{ Ekko::isActiveRoute('managetickets.*') }}"><a href="{{ url('admin/tickets') }}"><i class="fa fa-ticket"></i> <span>Resolve All Request</span></a></li>
            @endpermission

            <!-- @permission('manage-roles')
            <li class="{{ Ekko::isActiveRoute('roles.*') }}"><a href="{{ url('admin/roles') }}"><i class="fa fa-archive"></i> <span>Roles</span></a></li>
            @endpermission

            @permission('manage-permissions')
            <li class="{{ Ekko::isActiveRoute('permissions.*') }}"><a href="{{ url('admin/permissions') }}"><i class="fa fa-key"></i> <span>Permissions</span></a></li>
            @endpermission -->

            @permission('manage-settings')
            <!-- <li class="{{ Ekko::isActiveRoute('settings.*') }}"><a href="{{ url('admin/settings') }}"><i class="fa fa-cog"></i> <span>Settings</span></a></li> -->

            <li class="treeview">
                <a href="#"><i class='fa fa-server'></i> <span>ADMINISTRATOR</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li ><a href="{{ url('admin/permissions') }}"><i class="fa fa-key"></i> <span>Permissions</span></a></li>
                    <li class="divider"></li>

                    <li ><a href="{{ url('admin/roles') }}"><i class="fa fa-archive"></i> <span>Roles</span></a></li>
                    <li class="divider"></li>

                    <li ><a href="{{ url('admin/settings') }}"><i class="fa fa-cog"></i> <span>Settings</span></a></li>
                    <li class="divider"></li>
                </ul>
            </li>
        @endpermission
        
         @permission('logout')
        <li class="{{ Ekko::isActiveRoute('logout.*') }}"><a href="{{ url('logout') }}"><i class="fa fa-user"></i> <span>SIGN OUT</span></a></li>
            
        @endpermission


         @permission('students')

            <li class="{{ Ekko::isActiveRoute('students.*') }}">
                <a href="{{ url('admin/students') }}" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-users"></i> Students <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header">Students Portal</li>
                    <li><a href="{{ url('admin/students') }}">Student Lists</a></li>
                    <li><a href="#">Subjects</a></li>
                    <li><a href="#">Examitions</a></li>
                    <li><a href="#">Timetables</a></li>
                    <!--  <li><a href="#">One more separated link</a></li> -->
                </ul>
            </li>
            @endpermission

                    <!-- @permission('students')
                    <li class="{{ Ekko::isActiveRoute('students.*') }}"><a href="{{ url('admin/students') }}"><i class="fa fa-users"></i> <span>Students</span></a></li>
        @endpermission -->


            @permission('employees')
            <li class="{{ Ekko::isActiveRoute('employees.*') }}">
                <a href="{{ url('admin/employees') }}" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-users"></i> Employees <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header">Employees Portal</li>
                    <li><a href="#">Employee Lists</a></li>
                    <li><a href="#">Class Information</a></li>
                    <!--  <li><a href="#">Examitions</a></li>
                     <li><a href="#">Timetables</a></li> -->
                    <!--  <li><a href="#">One more separated link</a></li> -->
                </ul>
            </li>
            @endpermission


        {{--</ul>--}}
    </section>
</aside>
<div class="control-sidebar-bg"></div>