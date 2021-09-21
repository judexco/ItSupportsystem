@extends('admin.layouts.master')
 
@section('content')

  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Admin
        <small>Users</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> Back to dashboard</a></li>
        <li class="active">Users</li>
      </ol>
      <a class="btn bg-purple" href="{{ route('admin.locations.create') }}"> Create New Location</a>
    </section>


    <section class="content">
        
        @include('admin.layouts.partials.alerts')

         <div class="row">
    <div class="col-md-9">
      <div class="box box-primary">
        <div class="box-header with-border">

          <!-- <div class="box box-default">
            <div class="box-header with-border"> -->
              <h3 class="box-title">Locations</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>

          <div class="box-body table-responsive">

          <div class="col-md-9">
          <table id="table" class="table table-striped table-bordered table-hover">
              <thead>
            <tr style="background-color: #a0bdf2">
              <th>No</th>
              <th>Name</th>
              <th>Action</th>
              
            </tr>
            </thead>
            <tbody>
                  @foreach ($data as $key => $location)
                  <tr>
                    <td>{{ ++$i }}</td>
                    
                    <td>{{ $location->name }}</td>


                     <td>

                      <!--  <td><a href="{{ route('admin.locations.show',$location->id) }}">{{ $location->name }}</a></td>
                     <td> -->


                      <a href="{{ route('locations.edit',$location->id) }}" class="btn btn-sm btn-flat btn-primary"><span class='fa fa-pencil' aria-hidden='true'></span> <b>Edit</b></a>
                    
                      <!-- <form class="form-group" action="{{url('/locations'.$location->id.'/')}}" method="post">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <button type="submit" class= "btn btn-sm btn-flat btn-danger" onclick="return confirm('Are you sure you want to delete this item?');"> <span class="fa fa-trash-o" aria-hidden="true"></span> <b>Delete</b></button>
                      </form> -->
                    
                    {!! Form::open(['method' => 'DELETE','route' => ['locations.destroy', $location->id],'style'=>'display:inline','class'=>'deletelocation']) !!}

                     <button type="submit" class= "btn btn-sm btn-flat btn-danger" onclick="return confirm('Are you sure you want to delete this item?');"> <span class="fa fa-trash-o" aria-hidden="true"></span> <b>Delete</b></button>


                           <!--  {{ Form::button('<i class="fa fa-remove"> Delete</i>', array('class'=>'btn btn-danger', 'type'=>'submit')) }} -->

                          {!! Form::close() !!}  
                    </td>

                    @endforeach
                  </tbody>
          </table>
        </div>
        </div>
        </div>
        </div>

 <div class="col-md-3">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Create New Location</h3>
        </div>
        <div class="box-body">

          <form method="POST" action="{{ route('locations.store') }}">
            {{csrf_field()}}
            <div class="form-group">
              <label for="name">Location Name</label>
              <input type="text" name="name" class="form-control" value="{{old('name')}}">
              
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-primary"><b>Add New Location</b></button>
            </div>
          </form>
        </div>
      </div>
    </div>



     
          
  </section>
  </div>

  <!--  <script>
    $(document).ready(function() {
      $('#table').DataTable( {
        responsive: true,
        dom: 'l<"clear">Bfrtip',
        buttons: [
         
        ],
        columnDefs: [ {
          orderable: false, targets: 1
        } ],
        order: [[ 1, "desc" ]]
      } );
    } );
  </script> -->

@push('scripts') 
 <script>
   $(function () {
     $("#usertable").DataTable();
      responsive: true,
       
   });
 </script>  
 @endpush
 
@endsection