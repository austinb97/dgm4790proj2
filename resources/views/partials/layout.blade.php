<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('partials.head')
<body class="is-loading">

	@yield('headerNav')

	@yield('Main')


	@include('partials.footer')
</body>
</html>