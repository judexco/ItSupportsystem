@extends('layouts.master')

@section('title', 'My tickets')

@section('content')
  <div class="content-wrapper">
    <div class="container">
        
      <section class="content-header">
        <h1>
         {{ site_name() }}
          <small>Open new ticket</small>
        </h1>
      </section>
      
      <section class="content">

        @include('layouts.partials.alerts')

          <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-ticket"> Open new ticket</i></h3>
            </div>
            <div class="box-body">

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/tickets/store') }}">
                        {!! csrf_field() !!}

                       <div class="form-group{{ $errors->has('businessu') ? ' has-error' : '' }}">
                            <label for="businessu" class="col-md-4 control-label">Business Unit</label>

                            <div class="col-md-6">
                                <select id="businessu" type="businessu" class="form-control" name="businessu">
                                    <option value="">Select Business Unit</option>
                                    @foreach ($businessus as $businessu)
                        <option value="{{ $businessu->id }}">{{ $businessu->name }}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('businessu'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('businessu') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                            <label for="location" class="col-md-4 control-label">Location</label>

                            <div class="col-md-6">
                                <select id="location" type="location" class="form-control" name="location">
                                    <option value="">Select Location</option>
                                    @foreach ($locations as $location)
                        <option value="{{ $location->id }}">{{ $location->name }}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('location'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('location') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
                            <label for="category" class="col-md-4 control-label">Category</label>

                            <div class="col-md-6">
                                <select id="category" type="category" class="form-control" name="category">
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('category'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('category') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('priority') ? ' has-error' : '' }}">
                            <label for="priority" class="col-md-4 control-label">Priority</label>

                            <div class="col-md-6">
                                <select id="priority" type="priority" class="form-control" name="priority">
                                    <option value="">Select Priority</option>
                                    @foreach ($prioritys as $priority)
                        <option value="{{ $priority->id }}">{{ $priority->name }}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('priority'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('priority') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        

                        <div class="form-group{{ $errors->has('subject') ? ' has-error' : '' }}">
                            <label for="subject" class="col-md-4 control-label">Subject</label>

                            <div class="col-md-6">
                                <input id="subject" type="text" class="form-control" name="subject" placeholder="Type in the subject of Request" value="{{ old('subject') }}">

                                @if ($errors->has('subject'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('subject') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                            <label for="message" class="col-md-4 control-label">Message</label>

                            <div class="col-md-6">
                                <textarea rows="10" id="summernote" class="form-control" placeholder="Type in a message" name="message"></textarea>

                                @if ($errors->has('message'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn bg-purple">
                                    <i class="fa fa-btn fa-ticket"></i> Create Request
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
      </section> 
    </div>
  </div>
@endsection