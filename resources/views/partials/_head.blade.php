<!doctype html>
<html lang="da">
	<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- Styles -->
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700%7CWork+Sans:400,700" rel="stylesheet">

	<!-- Icons -->
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>
	
	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset ('img/favicon/apple-touch-icon.png') }}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset ('img/favicon/favicon-32x32.png') }}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset ('img/favicon/favicon-16x16.png') }}">
	<link rel="manifest" href="{{ asset ('img/favicon/site.webmanifest') }}">
	<link rel="mask-icon" href="{{ asset ('img/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">

	@yield('meta')

	@include('partials._ga')
	<meta name="google-site-verification" content="yLz0uj4w3eFpXGHOU5ijSVSk1s4bPMmBR9x1ym13lVU" />
	</head>

	<body>