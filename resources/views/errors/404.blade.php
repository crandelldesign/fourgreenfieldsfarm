@extends('layouts.default')

@section('content')
<h1>Page Not Found</h1>
<p>Sorry, the page you are looking for ({{Request::url()}}) can't be found.</p>
<p>If you think you are receiving this page in error, please email <a href="mailto:fourgreenfieldsman@yahoo.com">fourgreenfieldsman@yahoo.com</a> about the issue.</p>

@stop
