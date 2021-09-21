@extends('admin.layouts.master')

@section('content')

  <div class="content-wrapper">

    <section class="content-header">
      <h1>
        Admin
        <small>Requests</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> Back to dashboard</a></li>
        <li class="active">Requests</li>
      </ol>
    </section>


    <section class="content">
        
        @include('admin.layouts.partials.alerts')
        
        @include('admin.tickets.buttons')

          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Tickets</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>


            <div class="box-body table-responsive">
  <div class="col-md-12">              
                  @if ($tickets->isEmpty())
                        <p>There is no tickets here.</p>
                    @else
                        <table class="table table-hover" id="tickettable">
                            <thead>
                                <tr>
                                    <th>Ticket ID</th>
                                    <th>subject</th>
                                    <th>User</th>
                                    <th>Email</th>
                                    <th>Department</th>
                                    <th>Location</th>
                                    <th>Comments</th>
                                    <th>Category</th>
                                    <th>Priority</th>
                                    <th>Date Created</th>
                                    <th>Status</th>
                                    <th>Assigned To</th>
                                    <th>Date Resolved</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($tickets as $ticket)
                                <tr>
                                    <td><span class="label label-default">#{{ $ticket->ticket_id }}</span></td>
                                    <td>
                                         @role('Moderator')
                                        <a href="#">
                                            {{ $ticket->subject }}
                                        </a>
                                        @endrole

                                        @role('Admin')
                                         <a href="{{ url('admin/tickets/'. $ticket->ticket_id) }}">
                                            {{ $ticket->subject }}
                                        </a>
                                        @endrole

                                    </td>  
                                    <td>{{ $ticket->user->fullname }}</td>                                    
                                    <td>{{ $ticket->user->email }}</td>                                    
                                    <td>{{ $ticket->user->dept->name }}</td>                                    
                                    <td>
                                    @foreach ($locations as $location)
                                        @if ($location->id === $ticket->location_id)
                                            {{ $location->name }}
                                        @endif
                                    @endforeach
                                    </td>   

                                    <td><span class="badge">{{ count($ticket->comments) }}</span></td>

                                    <td>
                                    @foreach ($categories as $category)
                                        @if ($category->id === $ticket->category_id)
                                            {{ $category->name }}
                                        @endif
                                    @endforeach
                                    </td>
                                    
                                    <td>
                                    @foreach ($prioritys as $priority)
                                        @if ($priority->id === $ticket->priority_id)
                                            @if ($priority->id === 1)
                                            <p class="bg-danger"> {{ $priority->name }}</p>
                                            @elseif ($priority->id === 2)
                                            <p class="bg-success"> {{ $priority->name }}</p>
                                            @else 
                                            <p class="bg-info"> {{ $priority->name }}</p>
                                            @endif                                        
                                        @endif
                                    @endforeach
                                    </td>  

                                    <td>{{ Carbon\Carbon::parse($ticket->created_at)->format('d-m-Y H:i:s') }}</td>
                                <!--     <td>{{ $ticket->updated_at->diffForHumans() }}</td> -->
                                    
                                    <td>
                                    @foreach ($statuses as $status)
                                        @if ($status->id === $ticket->status_id)
                                            @if ($status->id === 1)
                                            <span class="label label-info"> {{ $status->name }}</span>
                                            @elseif ($status->id === 2)
                                            <span class="label label-warning"> {{ $status->name }}</span>
                                            @elseif ($status->id === 3)
                                            <span class="label label-success"> {{ $status->name }}</span>
                                            @else
                                            <span class="label label-danger"> {{ $status->name }}</span>
                                            @endif                                    
                                        @endif
                                    @endforeach
                                    </td>

                                     <td>
                                        <?php
                                    if ($ticket->support_admin_id == '')
                                            echo 'Not Yet Assigned';
                                        else{
                                    foreach ($support_admins as $user) :

                                        if ($user->id == $ticket->support_admin_id){
                                            echo $user->fullname;
                                        }
                                    endforeach;
                                    }
                                    ?>
                                    </td> 
                                  
                                  <td>
                                     @if ($ticket->status_id == 3)
                                    {{ Carbon\Carbon::parse($ticket->resolve_date)->format('d-m-Y') }} {{ $ticket->resolve_time }}
                                    @endif
                                
                                </td>


                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    @endif
        </div>
    </div>
    </section>
  </div>
  
 @push('scripts') 
 <script>
   $(function () {
     $("#tickettable").DataTable({
         "order": [[ 0, "dsc" ]]
     });
   });
 </script>  
 @endpush  
  
@endsection