@extends('admin.templates.master', array('var1'=>'', 'var2'=>''))
@section('body')
<h1>Admin Access</h1>

@if(isset($event))
<div class="alert alert-success alert-dismissible fade in" role="alert">
	<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
	The event, {{$event->name}}, on {{date("m/d/Y", strtotime($event->starts_at))}} was successfully {{$event_action_type=='add'?'added':''}}{{$event_action_type=='update'?'updated':''}}.
</div>
@endif
@if(Session::has('password_changed'))
<div class="alert alert-success alert-dismissible fade in" role="alert">
	<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
	Password changed successfully.
</div>
@endif

<p>Welcome, {{Auth::user()->first_name}} {{Auth::user()->last_name}}. Here you can add, edit, or delete events.</p>

<ul>
	<li><a href="{{url('/')}}/events/admin/add-event">Add Event</a></li>
	<li><a href="{{url('/')}}/events/admin/all-events">Edit Events</a></li>
	<li><a href="{{url('/')}}/events/admin/change-password">Change Your Password</a></li>
    <li><a href="{{url('/')}}/events/admin/logout">Logout</a></li>
</ul>

@stop

@section('footercode')
@stop