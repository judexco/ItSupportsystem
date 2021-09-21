@extends('admin.layouts.master')
 
@section('content')
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Admin
        <small>Department</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> Back to dashboard</a></li>
        <li class="active">Edit Department</li>
      </ol>
    </section>

    <section class="content">
        
        @include('admin.layouts.partials.alerts')

          <div class="box box-default">
              
            <div class="box-header with-border">
              <h3 class="box-title">Edit Department</h3>

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
              
          {!! Form::model($dept, ['method' => 'PATCH','route' => ['departments.update', $dept->id]]) !!}

            <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Department:</strong>
                {!! Form::text('name', null, array('placeholder' => 'name','class' => 'form-control')) !!}
            </div>
          </div>
          <br>
            

        <button type="submit" class="btn bg-purple">Add</button>

            </div>
         </div> 
  </div>
    </section>
  </div>

  {!! Form::close() !!}
  
@endsection