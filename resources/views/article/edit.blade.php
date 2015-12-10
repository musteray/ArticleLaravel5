@extends('layout')

@section('title')
	<title>Edit Article</title>
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
		font-size: 17px;
	}

</style>
@stop

@section('content')
	<h1>Edit Article <span style = "color:red;">{!! $article->title !!}</span></h1>
	<hr>
	<a href="{{ url('article') }}"><span class = "glyphicon glyphicon-circle-arrow-left"></span> Back to Article List</a>
	<br/><br/>
	@include('errors.ArticleError')

	{!! Form::model($article, ['url'=> 'article/'.$article->id, 'method' => "PUT"] ) !!}
		@include('article.form', ['btnText' => 'Update Article'])
	{!! Form::close() !!}
	
@stop