@extends('admin.templates.master', array('var1'=>'', 'var2'=>''))
@section('body')
<h1>Add Event</h1>

<form action="{{url('/')}}/events/admin/add-event" method="post" role="form" class="form-horizontal">
  	<div class="form-group">
    	<label class="control-label col-sm-3">Event Name</label>
    	<div class="col-sm-5">
    		<input type="text" class="form-control" id="event_name" name="event_name" placeholder="Enter Event Name">
    	</div>
  	</div>
  	<div class="form-group">
    	<label class="control-label col-sm-3">Event Date</label>
    	<div class="input-group date col-sm-5" id="event_date_group">
    		<input class="form-control" data-format="MM/dd/yyyy" id="event_date" name="event_date" type="text"></input>
    		<span class="input-group-btn">
    			<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-calendar"></span></button>
    		</span>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-3">Start Time</label>
        <div class="input-group date col-sm-5" id="start_time_group">
            <input type="text" class="form-control" id="start_time" name="start_time" />
            <span class="input-group-btn">
    			<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-time"></span></button>
    		</span>
        </div>
    </div>
    <div class="form-group">
		<label class="control-label col-sm-3">End Time</label>
        <div class="input-group date col-sm-5" id="end_time_group">
            <input type="text" class="form-control" id="end_time" name="end_time" />
            <span class="input-group-btn">
    			<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-time"></span></button>
    		</span>
        </div>
    </div>
    <div class="form-group">
    	<label class="control-label col-sm-3 padding-top-0">If a haunted maze, is a special group haunting the maze?</label>
    	<div class="col-sm-5">
    		<input type="text" class="form-control" id="haunted_by" name="haunted_by" placeholder="Who's it haunted by?">
    	</div>
  	</div>
	<button type="submit" class="btn btn-lg btn-default pull-right">Add Event</button>
	<div class="clearfix"></div>
</form>

@stop

@section('footercode')
<script type="text/javascript">
	$(function() {
    	$('#event_date_group').datetimepicker({
    		language: 'en',
      		pick12HourFormat: true,
      		pickTime: false
    	});
  	});
    $(function () {
        $('#start_time_group').datetimepicker({
            pickDate: false
        });
    });
    $(function () {
        $('#end_time_group').datetimepicker({
            pickDate: false
        });
    });
</script>
@stop