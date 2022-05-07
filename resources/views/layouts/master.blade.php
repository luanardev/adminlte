
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
		<meta charset="UTF-8">
		<title>{{ config('app.name') }}</title>
		<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
			  integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
			  crossorigin="anonymous"/>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

		<link href="{{ asset('css/app.css') }}" rel="stylesheet">

        @yield('global_css')

		@livewireStyles

        @yield('css')

	</head>
    <body class="@yield('body-class')">

		@hasSection('body')
			@yield('body')
		@else
			{{ $slot }}
		@endif	

        @yield('global_js')

		<script src="{{ asset('js/app.js') }}" defer></script>

		@livewireScripts

		@yield('components')

        @yield('js')

    </body>
</html>

