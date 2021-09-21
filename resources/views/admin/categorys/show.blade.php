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
        <li class="active">Show category</li>
      </ol>
    </section>

    <section class="content">
        
        @include('admin.layouts.partials.alerts')

          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Show category</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>

            <div class="box-body">
                
            <div class="form-group">
                <strong>Name:</strong>
                {{ $category->name }}
            </div>

            

                			<a class="btn bg-purple" href="{{ route('categorys.edit',$category->id) }}"><i class="fa fa-edit"> Edit</i></a>

                      
                			{!! Form::open(['method' => 'DELETE','route' => ['categorys.destroy', $category->id],'style'=>'display:inline','class'=>'deletecategory']) !!}
                            {{ Form::button('<i class="fa fa-remove"> Delete</i>', array('class'=>'btn btn-danger', 'type'=>'submit')) }}
                        	{!! Form::close() !!}            
            
          </div>	
          </div>
    </section>
  </div>

@endsection