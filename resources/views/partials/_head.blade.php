<!doctype html>
<html lang="da">
	<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" async>

	<!-- Styles -->
	<link rel="stylesheet" href="{{ asset('css/style.css') }}" async>

	<!-- Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700|Work+Sans:400,700" async>

	<!-- Icons -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous" async>

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
	
	<script type="application/ld+json">
	{
	"@context": "http://schema.org",
	"@type": "Corporation",
		"email": "kasper(at)onlinemind.dk",
		"telephone": "+4531777940",
		"name": "OnlineMind",
		"description": "Webudvikling, SEO, Grafisk Design og alt andet indenfor internettet. Jeg er din hjælpende hånd og mere til.",
		"VatID": "35109455",
		"TaxID": "35109455",
		"url": "https://onlinemind.dk",
		"logo": "{{ asset ('img/onlinemind-font-logo.jpg') }}",

	   "address": {
    		"@type": "PostalAddress",
    		"addressLocality": "Copenhagen",
    		"postalCode": "2300",
    		"streetAddress": "Korsikavej 4, 1th.",
    		"addressCountry" : "Denmark"
  		},

  		"contactPoint" : {
			"@type": "ContactPoint",
			"telephone": "+4531777940",
			"contactType": "customer service",
			"availableLanguage": "Danish, English"
  		},

		"founder": {
			"@type": "Person",
			"name": "Kasper Kloster",
			"email": "kasper(at)onlinemind.dk",
			"telephone": "31777940",
			"sameAs": [
				"https://kasperkloster.dk",
				"http://github.com/kasperkloster",
				"https://dk.linkedin.com/in/kasperkloster",
				"https://www.behance.net/KasperKloster",
				"https://www.instagram.com/kasperkloster/",
				"https://twitter.com/kasperkloster"
			]
		}
	}
	
	</script>
	</head>

	<body>