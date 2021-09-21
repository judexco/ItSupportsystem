@extends('admin.layouts.master')

@section('content')

   <div class="content-wrapper">
        <section class="content-header">
        <article>
         <!--  <p><h4>Welcome to IT Support ServiceDesk Portal</p> <br>
           <p>The aim of the system is to allow users report their IT related issues to reduce the need of calling or looking for the IT team.</p>
           Click on the link below to report an issue or request for a service <br>
            >> <a href="{{ route('tickets.create') }}">Create new Request</a> <br>
           Click on the below link to see all your Requests <br> 
           >>  <a href="{{ route('tickets.index') }}">My Requests</a> </h4> -->
         
         @permission('view-dashboard-user')

          <div class="col-sm-4">
                   <div class="panel panel-primary">
                     <div class="panel-heading">
                       <h4 class="text-capitalize">
                         Welcome to IT Support ServiceDesk portal
                       </h4>
                     </div>
                     <div class="panel-body">
                     <h4>The aim of the system is to allow users report their IT related issues or request for a service to  reduce the need of calling or looking for the IT team.<br>
                        Click on the "Submit Request Button" to report an issue or request for a service</h4>
                       
                       </div>
                       <div class="panel-footer">
                       <!-- <a href="{{ url('admin/tickets') }}" class="btn btn-primary btn-sm">Tickets</a> -->
                       <a href="{{ route('tickets.create') }}" class="btn btn-primary btn-sm">Submit Request</a>
                       <a href="{{ route('tickets.index') }}" class="btn btn-primary btn-sm">View all Request</a>
                       
                      
                     </div>

                     </div>
                     </div>
               @endpermission      
              </article>
              
            
      
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> User</a></li>
            </ol>
        </section>


    <section class="content">
        
        @include('admin.layouts.partials.alerts')


     @permission('view-dashboard-user')
     
       <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                  <a  href="{{ route('tickets.create') }}"><span class="info-box-icon bg-blue"><i class="fa fa-plus"></i></span></a>
                  <div class="info-box-content">
                      <span class="info-box-text">Submit Your<br>Request</span>
                  </div>
              </div>
          </div>
     
     @endpermission

     @permission('view-dashboard-user')
     <div class="row">
       <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                  <a  href="{{ route('tickets.index') }}"><span class="info-box-icon bg-blue"><i class="fa fa-plus"></i></span></a>
                  <div class="info-box-content">
                      <span class="info-box-text">View all Your<br>Request</span>
                  </div>
              </div>
          </div>
     </div>
     @endpermission

      
    
    @permission('manage-tickets')
      <div class="row">
        
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-folder-open"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Open Requests </span>
              <span class="info-box-number">{{ $count_open_ticket }}</span>
            </div>
          </div>
        </div>
  
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-check-square"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Resolved Requests</span>
              <span class="info-box-number">{{ $count_closed_ticket }}</span>
            </div>
          </div>
        </div>
 
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-folder"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Pending Request</span>
              <span class="info-box-number">{{ $count_inprogress_ticket }}</span>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-history"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Reopened</span>
              <span class="info-box-number">{{ $count_reopened_ticket }}</span>
            </div>
          </div>
        </div>
        
     </div>
     @endpermission

     @permission('manage-tickets')
      <div class="row">
        
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-folder-open"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">No. of Requests <br> created today</span>
              <span class="info-box-number">{{ $count_number_of_issues_reported_today }}</span>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-folder-open"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">No. of Requests <br> created This Week</span>
              <span class="info-box-number">{{$count_number_of_issues_reported_this_week }}</span>
            </div>
          </div>
        </div>
  
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-folder-open"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">No.of Requests <br> created This Month</span>
              <span class="info-box-number">{{$count_number_of_issues_reported_this_month }}</span>
            </div>
          </div>
        </div>
        
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-folder-open"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">No. of Requests <br>created This Year</span>
              <span class="info-box-number">{{$count_number_of_issues_reported_this_year }}</span>
            </div>
          </div>
        </div>
        
     </div>
     @endpermission


     @permission('manage-tickets')
      <div class="row">

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-check-square"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">No. of Requests <br>resolved Today</span>
              <span class="info-box-number">{{$count_number_of_issues_resolved_today }}</span>
            </div>
          </div>
        </div>
  
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-check-square"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">No. of Requests <br>resolved this week</span>
              <span class="info-box-number">{{$count_number_of_issues_resolved_this_week }}</span>
            </div>
          </div>
        </div>
        
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-check-square"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">No. of Requests <br>resolved this Month</span>
              <span class="info-box-number">{{$count_number_of_issues_resolved_this_month }}</span>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-check-square"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">No. of Requests <br>resolved this Year</span>
              <span class="info-box-number">{{$count_number_of_issues_resolved_this_year }}</span>
            </div>
          </div>
        </div>
        
     </div>
     @endpermission

     
      <div class="row">
          
        @permission('manage-permissions')
        <div class="col-lg-4 col-xs-6">
          <div class="small-box bg-teal">
            <div class="inner">
              <h3>{{ $count_permissions }}</h3>
              <p>Permissions</p>
            </div>
            <div class="icon">
              <i class="fa fa-key"></i>
            </div>
            <a href="{{ route('permissions.index') }}" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        @endpermission

        @permission('manage-users')
        <div class="col-lg-4 col-xs-6">
          <div class="small-box bg-maroon">
            <div class="inner">
              <h3>{{ $count_users }}</h3>
              <p>Users</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="{{ route('users.index') }}" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        @endpermission


        @permission('manage-roles')
        <div class="col-lg-4 col-xs-6">
          <div class="small-box bg-primary">
            <div class="inner">
              <h3>{{ $count_roles }}</h3>
              <p>Roles</p>
            </div>
            <div class="icon">
              <i class="fa fa-archive"></i>
            </div>
            <a href="{{ route('roles.index') }}" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        @endpermission


               @permission('manage-settings')
                 <div class="col-sm-4">
                   <div class="panel panel-primary">
                     <div class="panel-heading">
                       <h4 class="text-capitalize">
                         Settings
                       </h4>
                     </div>
                     <div class="panel-body">
                       <div class="col-sm-12 text-center" style="color: #0288D1">
                             <span class="fa-stack fa-3x">
                                      <i class="fa fa-circle fa-stack-2x"></i>
                                      <i class="fa fa-cogs fa-stack-1x fa-inverse"></i>
                                    </span>
                       </div>
                     </div>
                     <div class="panel-footer">
                       <a href="{{ url('admin/settings') }}" class="btn btn-primary btn-sm">Configs</a>
                       <a href="{{ url('admin/users') }}" class="btn btn-primary btn-sm">Users</a>
                         <a href="{{ url('admin/permissions') }}" class="btn btn-primary btn-sm">Permissions</a>
                           <a href="{{ url('admin/roles') }}" class="btn btn-primary btn-sm">Roles</a>
                     </div>
                   </div>
                 </div>
                  @endpermission

                 @permission('manage-tickets')
                 <div class="col-sm-4">
                   <div class="panel panel-primary">
                     <div class="panel-heading">
                       <h4 class="text-capitalize">
                        Support
                       </h4>
                     </div>
                     <div class="panel-body">
                       <div class="col-sm-12 text-center" style="color: #0288D1">
                                    <span class="fa-stack fa-3x">
                                      <i class="fa fa-circle fa-stack-2x"></i>
                                      <i class="fa fa-comments fa-stack-1x fa-inverse"></i>
                                    </span>
                        
                       </div>
                     </div>
                     
                     <div class="panel-footer">
                       <a href="{{ url('admin/tickets') }}" class="btn btn-primary btn-sm">All Requests</a>
                       <a href="{{ route('tickets.index') }}" class="btn btn-primary btn-sm">User Request</a>
                       <a href="{{ route('tickets.create') }}" class="btn btn-primary btn-sm">User PageRequest</a>
                       {{--<a href="{{ route('page.contact') }}" class="btn btn-primary btn-sm">Email</a>--}}
                     </div>
                   </div>
                 </div>
                 @endpermission

                 

               </div>
             </div>
           </div>
      </div>


    </section>


<!--
        {{--My Panel--}}

           <div class="panel panel-default">
             <div class="panel-heading">
               <div class="panel-body">

         </div>
       </div>
   </div>
-->
@stop