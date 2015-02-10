@extends('master.templates.master', array('var1'=>'', 'var2'=>''))
@section('body')

<h1>Page Not Found</h1>
<p>The page you are looking for ({{Request::url()}}) isn't here. We apologize for this inconvenience.</p>
<p>If you think you are receiving this page in error, please email <a href="mailto:fourgreenfieldsman@yahoo.com">fourgreenfieldsman@yahoo.com</a> about the issue.</p>

@stop