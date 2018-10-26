@extends('layouts.landingpage')

@section('meta')
  <title>OnlineMind | Magento Udvikling - Mangler du en Magento Nørd?</title>
  <meta name="description" content="Få udviklet din side med Magento. Jeg skriver ren kode, med Google, Bruger, Sikkerhed & Hastighed i tankerne.">
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
                  <h1>Magento Nørd</h1>
                  <p class="lead pt-3">
                  Et stort og brugervenligt system, hvor du har overblik over hele dit varekatalog.
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
        <h2>Udvikling med Magento</h2>
        <p>
        Magento er udviklet specielt til brug af webshops. Du kommer til at have et komplet overblik over dit sortiment, hvor du kan nemt ændre i dit varekatalog.<br/>
        </p>
        <h3>Løbende Support</h3>
        <p>
        Skal du ikke have en helt ny side, men står du og mangler en der kan tage diverse opgaver, så står jeg også klar til hjælp.
        </p>
        <h4>Mangler du en anden type side?</h4>
        <p>Så anbefaler jeg <a href="{{ route('laravel_udvikling') }}">Laravel</a></p>
        <p>
      @endsection

      @section('landing-sidebar-headline')
      <!-- Sidebar Headline -->
        <h4>Ny side?</h4>
        <p>Kontakt mig her og jeg vender tilbage til dig</p>
      @endsection

      @section('contact-form-type')
      {{-- Hidden Field / Sends were mail is sent from --}}
        <input type="hidden" name="contactFormType" value="magento">
      @endsection