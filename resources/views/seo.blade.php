@extends('layouts.landingpage')

@section('meta')
  <title>OnlineMind | SEO </title>
  <meta name="description" content="">
  <meta name="robots" content="index, follow">
@endsection

    <!-- Header -->
    @section('land_header')
      <header>
        <div class="jumbotron jumbotron-fluid jumbotron-header">
          <div class="container">
            <div class="row">
              <div class="d-flex justify-content-center">
                <div class="col-md-8 text-center">
                  <h1>SEO</h1>
                  <p class="lead pt-3">
                  Med SEO (<i>Search Engine Optimization</i>) er din mulighed for at komme op på Googles søgeresultatet, blive mere synlig og skabe mere trafik til din side.
                  </p>
                </div>
              </div>
            </div> <!-- ./ row -->
          </div> <!-- /.container -->
        </div> <!-- /.jumbotron -->
      </header>
    @endsection

      <!-- Landing Content -->
      @section('land_content')
    		<h3>Vær synlig på Google</h3>
    		<p>
        Jeg analyserer først din side og rette alle evt. tekniske fejl og mangler, der måtte være.<br/>
        Så ved jeg at Google vil tage din side seriøst og de har nemt ved at gennemgå den (crawle)<br/>
        Dernæst analyserer jeg dine brugers søgninger, igennem her finder jeg og udvælger de ord, der giver mest mening for din side.<br/> På <i>SEO'sk</i> bliver de ord kaldt for keywords.<br/> 
        Udfra dine keywords skriver jeg dine sidetitler (page titles) med så høj klik værdi, som muligt.<br/>
        De udvalgte keywords er dem jeg tracker - Det er de ord jeg vil have til at stige i placeringer.<br/> Her vurderer jeg om der skal nye tekster på.<br/> Alt tekst er fuldstændigt unikt.<br/>
        I de fleste tilfælde vil dette være det første skridt i en SEO aftale.
        <br/>
        Jeg følger Google retningsregler og gør alt i deres ånd.
        </p>
        <h3>Linkbuilding</h3>
    		<p>
        Skal din side virkelig have et boost, så kommer du ikke udenom linkbuilding.<br/>
        Jeg gør brug af flere forskellige linkbuilding strategier, metoder samt et voksende netværk, så jeg kan sørge for gode, stærke og relevante links til din side.
        </p>
        <h3>Analyse</h3>
    		<p>
        Igennem analyse kan man finde svar på mange af ens spørgsmål, få mest ud sine brugere og sin SEO.<br/> 
        Uden analyse kan man ikke vide om det går fremaf eller tilbage med ens side og forretning<br/>
        Der findes et hav af forskellige analyse værktøjer.<br/> Når jeg analyserer din side bruger jeg Google analytic og Google search console. Dine links bruger jeg aHrefs.<br/> De tre er mine primære værktøjer til analyse.
        </p>
        <h4>Hvad koster SEO?</h4>
        <p>
        Prisen på en SEO aftale, kan jeg ikke komme med et konkret svar på.<br/>
        Det er helt forskellig fra opgave til opgave<br/>
        <a href="{{ route('kontakt') }}">Kontakt mig</a>, så vender jeg tilbage til dig, sammen finder vi en løsning, der passer til din opgave.
        </p>
      @endsection

      <!-- Sidebar Headline -->
      @section('landing-sidebar-headline')
        <h4>SEO på din side?</h4>
        <p>Kontakt mig her og jeg vender tilbage til dig</p>
      @endsection

      @section('contact-form-type')
      {{-- Hidden Field / Sends were mail is sent from --}}
        <input type="hidden" name="contactFormType" value="seo">
      @endsection