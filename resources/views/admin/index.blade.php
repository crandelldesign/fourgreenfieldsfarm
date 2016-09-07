@extends('layouts.admin')
@section('content-header')
	<h1>Welcome {{\Auth::user()->name}}</h1>
@stop
@section('content')
	<div class="box">
        <div class="box-body">

        	@if (session('success'))
			    <div class="alert alert-success alert-dismissible fade in">
			    	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <ul>
			            <li>{{session('success')}}</li>
			        </ul>
			    </div>
			@endif

			@if (session('message'))
			    <div class="alert alert-info">
			    	<h4><i class="fa fa-thumbs-up"></i> Message</h4>
			        {{ session('message') }}
			    </div>
			    <hr>
			@endif

			<p>Select an option below to begin.</p>
			<p><a class="btn btn-default btn-lg" href="{{url('/admin/events/add')}}">Add an Event</a></p>
            <p><a class="btn btn-default btn-lg" href="{{url('/admin/events')}}">Edit Events</a></p>
		</div>
	</div>
@stop