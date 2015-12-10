@extends('layout')

@section('title')
	<title>List of Articles</title>
@stop

@section('content')
	<h1>List of all Articles</h1>

	<hr>

	<a href="{{ url('article/create') }}">Create an Article <span class = "glyphicon glyphicon-circle-arrow-right"></span></a>
	{!! Form::open() !!}
	
	{!! Form::close() !!}

	<article>
		@foreach($articles as $value)
			<h2>
				<a href="{{ url('article', [$value->id]) }}">{{ $value->title }}</a> 
			</h2>
			<span>{{ $value->body }}</span>
			<br/>
			&nbsp;&nbsp;&nbsp;&nbsp;<span class = "text-muted">Published at {{ $value->published_at }}</span>
		@endforeach
	</article>
@stop


