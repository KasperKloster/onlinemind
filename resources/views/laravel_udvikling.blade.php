@extends('layouts.landingpage')

@section('meta')
  <title>OnlineMind | Laravel Udvikling - Brug for en Laravel Nørd?</title>
  <meta name="description" content="Få udviklet din side med Laravel. Jeg skriver ren kode, med Google, Bruger, Sikkerhed & Hastighed i tankerne. PHP, JavaScript, HTML/CSS mm.">
  <meta name="robots" content="index, follow">
@endsection

    @section('land_header')
      <!-- Header -->
      <header>
        <div class="jumbotron jumbotron-fluid jumbotron-header">
          <div class="container">
            <div class="row">
              <div class="d-flex justify-content-center">
                <div class="col-md-8 text-center">
                  <h1>Laravel Nørd</h1>
                  <p class="lead pt-3">
                  Få en skræddersyet løsning der passer perfekt ind til dine krav og behov.
                  </p>
                </div>
              </div>
            </div> <!-- ./ row -->
          </div> <!-- /.container -->
        </div> <!-- /.jumbotron -->
      </header>
    @endsection

      @section('land_content')
      <!-- Landing Content -->
        <h2>Udvikling med Laravel</h2>
        <p>
        Når jeg koder en side fra bunden, er mit fortrukne system Laravel.<br/>
        Laravel er et forholdsvist nyt PHP MVC framework.<br/> Et framework er skelet, så man kan få sin side op at køre hurtigere end hvis du skriver koden helt fra bunden. Hertil er meget af sikkerheden allerede taget hånd om.<br/>
        Med en side der er kodet vha. et MVC, har du kontrol over alt og kan lave en løsning, der passer præcist til ens behov.<br/>
        Jeg går højt op op i struktureret og sikker kode<br/>
        Derudover har Laravel et stort og hjælpsomt community.<br/>
        <i>Denne side er lavet med Laravel</i>
        <h4>Skal du have en webshop op at køre?</h4>
        <p>Så anbefaler jeg <a href="{{ route('magento_udvikling') }}">Magento</a></p>
        <p>
      @endsection

      @section('landing-sidebar-headline')
      <!-- Sidebar Headline -->
        <h4>Ny side?</h4>
        <p>Kontakt mig her og jeg vender tilbage til dig</p>
      @endsection

      @section('contact-form-type')
      {{-- Hidden Field / Sends were mail is sent from --}}
        <input type="hidden" name="contactFormType" value="laravel">
      @endsection