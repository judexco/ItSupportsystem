@extends('admin.layouts.master')
 
@section('content')

  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Admin
        <small>Users</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('account.dashboard') }}"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">Show User</li>
      </ol>
    </section>

    <section class="content">
        
        

          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Show User</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>

            <div class="box-body">
                
            <div class="form-group">
                <strong>Name:</strong>
                {{ $user->fullname }}
            </div>

            <div class="form-group">
                <strong>Email:</strong>
                {{ $user->email }}
            </div>

            <div class="form-group">
                <strong>Roles:</strong>
					@foreach($user->roles as $v)
						<label class="label label-success">{{ $v->display_name }}</label>
					@endforeach
            
          </div>
    </section>
  </div>

@endsection 