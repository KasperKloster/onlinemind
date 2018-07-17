@extends('layouts.landingpage')

@section('meta')
  <title>OnlineMind | Tekstforfatning - Tekster Til Din Side Her</title>
  <meta name="description" content="Lad mig skrive dine tekster til din side. Tekster optimeret til dine brugere og SEO venlige. Prisen på tekster, er forskelligt fra opgave til opgave.">
  <meta name="robots" content="index, follow">
@endsection

    @section('land_header')
    <!-- Header -->
      <header>
        <div class="jumbotron jumbotron-fluid jumbotron-header">
          <div class="container">
            <div class="row">
              <div class="d-flex justify-content-center">
                <div class="col-md-8 col-md-offset-4 text-center">
                  <h1>Tekstforfatning</h1>
                  <p class="lead pt-3">
                    Tekster er uden tvivl vigtigt for enhver side. Men det kan være en længere og tidskrævende opgave at skulle igennem.<br/>
                    Jeg kan spare dig tiden og skrive dem for dig.
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
        <h3>Tekster på din side</h3>
        <p>
        Først og fremmest skriver jeg dine tekster med dine brugere som første priotet.<br/>
        De skal have de oplysninger, som de leder efter, så de ikke klikker tilbage til Google.<br/>
        Dernæst har jeg også Google og SEO i tankerne, så du samtidig får skabt mest synlighed på Google.<br/>
        Alle tekster bliver selvfølgelig skrevet fra bunden og er helt unikke.
        </p>
        <h4>Hvad koster tekster?</h4>
        <p>
        Prisen på tekster, er forskelligt fra opgave til opgave. Nogle gange er det undersider, andre er oversættelse, andre kræver længere analyse.
        <a href="{{ route('kontakt') }}">Kontakt mig</a>, skriv evt. par ord om hvad du har brug for, så vender jeg tilbage til dig.
        </p>
      @endsection

      @section('landing-sidebar-headline')
      <!-- Sidebar Headline -->
        <h4>Mangler du Tekster?</h4>
        <p>Kontakt mig her og jeg vender tilbage til dig</p>
        <p>Prisen afhænger af hvad du skal have lavet</p>
      @endsection

      @section('contact-form-type')
      {{-- Hidden Field / Sends were mail is sent from --}}
        <input type="hidden" name="contactFormType" value="tekstforfatning">
      @endsection