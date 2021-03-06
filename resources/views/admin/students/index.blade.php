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
        		<tr>
                    <th>No</th>
                    <!--  			<th>Avatar</th> -->
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Address</th>
                    {{--<th>User ID</th>--}}
                    <th>Student Number</th>
                    <th>Birth Date</th>
                    <th>Parent Phone</th>
                    <th>Student Class</th>
                    <th>Fee</th>
                    <th>School</th>
                    <th>Day/Boarding</th>
                    {{--<th>Class Teacher</th>--}}
                    <!-- <th>Provider</th> -->
                    <th>Roles</th>

                </tr>
                </thead>
                <tbody>
                @foreach ($data as $key => $user)
                    <tr>
                        <td>{{ ++$i }}</td>
                		{{--<td><img src="{{ $user->getAvatarUrl() }}" class="img-circle" height="32" width="32" alt="User Image"></td>--}}
                		{{--<td><a href="{{ route('students.show',$user->id) }}">{{ $user->fullname }}</a></td>--}}
                        {{--<td><img src="../{{$user->Avatar }}" width="50px" height="50px"/></td>--}}
                        <td>{{ $user->fullname }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->gender }}</td>
                        <td>{{ $user->location }}</td>
                        {{--<td>{{ $user->user_id}}</td>--}}
                        <td>{{ $user->studentNumber }}</td>
                        <td>{{ $user->studentBirthdate }}</td>
                        <td>{{ $user->parentPhone}}</td>
                        <td>{{ $user->studentClassName }}</td>
                        <td>{{ $user->fee }}</td>
                        <td>{{ $user->schName }}</td>
                        <td>{{ $user->boarding }}</td>
                        <td>{{ $user->roleName }}</td>
                        <td>
                    {{--@foreach($user->roles as $v)--}}
                      {{--<label class="label label-success">{{ $v->display_name }}</label>--}}
                    {{--@endforeach--}}
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
<a class="btn bg-purple" href="{{ route('admin.students.create') }}"> Create New User</a>
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