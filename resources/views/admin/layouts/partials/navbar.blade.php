
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
            <li class="header"><span>MENU</span></li>

            @permission('view-backend')
            <li class="{{ Ekko::isActiveRoute('admin.dashboard') }}"><a href="{{ url('admin') }}"><i class="fa fa-dashboard"></i> <span>DASHBOARD</span></a></li>
            @endpermission

            

            @permission('Users-ticket')
            <li class="{{ Ekko::isActiveRoute('tickets.index', 'tickets.show.*') }}">
                <a href="{{ url('admin/Users-ticket') }}" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-users"></i> USER REQUESTS PAGE <span class="caret"></span></a>
                <ul class="treeview-menu" role="menu">
                    <li class="dropdown-header">User Requests</li>
                    <li><a href="{{ route('tickets.create') }}">Create New Request</a></li>
                    <li><a href="{{ route('tickets.index') }}">View All My Requests</a></li>
                    
                </ul>
            </li>
            @endpermission
            
            @role('Moderator')
            <!-- @permission('View-All-Request') -->
            <li class="{{ Ekko::isActiveRoute('managetickets.*') }}"><a href="{{ url('admin/tickets') }}"><i class="fa fa-ticket"></i> <span>View All Requests</span></a></li>
            <!-- @endpermission -->
           @endrole
            @permission('manage-users')
           <!-- <li class="{{ Ekko::isActiveRoute('users.*') }}"><a href="{{ url('admin/users') }}"><i class="fa fa-users"></i> <span>Users</span></a></li> -->

            <li class="treeview">
                <a href="#" ><i class='fa fa-server'></i> <span>SYSTEM MGMT/MASTER DATA</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">

                    <li><a href="{{ url('admin/categorys')}}"><i class='fa fa-th-list'></i> <span>CATEGORY</span></a></li>

                    <li><a href="{{ url('admin/businessunits')}}"><i class='fa fa-th-list'></i> <span>BUSINESS UNIT</span></a></li>

                    <li><a href="{{ url('admin/locations')}}"><i class='fa fa-map-marker'></i> <span>LOCATIONS</span></a></li>

                    <li><a href="{{ url('admin/departments')}}"><i class='fa fa-group'></i> <span>DEPARTMENTS</span></a></li>
                </ul>
            </li>

            @endpermission

           

            @role('Admin')
            <li class="{{ Ekko::isActiveRoute('managetickets.*') }}"><a href="{{ url('admin/tickets') }}"><i class="fa fa-ticket"></i> <span>RESOLVE ALL REQUESTS</span></a></li>
            @endrole

            <!-- @permission('manage-roles')
            <li class="{{ Ekko::isActiveRoute('roles.*') }}"><a href="{{ url('admin/roles') }}"><i class="fa fa-archive"></i> <span>Roles</span></a></li>
            @endpermission

            @permission('manage-permissions')
            <li class="{{ Ekko::isActiveRoute('permissions.*') }}"><a href="{{ url('admin/permissions') }}"><i class="fa fa-key"></i> <span>Permissions</span></a></li>
            @endpermission -->

            @permission('manage-settings')
            <!-- <li class="{{ Ekko::isActiveRoute('settings.*') }}"><a href="{{ url('admin/settings') }}"><i class="fa fa-cog"></i> <span>Settings</span></a></li> -->

            <li class="treeview">
                <a href="#"><i class='fa fa-cog'></i> <span>USER MGMT</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">

                    <li ><a href="{{ url('admin/users') }}"><i class="fa fa-users"></i> <span>USERS</span></a></li>
                    <li class="divider"></li>

                    <li ><a href="{{ url('admin/permissions') }}"><i class="fa fa-key"></i> <span>Permissions</span></a></li>
                    <li class="divider"></li>

                    <li ><a href="{{ url('admin/roles') }}"><i class="fa fa-archive"></i> <span>Roles</span></a></li>
                    <li class="divider"></li>

                    <li ><a href="{{ url('admin/settings') }}"><i class="fa fa-cog"></i> <span>Settings</span></a></li>
                    <li class="divider"></li>
                </ul>
            </li>

        @endpermission

        @permission('chart-report')
            <li class="{{ Ekko::isActiveRoute('chart-report.*') }}"><a href="{{ url('admin/charts') }}"><i class="fa fa-dashboard"></i> <span>CHART REPORT</span></a></li>
         @endpermission


        @permission('logout')
        <li class="{{ Ekko::isActiveRoute('logout.*') }}"><a href="{{ url('logout') }}"><i class="fa fa-user"></i> <span>SIGN OUT</span></a></li>
            
        @endpermission

    {{--</ul>--}}
    </section>

</aside>
<div class="control-sidebar-bg"></div>