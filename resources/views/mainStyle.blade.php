<!DOCTYPE html>

{{--
	This is the main styling for the entire site.
	It supposd to have the header and the footer

	This is your area, make it as you like. your choice :)
--}}

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	@yield ('title')

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Tajawal&display=swap" rel="stylesheet">

	<!-- Styles -->
	<style>
		html, body {
			background-color: #fff;
			font-family: 'Tajawal', sans-serif;
			margin: 0;
		}
	</style>

	@yield('head')
</head>

<body>

{{-- Header --}}
{{--
	The header must have these tabs:
		1- SPP logo, goes to the home page (/)
		2- About Us, goes to the aboutUs page (/aboutUs)
		3- Archive, goes to the archive page (/archive)
		4- GPA calculator, goes to the calculator (/GPAcalc)
		5- (optional, if it doesn't look good don't do it) All the social media accounnts
	I would like some shrink when you scroll down, like https://ftcksu.com
--}}

@yield('body')

{{-- Footer --}}
{{--
	The footer must have these information:
	1- some backgrond color, I prefer a dark color for the footer but it's your choice
	2- copy rights, something like: Made by: Asim Alamri @TwitterAccount, Abdulaziz bin aqeel @x, mohammed alsaudoon @x, etc
--}}

</body>
</html>
