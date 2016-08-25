@extends('layouts.admin')
@section('content-header')
	<h1>{{(isset($event))?'Edit':'Add'}} Event</h1>
@stop
@section('content')
	<div class="row">
        <div class="col-lg-10">
			<div class="box">
				<form method="post" action="{{url('/admin/events/edit')}}" class="form-horizontal">
					<div class="box-header with-border">
		            	<h2 class="box-title">Event Details</h2>
		            </div>
		        	<div class="box-body">

		        		@if (session('success'))
						    <div class="alert alert-success alert-dismissible fade in">
						    	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						        <ul>
						            <li>{{session('success')}}</li>
						        </ul>
						    </div>
						@endif

		        		@if (session('not_found'))
						    <div class="alert alert-danger">
						        <ul>
						            <li>{{session('not_found')}}</li>
						        </ul>
						    </div>
						@endif

		        		<div class="form-group">
					    	<label class="control-label col-sm-3">Event Name</label>
					    	<div class="col-sm-5">
					    		<input type="text" class="form-control" id="event_name" name="event_name" placeholder="Event Name" value="{{old('event_name')?old('event_name'):(isset($event)?$event->name:'')}}">
					    	</div>
					  	</div>
					  	<div class="form-group">
					    	<label class="control-label col-sm-3">Event Date</label>
					    	<div class="col-sm-5">
						    	<div class="input-group date" id="event_date_group">
						    		<input class="form-control" id="event_date" name="event_date" type="text" placeholder="##/##/####" value="{{old('event_date')?old('event_date'):(isset($event)?date('m/d/Y', strtotime($event->starts_at)):'')}}">
						    		<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
								</div>
							</div>
						</div>
						<div class="time-info" style="display:{{old('is_all_day' == 1)?'none':(isset($event) && $event->is_all_day == 1?'none':'')}}">
							<div class="form-group start-time-group">
								<label class="control-label col-sm-3">Start Time</label>
								<div class="col-sm-5">
							        <div class="input-group date" id="start_time_group">
							            <input type="text" class="form-control" id="start_time" name="start_time" placeholder="6:00 PM" value="{{old('start_time')?old('start_time'):(isset($event)?date('g:ia', strtotime($event->starts_at)):'')}}">
							            <span class="input-group-addon"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
							        </div>
							    </div>
						    </div>
							<div class="form-group">
						        <!--<label class="control-label col-xs-3 padding-top-0"></label>-->
						        <div class="col-xs-5 col-sm-offset-3">
						        	<div class="checkbox">
							        	<label>
							            	<input class="is-has-ends-at" type="checkbox" id="is_has_ends_at" name="is_has_ends_at" value="1" {{old('is_has_ends_at' == 1)?'checked':(isset($event) && $event->is_has_ends_at == 1?'checked':'')}}>
							            	Does this event have an end time?
							            </label>
						            </div>
						        </div>
						    </div>
						    <div class="form-group end-time-group" style="display:{{old('is_has_ends_at' == 1)?'':(isset($event) && $event->is_has_ends_at == 1?'':'none')}}">
								<label class="control-label col-sm-3">End Time</label>
								<div class="col-sm-5">
							        <div class="input-group date" id="end_time_group">
							            <input type="text" class="form-control" id="end_time" name="end_time" placeholder="7:00 PM" value="{{old('end_time')?old('end_time'):(isset($event)?date('g:ia', strtotime($event->ends_at)):'')}}">
							            <span class="input-group-addon"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
							        </div>
						        </div>
						    </div>
					    </div>
					    <div class="form-group">
					        <!--<label class="control-label col-xs-3 padding-top-0">All Day?</label>-->
					        <div class="col-xs-5 col-sm-offset-3">
					        	<div class="checkbox">
						        	<label>
					            		<input class="is-all-day" type="checkbox" id="is_all_day" name="is_all_day" value="1" {{old('is_all_day' == 1)?'checked':(isset($event) && $event->is_all_day == 1?'checked':'')}}>
					            		All Day?
					            	</label>
					            </div>
					        </div>
					    </div>
					    <div class="form-group">
					        <!--<label class="control-label col-xs-3 padding-top-0">Featured Event?</label>-->
					        <div class="col-xs-5 col-sm-offset-3">
					        	<div class="checkbox">
						        	<label>
					            		<input class="is_featured" type="checkbox" id="is_featured" name="is_featured" value="1" {{old('is_featured' == 1)?'checked':(isset($event) && $event->is_featured == 1?'checked':'')}}>
					            		Featured Event?
					            	</label>
					            </div>
					        </div>
					    </div>
					    <div class="form-group">
					        <label class="control-label col-sm-3">Enter Description</label>
					        <div class="col-sm-9">
					            <textarea id="summernote" name="description" class="form-control" rows="5">{{old('description')?old('description'):(isset($event) && $event->description != 'NULL'?$event->description:'')}}</textarea>
					        </div>
					    </div>
					    <input type="hidden" name="event_id" value="{{isset($event)?$event->id:0}}">
		        		<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
		        	</div>
		        	<div class="box-footer text-right">
						<input class="btn btn-default" type="submit" name="add_close" value="Save and Close">
						<input class="btn btn-lynch" type="submit" name="{{(isset($event))?'continue':'add_another'}}" value="{{(isset($event))?'Save and Continue':'Save and Add Another'}}">
					</div>
				</form>
			</div>
		</div>
	</div>
@stop

@section('scripts')
<script>
	$(document).ready(function(){
	  	$('#event_date_group').datetimepicker({
    		allowInputToggle: true,
    		format: 'M/D/YYYY'
    	});
    	$('#start_time_group').datetimepicker({
            allowInputToggle: true,
            format: 'h:mm A'
        });
        $('#end_time_group').datetimepicker({
            allowInputToggle: true,
            format: 'h:mm A'
        });
        $('.is-has-ends-at').on('change', function()
        {
        	if ($(this).is(":checked"))
        		$('.end-time-group').show();
        	else
        		$('.end-time-group').hide();
        });
        $('.is-all-day').on('change', function()
        {
        	if ($(this).is(":checked"))
        		$('.time-info').hide();
        	else
        		$('.time-info').show();
        });
        $('#summernote').summernote({
            height: "200px",
            toolbar: [
			    ['style', ['style']],
			    ['font', ['bold', 'italic', 'underline', 'clear']],
			    ['fontname', ['fontname']],
			    ['color', ['color']],
			    ['para', ['ul', 'ol', 'paragraph']],
			    ['height', ['height']],
			    ['table', ['table']],
			    ['insert', ['link', 'picture', 'hr']],
			    ['view', ['fullscreen', 'codeview']],
			    ['help', ['help']]
			],
        });
	});
</script>
@stop