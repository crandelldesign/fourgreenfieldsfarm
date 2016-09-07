@extends('layouts.admin')
@section('head')
<link rel="stylesheet" type="text/css" href="{{url('/css/datatables/datatables.min.css')}}" />
@stop
@section('content-header')
	<h1>Events</h1>
@stop
@section('content')
	<div class="row">
        <div class="col-lg-10">
			<div class="box">
				<div class="box-header with-border">
	            	<h2 class="box-title">All Events</h2>
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
					<div class="table-responsive">
						<table class="table table-striped events">
						<thead>
							<tr>
								<th>Name</th>
								<th>Date</th>
								<th>Start</th>
								<th>End</th>
								<th>&nbsp;</th>
								<th>&nbsp;</th>
							</tr>
						</thead>
						<tbody>
						@foreach($events as $event)
							<tr data-event_id="{{$event->id}}">
								<td class="event_name">{{$event->name}}</td>
								<td class="event_date">{{date("m/d/Y", strtotime($event->starts_at))}}</td>
						    @if($event->is_all_day)
						    	<td>All Day</td>
						    	<td> - </td>
						    @else
								<td class="start_time">{{date("g:ia", strtotime($event->starts_at))}}</td>
								<td class="end_time">{{($event->is_has_ends_at == 1)?date("g:ia", strtotime($event->ends_at)):' - '}}</td>
						    @endif
								<td><a href="{{url('/admin/events/'.$event->id)}}" class="btn btn-xs btn-success edit-event" data-event_id="{{$event->id}}"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;&nbsp;Edit Event</a></td>
								<td><button type="button" class="btn btn-xs btn-danger delete-event" data-event_id="{{$event->id}}"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp;&nbsp;Delete Event</button></td>
							</tr>
						@endforeach
						</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" tabindex="-1" role="dialog" id="delete-modal">
		<div class="modal-dialog">
		    <div class="modal-content">
			    <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h2 class="modal-title">Delete Event</h2>
			    </div>
			    <div class="modal-body">
	      			<p class="text-center lead">Are You Sure?</p>
	      			<div class="row margin-top-15">
	      				<div class="col-xs-6">
	      					<a href="{{url('/admin/delete-event/')}}" type="button" class="btn btn-danger btn-block btn-delete-yes">Yes</a>
	      				</div>
	      				<div class="col-xs-6">
	      					<button type="button" class="btn btn-default btn-block btn-delete-no" data-dismiss="modal">No</button>
	      				</div>
	      			</div>
	      		</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
@stop

@section('scripts')
<script type="text/javascript" src="{{url('/js/datatables/datatables.min.js')}}"></script>
<script>
	$(document).ready(function()
    {
    	$('.events').DataTable({
    		// Display 25 rows by default
    		"pageLength": 25,
    		// Disable initial sorting
    		"aaSorting": []
        });
    	$('.delete-event').on('click', function()
    	{
    		var event_id = $(this).data('event_id');
    		$('.btn-delete-yes').attr('href',"{{url('/admin/delete-event')}}/"+event_id);
    		$('#delete-modal').modal('show');
    	});
    });
</script>
@stop
