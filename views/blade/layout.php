<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>{{$title}}</title>
	<link rel="stylesheet" type="text/css" href="{{asset('bundles/scaffold/css/foundation.css')}}">
	
	<style>
		body { margin: 40px; }
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="twelve columns">
				<h1>{{$title}}</h1>
				<hr>

				@if (Session::has('message'))
					<div class="alert-box success">
						<p>{{Session::get('message')}}</p>
					</div>
				@endif

				@if($errors->has())
					<div class="alert-box alert">
						@foreach($errors->all('<p>:message</p>') as $error)
							{{$error}}
						@endforeach
					</div>
				@endif
			</div>
			<div class="twelve columns">
				{{$content}}
			</div>
		</div>
	</div>
</body>
<footer>
	<script type="text/css" href="{{asset('bundles/scaffold/js/jquery.min.js')}}"></script>
	<script type="text/css" href="{{asset('bundles/scaffold/js/foundation.min.js')}}"></script>
</footer>
</html>

