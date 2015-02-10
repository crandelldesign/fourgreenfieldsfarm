@extends('admin.templates.master', array('var1'=>'', 'var2'=>''))
@section('body')
<h1>All Events</h1>

<div class="row margin-bottom-15">
	<div class="col-xs-4 col-sm-3">
		<select class="form-control input-sm filter-year">
			<option value="all">Filter by Year</option>
			@for($i=(date('Y')+2); $i>=2000; $i--)
			<option value="{{$i}}" {{($year==$i)?'selected="selected"':''}}>{{$i}}</option>
			@endfor
		</select>
	</div>
	<div class="col-xs-4 col-sm-3">
		<select class="form-control input-sm filter-month {{(!$year)?'disabled':''}}" {{(!$year)?'disabled="disabled"':''}}>
			<option value="all">Filter by Month</option>
			@for($i=1; $i<=12; $i++)
			<option value="{{$i}}" {{($month==$i)?'selected="selected"':''}}>{{$i}}</option>
			@endfor
		</select>
	</div>
	<div class="col-xs-2">
		<button type="button" class="btn btn-sm btn-success filter-search">Filter</button>
	</div>
</div>

<table class="table table-hover">
@foreach($events as $event)
	<tr data-event_id="{{$event->id}}">
		<td class="event_name">{{$event->name}}</td>
		<td class="event_date">{{date("m/d/Y", strtotime($event->starts_at))}}</td>
		<td class="start_time">{{date("g:ia", strtotime($event->starts_at))}}</td>
		<td class="end_time">{{date("g:ia", strtotime($event->ends_at))}}</td>
		<td><button type="button" class="btn btn-xs btn-success edit-event" data-event_id="{{$event->id}}"><span class="glyphicon glyphicon-pencil"></span>&nbsp;&nbsp;Edit Event</button></td>
		<td><button type="button" class="btn btn-xs btn-danger delete-event" data-event_id="{{$event->id}}"><span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Event</button></td>
	</tr>
@endforeach
</table>

<!-- Modal -->
<div class="modal fade" id="editEventModal" tabindex="-1" role="dialog" aria-labelledby="editEventModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h2 class="modal-title" id="editEventModalLabel">Edit Event</h2>
      </div>
      <div class="modal-body">
        <form action="#" method="post" role="form" class="form-horizontal">
		  	<div class="form-group">
		    	<label class="control-label col-sm-4">Event Name</label>
		    	<div class="col-sm-6">
		    		<input type="text" class="form-control" id="event_name" name="event_name" placeholder="Enter Event Name">
		    	</div>
		  	</div>
		  	<div class="form-group">
		    	<label class="control-label col-sm-4">Event Date</label>
		    	<div class="input-group date col-sm-6" id="event_date_group">
		    		<input class="form-control" data-format="MM/dd/yyyy" id="event_date" name="event_date" type="text"></input>
		    		<span class="input-group-btn">
		    			<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-calendar"></span></button>
		    		</span>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-4">Start Time</label>
		        <div class="input-group date col-sm-6" id="start_time_group">
		            <input type="text" class="form-control" id="start_time" name="start_time" />
		            <span class="input-group-btn">
		    			<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-time"></span></button>
		    		</span>
		        </div>
		    </div>
		    <div class="form-group">
				<label class="control-label col-sm-4">End Time</label>
		        <div class="input-group date col-sm-6" id="end_time_group">
		            <input type="text" class="form-control" id="end_time" name="end_time" />
		            <span class="input-group-btn">
		    			<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-time"></span></button>
		    		</span>
		        </div>
		    </div>
		    <div class="form-group">
		    	<label class="control-label col-sm-4 padding-top-0">If a haunted maze, is a special group haunting the maze?</label>
		    	<div class="col-sm-6">
		    		<input type="text" class="form-control" id="haunted_by" name="haunted_by" placeholder="Who's it haunted by?">
		    	</div>
		  	</div>
		  	<input type="hidden" id="event_id" name="event_id">
			<button type="submit" class="btn btn-default pull-right btn-submit" data-loading-text="Loading...">Edit Event</button>
			<div class="clearfix"></div>
		</form>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>-->
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="deleteConfirmModal" tabindex="-1" role="dialog" aria-labelledby="deleteConfirmModalLabel" aria-hidden="true">
  	<div class="modal-dialog modal-sm">
    	<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        		<h2 class="modal-title" id="deleteConfirmModalLabel">Delete Event</h2>
      		</div>
      		<div class="modal-body">
      			<h3 class="text-center">Are You Sure?</h3>
      			<div class="row margin-top-15">
      				<div class="col-xs-6">
      					<button type="button" class="btn btn-default btn-block btn-delete-yes">Yes</button>
      				</div>
      				<div class="col-xs-6">
      					<button type="button" class="btn btn-default btn-block btn-delete-no" data-dismiss="modal">No</button>
      				</div>
      			</div>
      		</div>
    	</div>
  	</div>
