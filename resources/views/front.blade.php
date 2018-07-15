@extends('layouts.main')

@section('meta')
  <title>OnlineMind | Få Fat I en Nørd </title>
  <meta name="description" content="Mangler du en Nørd? Jeg kan hjælpe dig med SEO, udvikling, Grafisk Design, Hosting og en alt andet indenfor internettet. Få en Løsning - Kontakt mig!">
  <meta name="robots" content="index, follow">
@endsection

@section('content')
      
      <!-- Jumbotron / Header -->
      <header>
        <div class="jumbotron jumbotron-fluid jumbotron-header jumbotron-header-front">
          <div class="container">
            <div class="row">
              
              <div class="col-md-6">
                <h1>Mangler du en nørd?</h1>
                <p class="lead pt-3">
                  Lad mig være din hjælpende hånd.<br/>
                  Har du brug ekstra for hjælp i en kort eller længerevarende periode?<br/><br/>
                  Jeg står til rådighed, hvis du skal løse en konkret opgave eller brug for support.
                </p>
                <a href="{{ route('kontakt') }}" class="btn btn-large btn-cta">Kontakt Mig</a>
              </div>

              <div class="col-md-6 d-flex justify-content-center">
                <img src="{{ asset ('img/desktop.png') }}" class="img-fluid" alt="Desktop - OnlineMind" />
              </div>
              
            </div> <!-- ./ row -->
          </div> <!-- /.container -->
        </div> <!-- /.jumbotron -->
      </header>

      <!-- Section Divider -->
      <section class="divider-section d-none d-md-block">
        <div class="container">
          <div class="row text-center">
            
            <div class="col-md-3">
              <a href="#front-seo">
                <div class="divider-section-icon">
                  <i class="far fa-chart-bar fa-2x"></i>
                </div>
              </a>
            </div>
            
            <div class="col-md-3">
              <a href="#front-webudvikling">
                <div class="divider-section-icon">
                  <i class="fas fa-code fa-2x"></i>
                </div>
              </a>
            </div>
            
            <div class="col-md-3">
              <a href="#front-tekstforfatning">
                <div class="divider-section-icon">
                  <i class="fas fa-pencil-alt fa-2x"></i>
                </div>
              </a>
            </div>
            
            <div class="col-md-3">
              <a href="#front-grafisk">
                <div class="divider-section-icon">
                  <i class="fas fa-leaf fa-2x"></i>
                </div>
              </a>
            </div>

          </div>
        </div>
      </section>

      <!-- Main Content -->
      <main>
        <section class="white-section">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-8 col-md-offset-4">
                <h2 class="text-center">Hvem er vi? <small>Vi er Jeg</small></h2>
                <p>
                Du kan ansætte mig, hvis du har brug for hjælp i en kort eller længerevarende periode.<br/>
                Min stærke kompetencer ligger i <a href="{{ route('seo') }}">SEO</a>, <a href="{{ route('webudvikling') }}">webudvikling</a> og <a href="{{ route('grafisk_design') }}">grafisk design.</a> Men jeg er ikke begrænset hertil - Jeg tager alle slags opgaver, uanset størrelse.
                <br/><br/>
                <strong>Og mere end det</strong><br/>
                Måske du har en masse data der skal indtastes, brug for rådgivning, undervisning eller noget helt andet<br/> 
                Der findes ikke den opgave, som jeg ikke kan tage.
                </p>
              </div>
            </div>
          </div>
        </section>

        <!-- SEO -->
        <section id="front-seo" class="lightblue-section">
          <div class="container">
            <div class="row">

              <div class="col-md-6 text-center d-none d-md-block">
                <img src="{{ asset ('img/seo-graph.png') }}" class="img-fluid" alt="SEO Graf" />
              </div>

              <div class="col-md-6 text-center middle-section-text">
                <h3>SEO</h3>
                <p class="text-left">
                Jeg kan hjælpe dig med at få mere synlighed på Google.<br/>
                <strong>Kom øverst i søgeresultaterne med SEO.</strong><br/>
                Jeg kan b.la styrke din on-page, off-page SEO, indholdet, linkbuilding, hastighedsoptimering, konverteringssporing og analyse af din side og brugere.
                </p>
                <a href="{{ route('seo') }}" class="btn btn-large btn-cta">Lær mere</a>
              </div>

            </div>
          </div>
        </section>

        <!-- Webudvikling -->
        <section id="front-webudvikling" class="white-section">
          <div class="container">
            <div class="row">
              <div class="col-md-6 text-center middle-section-text">
                <h3>Webudvikling</h3>
                <p class="text-left">
                Mangler du en ny side? Eller skal have din nuværende opfrisket? <strong>Så kan jeg hjælpe dig!</strong><br/>
                Jeg koder primært i PHP, og sagtens give dig en hånd, når det drejer sig om f.eks Laravel, WordPress eller andre populære systemer.
                </p>
                <a href="{{ route('webudvikling') }}" class="btn btn-large btn-cta">Lær mere</a>
              </div> 
              
              <div class="col-md-6 text-center d-none d-md-block">
                <img src="{{ asset ('img/webudvikling.png') }}" class="img-fluid" alt="Webudvikling" />
              </div>
            </div>
          </div>
        </section>

        <!-- Tekstforfatning -->
        <section id="front-tekstforfatning" class="lightblue-section">
          <div class="container">
            <div class="row">
              <div class="col-md-6 text-center d-none d-md-block">
                <img src="{{ asset ('img/tekstforfatning.png') }}" class="img-fluid" alt="Tekstforfatning - notesbog" />
              </div>

              <div class="col-md-6 text-center middle-section-text">
                <h3>Tekstforfatning</h3>
                <p class="text-left">
                Tekster er vigtigt for enhver side.
                Men det kan være en lang opgave at skulle igennem.<br/>
                Brug tiden til noget bedre - <strong>Jeg skriver dine tekster.</strong>
                </p>
                <a href="{{ route('tekstforfatning') }}" class="btn btn-large btn-cta">Lær mere</a>
              </div>
            </div>
          </div>
        </section>

        <!-- Grafisk Design -->
        <section id="front-grafisk" class="white-section">
          <div class="container">
            <div class="row">
              
              <div class="col-md-6 text-center middle-section-text">
                <h3>Grafisk Design</h3>
                <p class="text-left">
                Mangler du et nyt logo, et banner, webdesign, eller andet grafik?<br/> 
                <strong>Du kontakter mig - Jeg åbner Illustrator.</strong>
                </p>
                <a href="{{ route('grafisk_design') }}" class="btn btn-large btn-cta">Lær mere</a>
              </div>

              <div class="col-md-6 text-center d-none d-md-block">
                  <img src="{{ asset ('img/grafisk-design-plante.png') }}" class="img-fluid" alt="Grafisk Design - Kaktus" />
              </div>

            </div>
          </div>
        </section>

        <!-- Other Help -->
        <section class="lightblue-section">
          <div class="container">
            <div class="row">
              <div class="col-md-6 text-center d-none d-md-block">
                <img src="{{ asset ('img/shaking-hands.png') }}" class="img-fluid" alt="Support og andet hjælp" />                                
              </div>

              <div class="col-md-6 text-center middle-section-text">
                <h3>Brug for andet hjælp?</h3>
                <p class="text-left">
                Er du ved at flytte din webshop? Har du flere MB filer du skal have styr på? Brug for løbende support eller skal finde en løsning på et problem?
                <br/>
                Jeg kan hjælper dig!
                </p>
                <a href="{{ route('kontakt') }}" class="btn btn-cta">Kontakt Her</a>
              </div>
            </div>
          </div>
        </section>

        <!-- Meeting -->
        <section class="white-section">
          <div class="container">
            <div class="row">
              
              <div class="col-md-6 text-center middle-section-text pt-5">
                <h3>Lad os tage en snak</h3>
                <p class="text-left">
                Skal vi finde en løsning, der passer ind til dit behov?
                </p>
                <a href="{{ route('kontakt') }}" class="btn btn-block btn-success">Kontakt Her</a>
              </div>

              <div class="col-md-6 text-center d-none d-md-block">
                <img src="{{ asset ('img/gif/kaffe-kop.gif') }}" class="img-fluid" alt="Møde - Kaffe" />                                
              </div>
            </div>
          </div>
        </section>

      </main>
@endsection