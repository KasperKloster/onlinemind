@extends('layouts.landingpage')

@section('meta')
  <title>OnlineMind | Grafisk Design</title>
  <meta name="description" content="">
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
                  <h1>Grafisk Design</h1>
                  <p class="lead pt-3">
                  Om du skal bruge et helt nyt webdesign, ændret farven på dit logo, mangler noget grafik til f.eks facebook ads, banner eller lignende. Så hjælper jeg dig.
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
        <h3>Dit visuelle udtryk</h3>
        <p>
        Jeg kan gå udfra det udtryk, som du i forvejen har, så der kommer en rød tråd igennem dit brand.<br/> Jeg kan også hjælpe dig med at skabe et helt nyt.<br/> Igennem farveteori, målgruppe analyse, dine ønsker og budskab, finder jeg skitsen på et design.
        <h3>"Men jeg har ikke Photoshop?"</h3>
        Det kan også være at du ikke har brug for et decideret design, men skal have hjælp til at fritlægge en bunke billeder, få dem i en anden størrelse eller skal have manipuleret et foto eller noget helt andet.<br/>
        <strong>Jeg hjælper dig gerne.</strong>
        </p>

        <!-- Section Divider -->
        <section class="d-flex justify-content-center row divider-section">
          <h4 class="text-center">Et par af mine værktøjer</h4>
          <ul class="list-inline">
            <li class="list-inline-item"><img src="{{ asset('img/ikoner/illustrator_logo.png') }}" class="img-fluid" alt="Adobe Illustrator Logo" /></li>
            <li class="list-inline-item"><img src="{{ asset('img/ikoner/photoshop_logo.png') }}" class="img-fluid" alt="Adobe Photoshop Logo" /></li>
            <li class="list-inline-item"><img src="{{ asset('img/ikoner/sketch_logo.png') }}" class="img-fluid" alt="Adobe IllustratorLogo" /></li>
          </ul>    
        </section>

        <h4>Hvad er prisen på Design?</h4>
        <p>
        Det afhænger helt af hvad du har brug for<br/>
        <a href="{{ route('kontakt') }}">Kontakt mig</a>, så vender jeg tilbage til dig.
        </p>

      @endsection

      
      @section('landing-sidebar-headline')
      <!-- Sidebar Headline -->
        <h4>Skal du bruge Grafisk Design?</h4>
        <p>Kontakt mig her og jeg vender tilbage til dig</p>
      @endsection

      @section('contact-form-type')
      {{-- Hidden Field / Sends were mail is sent from --}}
        <input type="hidden" name="contactFormType" value="grafisk-design">
      @endsection