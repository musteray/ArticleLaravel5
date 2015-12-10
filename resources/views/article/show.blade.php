@extends('layout')

@section('title')
	<title>Artilce {{ $article->title }}</title>
@stop

@section('content')
	
	<a href="{{ url('article') }}"><span class = "glyphicon glyphicon-circle-arrow-left"></span> Back to Article List</a>

	<h1>{{ $article->title }}</h1>

	<blockquote>
		<p>
			{{ $article->body }}
		</p>

		@unless ($article->tags->isEmpty())
		<h5>Tags:</h5>
		<ul>
			@foreach($article->tags as $tag)
				<li>{{ $tag->name }}</li>
			@endforeach
		</ul>
		@endunless
		<footer>
			Published by {{ $article->user->firstName }} {{ $article->user->lastName }} at {{ $article->published_at }}
		</footer>
	</blockquote>
 
@stop