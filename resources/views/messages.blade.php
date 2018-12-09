@extends('layouts.app')

@section('content')
	<h1>Messages</h1>
	@if(count(session('messages') > 0))
		@foreach($messages as $message)
			<ul class="list-group">
				<li class="list-group-item">Name: {{$message->name}}</li>
				<li class="list-group-item">Email: {{$message->email}}</li>
				<li class="list-group-item">Message: {{$message->message}}</li>
			</ul>
		@endforeach
	@endif
	
@endsection

@section('sidebar')
	<div class="well">
		<P>This is appended to the side bar</P>
	</div>
	
@endsection