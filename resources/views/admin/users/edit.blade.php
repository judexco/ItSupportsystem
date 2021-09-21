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
        <li class="active">Edit User</li>
      </ol>
    </section>

    <section class="content">
        
        @include('admin.layouts.partials.alerts')

          <div class="box box-default">
              
            <div class="box-header with-border">
              <h3 class="box-title">Edit User</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            
            <div class="box-body">
                
            	@if (count($errors) > 0)
            		<div class="alert alert-danger">
            			<strong>Whoops!</strong> There were some problems with your input.<br><br>
            			<ul>
            				@foreach ($errors->all() as $error)
            					<li>{{ $error }}</li>
            				@endforeach
            			</ul>
            		</div>
            	@endif
            	
	        {!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!}

            <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Name:</strong>
                {!! Form::text('fullname', null, array('placeholder' => 'Fullname','class' => 'form-control')) !!}
            </div>
            </div>

            <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Email:</strong>
                {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
            </div>
        </div>

            <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Gender:</strong>
                {!! Form::text('gender', null, array('placeholder' => 'Gender','class' => 'form-control')) !!}
            </div>
        </div>



            <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Contact Number:</strong>
                {!! Form::text('contactnum', null, array('placeholder' => 'Contact Number','class' => 'form-control')) !!}
            </div>
        </div>

            
            <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Job Title:</strong>
                {!! Form::text('jobtitle', null, array('placeholder' => 'Job Title','class' => 'form-control')) !!}
            </div>
        </div>

            <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Password:</strong>
                {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
            </div>
        </div>

            <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Confirm Password:</strong>
                {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
            </div>
        </div>

        <!-- <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Department:</strong>
                {!! Form::text('dept', null, array('placeholder' => 'Department','class' => 'form-control')) !!}
            </div>
        </div> -->


        <div class="col-xs-4 col-sm-4 col-md-4">
         <div class="form-group">
          <label for="dept_id" class="col-md-4 control-label">Department</label>     

        <select id="dept_id" type="dept_id" class="form-control" name="dept_id">
            @foreach($depts as $key => $value) 
                @if ($user->dept_id == $key)
                    <option value="{{ $key }}" selected>{{$value}}</option>
                @else
                   <option value="{{$key}}">{{$value}}</option>
                @endif
            @endforeach 
            </select>

         </div>
        </div>

            <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Role:</strong>
                {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control','multiple')) !!}
            </div>
        </div>

				<button type="submit" class="btn bg-purple">Submit</button>

            </div>
         </div>	
  </div>
    </section>
  </div>

	{!! Form::close() !!}
	
@endsection