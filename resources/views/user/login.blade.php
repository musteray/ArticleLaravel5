@extends('layout')

@section('title')
	<title>Login Page</title>
@stop

@section('css')
	<style type="text/css">
		
		li 
		{
			list-style-type: none;
		}
	</style>
@stop

@section('content')
	<div class = "row">
			<div class = "col-md-12">
				<div class = "col-md-4"></div>
				<div class = "col-md-4" style="margin-top: 100px;">
					<div class = "panel panel-default">
						<div class = "panel-heading">
							<span class = "text text-muted" style = "font-size: 16px;">Please Sign In</span>
						</div>
						
						<div class = "panel-body">
							@include('errors.ArticleError')
							{!! Form::open(['url' => 'authenticate']) !!}
							  	<div class="input-group">
								  <span class="input-group-addon"><span class = "glyphicon glyphicon-user"></span></span>
								  <input type="text" class="form-control" placeholder="Username" name = "username">
								</div>
								<div class="input-group" style="margin-top:2px;">
								  <span class="input-group-addon"><span class = "glyphicon glyphicon-lock"></span></span>
								  <input type="password" class="form-control" placeholder="Password" name = "password">
								</div>
								<button type = "submit" class = "btn btn-primary" style="margin-top:8px;">Login</button>
							{!! Form::close() !!}	
					  </div>
					</div>
				</div>
			</div>
		</div>
@stop