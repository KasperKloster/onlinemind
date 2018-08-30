@extends('layouts.landingpage')

@section('meta')
  <title>OnlineMind | Webudvikling - Ny side med Laravel?</title>
  <meta name="description" content="Webudvikling primært i Laravel og WordPress. Jeg skriver ren kode, med Google, Bruger, Sikkerhed & Hastighed i tankerne. PHP, JavaScript, HTML/CSS mm.">
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
                  <h1>Webudvikling</h1>
                  <p class="lead pt-3">
                  Står du og skal bruge en hjemmeside? Skal du have opdateret din gamle? Eller mangler du en nørd, der kan varetage din nuværende?
                  <br/>Jeg er din hjælp.
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
        <h3>Fordele ved Laravel</h3>
        <p>
        Når jeg koder en side fra bunden, er mit fortrukne system Laravel.<br/>
        Laravel er et forholdsvist nyt PHP MVC framework.<br/> Et framework er skelet, så man kan få sin side op at køre hurtigere end hvis du skriver koden helt fra bunden. Hertil er meget af sikkerheden allerede taget hånd om.<br/>
        Med en side der er kodet vha. et MVC, har du kontrol over alt og kan lave en løsning, der passer præcist til ens behov.<br/>
        Jeg går højt op op i struktureret og sikker kode<br/>
        Derudover har Laravel et stort og hjælpsomt community.<br/>
        <i>Denne side er lavet med Laravel</i>
        <p>

        <!-- Section Divider -->
        <section class="d-flex justify-content-center row divider-section">
          <h4 class="text-center">Hvad jeg arbejder mest med</h4>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="https://da.wikipedia.org/wiki/HTML5" rel="nofollow" target=_blank><i class="fab fa-html5 fa-3x"></i></a></li>
            <li class="list-inline-item"><a href="https://en.wikipedia.org/wiki/Cascading_Style_Sheets" rel="nofollow" target="_blank"><i class="fab fa-css3-alt fa-3x"></i></a></li>
            <li class="list-inline-item"><a href="https://sass-lang.com" rel="nofollow" target="_blank"><i class="fab fa-sass fa-3x"></i></a></li>
            <li class="list-inline-item"><a href="https://getbootstrap.com" rel="nofollow" target="_blank"><i class="fas fa-bold fa-3x"></i></a></li>
            <li class="list-inline-item"><a href="https://laravel.com" rel="nofollow" target="_blank"><i class="fab fa-laravel fa-3x"></i></a></li>
            <li class="list-inline-item"><a href="https://www.javascript.com" rel="nofollow" target="_blank"><i class="fab fa-js-square fa-3x"></i></a></li>
            <li class="list-inline-item"><a href="http://github.com/kasperkloster" target="_blank"><i class="fab fa-github fa-3x"></i></a></li>
          </ul>    
        </section>

        <h3>"Men knappen skal være til højre?"</h3>
        <p>
        Hvis du mangler noget fast support eller har nogle smårettelser til din nuværende side, som at tilføje en ny underside, skift farven på en knap, tilføje en kontaktformular.<br/>
        <strong>Så hjælper jeg dig</strong> Hvis du har interesse i det, så viser jeg dig også gerne hvordan, så du selv kan gøre det i fremtiden.
        </p>
        <h4>Hvad koster det?</h4>
        <p>
        Prisen på en ny side, er helt forskellig fra kunde til kunde.
        Det er helt forskellig fra opgave til opgave<br/>
        <a href="{{ route('kontakt') }}">Kontakt mig</a>, så vender jeg tilbage til dig, sammen kan vi tage en snak og finde en løsning, der passer til præcist til dine behov og ønsker.
        </p>

      @endsection

      @section('landing-sidebar-headline')
      <!-- Sidebar Headline -->
        <h4>Ny side?</h4>
        <p>Kontakt mig her og jeg vender tilbage til dig</p>
      @endsection

      @section('contact-form-type')
      {{-- Hidden Field / Sends were mail is sent from --}}
        <input type="hidden" name="contactFormType" value="webudvikling">
      @endsection