</div>

@stop

@section('footercode')
<script>
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
Event = can.Model({
    findOne: 'GET {{url("/")}}/api/event'
},{});
EventsControl = can.Control(
{
	init: function()
    {
    	//this.Search();
    },
    //Events
    '.filter-year change': function(element)
    {
    	var self = this;
        if(element.val() == 'all')
        {
        	$('.filter-month').prop('disabled', true);
            $('.filter-month').addClass('disabled');
            $(".filter-month option[value='all']").attr('selected', 'selected');
        } else {
        	$('.filter-month').prop('disabled', false);
            $('.filter-month').removeClass('disabled');
        }
    },
    '.filter-search click': function(element)
    {
    	var year = $('.filter-year').val();
    	var month = $('.filter-month').val();
    	var url = '{{url("/")}}/events/admin/all-events'+((year != 'all')?'/'+year:'')+((month != 'all')?'/'+month:'');
    	window.location = url;
    },
    '.edit-event click':function(element)
    {
    	var self = this;
    	var event_id = element.data('event_id');
    	Event.findOne({id: event_id}, function(data)
    	{
    		self.bindEvent(data);
    	});
    },
    '.delete-event click':function(element)
    {
    	var self = this;
    	var event_id = element.data('event_id');
    	$('.btn-delete-yes').data('event_id',event_id);
    	$('#deleteConfirmModal').modal('show');
    },
    '.btn-delete-yes click':function(element)
    {
    	var self = this;
    	var event_id = element.data('event_id');
    	if (event_id)
    	{
    		$.ajax({
                type: 'POST',
                url: '{{url("/")}}/api/delete-event/'+event_id,
                //data: $('#editEventModal form').serialize(),
                //dataType: 'json',
                success: function(result)
                {
                  	var event_row = $(".table").find("tr[data-event_id='"+result.id+"']");
                  	event_row.hide();
                  	$('#deleteConfirmModal').modal('hide');
                }
            });
    	}
    },
    '#editEventModal form submit': function(element, event)
    {
    	event.preventDefault();
    	$('#editEventModal form .btn-submit').button('loading');
    	var event_id = $('#event_id').val();

    	if(($('#event_name').val() != '') && ($('#event_date').val() != '') && ($('#start_time').val() != '') && ($('#end_time').val() != ''))
    	{
    		$.ajax({
                  type: 'POST',
                  url: '{{url("/")}}/api/update-event/'+event_id,
                  data: $('#editEventModal form').serialize(),
                  dataType: 'json',
                  success: function(result)
                  {
                  	var event_row = $(".table").find("tr[data-event_id='"+result.id+"']");
                  	event_row.find('.event_name').html(result.name);
                  	event_row.find('.event_date').html(moment(result.starts_at).format('MM/DD/YYYY'));
                  	event_row.find('.start_time').html(moment(result.starts_at).format('h:mma'));
                  	event_row.find('.end_time').html(moment(result.ends_at).format('h:mma'));
                    $('#editEventModal form .btn-submit').button('reset');
                    $('#editEventModal form .btn-submit').html('Saved!').addClass('btn-success');
                    setTimeout(function (){
                    	$('#editEventModal').modal('hide');
            			$('#editEventModal form .btn-submit').html('Edit Event').removeClass('btn-success');
        			}, 1000);
                  }
              });
    	}
    },
    //Methods
    'bindEvent': function(data)
    {
    	$('#event_id').val(data.id);
    	$('#event_name').val(data.name);
    	$('#event_date').val(moment(data.starts_at).format('MM/DD/YYYY'));
    	$('#start_time').val(moment(data.starts_at).format('h:mm A'));
    	$('#end_time').val(moment(data.ends_at).format('h:mm A'));
    	$('#haunted_by').val(data.haunted_by);
    	$('#editEventModal').modal('show');
    },
});
events_control = new EventsControl($('body'));
</script>
@stop