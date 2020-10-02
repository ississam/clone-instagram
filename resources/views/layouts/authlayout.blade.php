<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	{{-- Title --}}
	<title>{{ config('app.name', 'InstaClone') }}</title>

	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}" defer></script>

	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
</head>

<body>
	<div class="container">

		<div class="row d-flex justify-content-center">
			{{-- <div class="login100-more col-md-5" style="background-image: url('{{ asset('img/bg-02.jpg') }}');"> --}}

			{{-- </div > --}}

			<div class="col-md-5">


				@yield('form')

			</div>
		</div>
	</div>
	</div>
</body>

</html>
{{-- <form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
@csrf
<span class="login100-form-title p-b-34">
	Account Login
</span>

<div class="wrap-input100 validate-input m-b-20" data-validate="Type user name">
	<input id="email" class="input100 @error('email') alert-validate @enderror" type="email" name="email"
		placeholder="Email">
	<span class="focus-input100"></span>

	@error('email')
	<span class="invalid-feedback" role="alert">
		<strong>{{ $message }}</strong>
	</span>
	@enderror
</div>


<div class="wrap-input100 validate-input m-b-20" data-validate="Type password">
	<input id="password" class="input100 @error('password') alert-validate @enderror" type="password" name="password"
		placeholder="Password">
	<span class="focus-input100"></span>

	@error('password')
	<span class="invalid-feedback" role="alert">
		<strong>{{ $message }}</strong>
	</span>
	@enderror
</div>

<div class="container-login100-form-btn">
	<button type="submit" class="login100-form-btn">
		Sign in
	</button>
</div>

<div class="w-full text-center p-t-27 p-b-239">
	@if (Route::has('password.request'))
	<span class="txt1">
		Forgot
	</span>

	<a href="{{ route('password.request') }}" class="txt2">
		User name / password?
	</a>
	@endif
</div>

<div class="w-full text-center">
	<a href="{{ route('register') }}">
		Sign Up
	</a>
</div>
</form> --}}
