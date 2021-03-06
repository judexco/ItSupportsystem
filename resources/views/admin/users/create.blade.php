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
              <h3 class="box-title">Create New User</h3>

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
	
	            {!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
	
            	<div class="row">
            	    
            		  <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <strong>Name:</strong>
                            {!! Form::text('fullname', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                        </div>
                    </div>
                    
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <strong>Email:</strong>
                            {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
                        </div>
                    </div>

                    <!-- <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <strong>Gender:</strong>
                            {!! Form::text('gender', null, array('placeholder' => 'Gender','class' => 'form-control')) !!}
                        </div>
                    </div> -->

                 <div class="col-xs-4 col-sm-4 col-md-4">
                 <div class="form-group">
                     <label for="gender" class="col-md-4 control-label">Gender</label>
                        <select id="gender" type="gender" class="form-control" name="gender">
                            <option value="">Select Gender</option>
                            
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        
                     </select>
                     </div>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <strong>Contact Number:</strong>
                            {!! Form::text('contactnum', null, array('placeholder' => 'Contact Number','class' => 'form-control')) !!}
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

             <div class="col-xs-4 col-sm-4 col-md-4">
                 <div class="form-group">
                     <label for="dept_id" class="col-md-4 control-label">Department</label>

                        <select id="dept_id" type="dept_id" class="form-control" name="dept_id">
                            <option value="">Select Department</option>
                            @foreach ($depts as $dept)
                        <option value="{{ $dept->id }}">{{ $dept->name }}</option>
                         @endforeach
                     </select>
                            </div>
                        </div>
                    
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <strong>Role:</strong>
                            {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
                        </div>
                    </div>
                    
                    
                    <div class="col-xs-12 col-sm-12 col-md-12">
            				<button type="submit" class="btn bg-purple">Submit</button>
                    </div>
                    
            	</div>
	        </div>
	      </div>
	      
	{!! Form::close() !!}
	
    </section>
  </div>
  
@endsection