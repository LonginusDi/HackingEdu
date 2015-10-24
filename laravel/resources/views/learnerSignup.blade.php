@extends('layout')

@section('title')
	<title>Sign Up</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
@stop

@section('content')
<div class="container">
	<h1>Sign Up</h1>

	@foreach($errors->all() as $error)
		<p class="text-danger"> {{ $error }} </p>
	@endforeach
		
	@if (Session::has('success'))
		<p class="text-success"> {{ Session::get('success') }}</p>
	@endif

	<form method="post">
		<input type="hidden" name="_token" value="{{csrf_token()}}">

		<div class="form-group">
			<label for="username">Username</label>
			<input type="text" id="username" name="username" class="form-control" value="{{Request::old('username')}}">
		</div>
		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" id="email" name="email" class="form-control" value="{{Request::old('email')}}">
		</div>

		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" id="password" name="password" class="form-control">
		</div>

		<div class="form-group">
			<label for="password_confirmation">Confirm Password</label>
			<input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
		</div>
<!-- 
		<div class="form-group">
			<label for="city_id">City: </label>
			<select name="city_id" class="form-control">
				@foreach($cities as $city)
					@if ($city->city_id == Request::old('city_id'))
						<option value="{{$city->id}}" selected>
							{{$city->city_name}}
						</option>
					@else
						<option value="{{$city->id}}">
							{{$city->city_name}}
						</option>
					@endif
				@endforeach
			</select>
		</div> -->

		<div class="form-group">
			<label for="amount">Amount:</label>
			<input type="number" name="amount" class="form-control" value="{{Request::old('amount')}}">
		</div>

		<input type="submit" value="Sign Up" class="btn btn-primary">

	</form>
</div>
@stop