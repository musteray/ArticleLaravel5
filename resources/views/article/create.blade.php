@extends('layout')

@section('title')
	<title>Create Article</title>
@stop

@section('css')
<style type="text/css">
	form 
	{
		margin-top: 20px;
	}

	ul 
	{
		list-style: none;
	}

	ul li 
	{
		font-size: 15px;
	}

</style>
@stop

@section('content')
	<h1>Write a New Article</h1>
	<hr>
	<a href="{{ url('article') }}"><span class = "glyphicon glyphicon-circle-arrow-left"></span> Back to Article List</a>
	<br/><br/>
	
	@include('errors.ArticleError')

	{!! Form::open(['url'=> 'article']) !!}
		@include('article.form', ['btnText' => 'Add Article'])
	{!! Form::close() !!}
@stop