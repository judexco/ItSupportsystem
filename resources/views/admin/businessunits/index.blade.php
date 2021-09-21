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
      <!-- <a class="btn bg-purple" href="{{ route('admin.businessunits.create') }}"> Create New Business Unit</a> -->
    </section>


    <section class="content">
        
        @include('admin.layouts.partials.alerts')

         <div class="row">
    <div class="col-md-9">
      <div class="box box-primary">
        <div class="box-header with-border">

          <!-- <div class="box box-default">
            <div class="box-header with-border"> -->
              <h3 class="box-title">business Units</h3>

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
                  @foreach ($data as $key => $businessu)
                  <tr>
                    <td>{{ ++$i }}</td>
                    
                    <td>{{ $businessu->name }}</td>


                     <td>

                      <!--  <td><a href="{{ route('admin.businessunits.show',$businessu->id) }}">{{ $businessu->name }}</a></td>
                     <td> -->


                      <a href="{{ route('businessunits.edit',$businessu->id) }}" class="btn btn-sm btn-flat btn-primary"><span class='fa fa-pencil' aria-hidden='true'></span> <b>Edit</b></a>
                    
                      <!-- <form class="form-group" action="{{url('/businessunits'.$businessu->id.'/')}}" method="post">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <button type="submit" class= "btn btn-sm btn-flat btn-danger" onclick="return confirm('Are you sure you want to delete this item?');"> <span class="fa fa-trash-o" aria-hidden="true"></span> <b>Delete</b></button>
                      </form> -->
                    
                    {!! Form::open(['method' => 'DELETE','route' => ['businessunits.destroy', $businessu->id],'style'=>'display:inline','class'=>'deletebusinessu']) !!}

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
          <h3 class="box-title">Create New Business Unit</h3>
        </div>
        <div class="box-body">

          <form method="POST" action="{{ route('businessunits.store') }}">
            {{csrf_field()}}
            <div class="form-group">
              <label for="name">Business Unit Name</label>
              <input type="text" name="name" class="form-control" value="{{old('name')}}">
              
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-primary"><b>Add New Business Unit</b></button>
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