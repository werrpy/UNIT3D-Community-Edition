<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name') }}</title>

	<!-- Styles -->
	<link href="{{ mix('css/auth.css') }}" rel="stylesheet">
</head>
<body class="text-gray-800 antialiased">
	<main id="app">
		@yield('content')
	</main>
	<script src="{{ mix('js/app.js') }}" crossorigin="anonymous"></script>
	@foreach (['warning', 'success', 'info'] as $key)
		@if (Session::has($key))
			<script nonce="{{ Bepsvpt\SecureHeaders\SecureHeaders::nonce('script') }}">
              const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
              });

              Toast.fire({
                icon: '{{ $key }}',
                title: '{{ Session::get($key) }}'
              })

			</script>
		@endif
	@endforeach

	@if (Session::has('errors'))
		<script nonce="{{ Bepsvpt\SecureHeaders\SecureHeaders::nonce('script') }}">
          Swal.fire({
            title: '<strong style=" color: rgb(17,17,17);">Error</strong>',
            icon: 'error',
            html: jQuery("#ERROR_COPY").html(),
            showCloseButton: true,
          })

		</script>
	@endif
</body>
</html>