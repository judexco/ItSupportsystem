@extends('admin.layouts.master')

@section('content')

  <div class="content-wrapper">

    <section class="content-header">
      <h1>
        Admin
        <small>Tickets</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">Tickets</li>
      </ol>
    </section>


    <section class="content">
        @include('admin.layouts.partials.alerts')


        <div class="row">
            <div class="col-md-5">
                  <div class="box box-default">
                    <div class="box-header with-border">

                      <h3 class="box-title"> Request ID:<i class="fa fa-ticket"> - #{{ $ticket->ticket_id }}- Created: {{ Carbon\Carbon::parse($ticket->created_at)->format('d-m-Y H:i:s') }}</i> </h3> <br>

                      <h3 class="box-title">Subject: {{ $ticket->subject }}</h3>

                     <!--  <h3 class="box-title"><i class="fa fa-ticket"> - {{ $ticket->uname }}</i></h3>

                      <h3 class="box-title"><i class="fa fa-ticket"> - {{ $ticket->email }}</i></h3> -->
                    </div>

                        <div class="box-body">
                            
                            {!! Form::model($ticket, ['method' => 'PATCH','route' => ['managetickets.update', $ticket->ticket_id]]) !!}
                            
                                    {!! csrf_field() !!}      
                                    
                                    <p>Message: <i><h4>{!! $ticket->message !!}</h4></i></p>

                                    <p> <h4>Category: {{ $ticket->category->name}}</h4></p>

                                   <p><h4>Location:{{ $ticket->location->name}}</p>

                                    <p>Priority:{{ $ticket->priority->name}}</p>

                                    
                                     <p>Status: {{ Form::select('status',$statuses,$ticket->status_id,['class'=>'form-control'])}}</p>

                                     <p>Assign To:{{
                                    Form::select('user',$support_admins,$ticket->support_admin_id,['class'=>'form-control','placeholder' => 'None'])}}</p>

                                    
                    
                                    
                        <div class="row">

                          <div class="col-md-6">
                                <button type="submit" class="btn bg-purple"><i class="fa fa-btn fa-ticket"></i>assign</button>
                              </div>

                            <div class="col-md-6">
                                <button type="submit" class="btn bg-purple"><i class="fa fa-btn fa-ticket"></i> Resolve Request</button>   
                               {!! Form::close() !!}   
                               
                            </div>
                            
                            <div class="col-md-6">               
                                    <!-- {!! Form::open(['method' => 'DELETE','route' => ['managetickets.destroy', $ticket->ticket_id],'style'=>'display:inline', 'class'=>'deletetickets']) !!}
                                    {{ Form::button('<i class="fa fa-remove"></i> Delete', array('class'=>'btn btn-danger pull-right', 'type'=>'submit')) }}
                                    {!! Form::close() !!}  -->                               
                            </div>
                        </div>    
                    </div>
                  </div>    
            </div>

    <div class="col-md-7">
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-comments"> Comments</i></h3>
            </div>

           <div class="box-body chat" id="chat-box">

                   @if ($comments->isEmpty())
                        <p>There is no comments yet</p>
                    @else

            @foreach ($comments as $comment)   
 
              <div class="item">
               @if($ticket->user->id === $comment->user_id){{"online"}}@else{{"offline"}}@endif

                <div class="message">
                  <a href="#" class="name">
                    <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> {{ Carbon\Carbon::parse($comment->created_at)->format('Y-m-d H:i:s') }}</small>
                    {{ $comment->user->fullname }}
                  </a>
                {!! $comment->comment !!}    
                </div>

              </div>
              
              <hr>
              
            @endforeach              
                    @endif
            </div>

 
             <div class="box-footer">           
                @if ($ticket->status_id === 3)
                    <form action="{{ url('reopen/' . $ticket->ticket_id) }}" method="POST" class="form">
                      {!! csrf_field() !!}
                         <button type="submit" class="btn bg-purple">Reopen</button>
                    </form>            
                @else
            
                                    <form action="{{ url('admin/tickets/comment') }}" method="POST" class="form">
                                        {!! csrf_field() !!}
                                
                                        <input type="hidden" name="ticket_id" value="{{ $ticket->id }}">
                                
                                        <div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}">
                                            <textarea rows="10" id="summernote" class="form-control" name="comment"></textarea>
                                            @if ($errors->has('comment'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('comment') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                
                                        <div class="form-group">
                                            <button type="submit" class="btn bg-purple">Reply Request</button>
                                        </div>
                                    </form>
                        </div>
          </div>

                @endif
            </div>
        </div>
    </section>

  </div>
@push('scripts') 
  <script type="text/javascript">
        $(document).ready(function () {
//      $(".requestor_id").select2();
            $(".support_admin_id").select2();
//            $(".approved_by_id").select2();
            // $(".biz_coordinator_id").select2();

        });
    </script>
 @endpush
@endsection