		<!-- Temporary -->
		
		{!! Form::hidden('user_id', 1) !!} 
		<div class="form-group">
			{!! Form::label('title', 'Title:') !!}
			{!! Form::text('title', null, ["class" => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('body', 'Body:') !!}
			{!! Form::textarea('body', null, ["class" => 'form-control']) !!}
		</div>

		<div class ="form-group">
		<!-- Not working in here the tagList in Article Model -->
			{!! Form::label('tagList', "Tag:")!!}
			{!! Form::select('tagList[]', $tag, null, ["class" => 'form-control', 'multiple']) !!}
		</div>

		<div class = "form-group">
			{!! Form::label('published_at', 'Published On:') !!}
			{!! Form::input('date', 'published_at', date('Y-m-d') ,["class" => 'form-control']) !!}
		</div>

		<div>
			{!! Form::submit($btnText, ["class" => 'btn btn-primary form-control']) !!}
		</div>