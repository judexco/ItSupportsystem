@extends('admin.layouts.master')
 
@section('content')

  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Admin
        <small>Users</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">Users</li>
      </ol>
      <a class="btn bg-purple" href="{{ route('users.create') }}"> Create New User</a>
    </section>


    <section class="content">
        
        @include('admin.layouts.partials.alerts')

          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Users</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>

            <div class="box-body table-responsive">

        <div class="col-md-12">
        	<table class="table table-hover" id="usertable">
        	    <thead>
        		<tr style="background-color: #a0bdf2">
        			<th>No</th>
        			<th>Name</th>
        			<th>Email</th>
              <th>Gender</th>
              <th>Contact Number</th>
              <th>Department</th>
              <th>Job Title</th>                            
              <th>Roles</th>
        			<th>Actions</th>
        		</tr>
        		</thead>
        		<tbody>
                	@foreach ($data as $key => $user)
                	<tr>
                		<td>{{ ++$i }}</td>
                		<!--{{--<td><img src="{{ $user->getAvatarUrl() }}" class="img-circle" height="32" width="32" alt="User Image"></td>--}}

                        <td><img src="../{{$user->Avatar }}" width="50px" height="50px"/></td> -->
                		<td><a href="{{ route('users.show',$user->id) }}">{{ $user->fullname }}</a></td>
                		<td>{{ $user->email }}</td>
                    <td>{{ $user->gender }}</td>
                    <td>{{ $user->contactnum }}</td>
                    <td> {{ $user->dept->name }} </td>
                    <td>{{ $user->jobtitle }}</td>
                		<td>
                				@foreach($user->roles as $v)
                					<label class="label label-success">{{ $v->display_name }}</label>
                				@endforeach
                		</td>

                    <td>  
          
         <a href="{{ route('users.show',$user->id) }}" class="btn btn-sm btn-flat btn-primary"><span class="fa fa-info-circle" aria-hidden="true"></span><b>View</b> </a>

         <a href="{{route('users.edit',$user->id)}}" class="btn btn-sm btn-flat btn-warning"><span class="fa fa-edit" aria-hidden="true"></span><b>Edit</b> </a>
                                            
      <form class="form-group" action="{{route('users.destroy',$user->id)}}" method="post"> {{csrf_field()}} {{method_field('DELETE')}}
      <button type="submit" class="btn btn-sm btn-flat btn-danger" onclick="return confirm('Are you sure you want to delete this item?');"><span class="fa fa-trash-o" aria-hidden="true"></span> <b>Delete</b>
      </button>
        </form>
      </td>
      </tr>
      @endforeach
      </tbody>
        </table>
        </div>
        </div>
        </div>	
        
  </section>
  </div>

@push('scripts') 
 <script>
   $(function () {
     $("#usertable").DataTable();

   });
 </script>  
 @endpush
 
@endsection

