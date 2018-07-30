@extends('layouts.main')

@section('meta')
  <title>OnlineMind | 404 - Siden er væk...</title>
  <meta name="description" content="">
  <meta name="robots" content="Noindex, Nofollow">
@endsection

@section('content')

	<div class="container pt-5" style="height: 100vh!important;">
		<div class="row d-flex justify-content-center">
			<div class="col-md-12 text-center">
				<h1>404</h1>
				<h2>Siden kunne ikke findes</h2>
				<p>Den er åbenbart forsvundet...</p>
				<b><a href="{{ route('front') }}">Kom til forsiden her</a></b>
			</div>
		</div>
	</div>

@endsection