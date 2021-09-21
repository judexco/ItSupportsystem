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
        <li class="active">Category</li>
      </ol>
    </section>

    <section class="content">
        
        @include('admin.layouts.partials.alerts')


          <div class="box box-default">
              
            <div class="box-header with-border">
              <h3 class="box-title">Create New Category</h3>

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
	
	            {!! Form::open(array('route' => 'categorys.store','method'=>'POST')) !!}
	
            	<div class="row">
            	    
            		<div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                            <strong>Category:</strong>
                            {!! Form::text('name', null, array('placeholder' => 'Category','class' => 'form-control')) !!}
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