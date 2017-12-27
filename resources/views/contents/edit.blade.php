<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
 
    <title>{{ config('app.name', 'Laravel') }}</title>
 
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
	<div class="container">
		<div class="panel panel-default">
			<div class="panel-heading">
				Edit Article 
			</div>
			<div class="panel-body">
				{!! Form::open(['url' => 'updateArticle']) !!}
				{!! Form::hidden('id', $data->id) !!}
				<div class="form-group"> 
					{!! Form::text('title', $data->title, ['placeholder' => 'Title', 'class' => 'form-control']) !!}
				</div>
				<div class="form-group"> 
					{!! Form::text('excerpt', $data->excerpt, ['placeholder' => 'Excerpt', 'class' => 'form-control']) !!}
				</div>
				<div class="form-group"> 
					{!! Form::textarea('content', $data->content, ['placeholder' => 'Content', 'class' => 'form-control']) !!}
				</div>
				<div class="form-group">
					{!! Form::Submit('Update', ['class' => 'btn btn-primary']) !!}
				</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>