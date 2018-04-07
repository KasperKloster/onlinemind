@extends('layouts.main')

@section('meta')
  <title>OnlineMind | Front </title>
  <meta name="description" content="">
  <meta name="robots" content="index, follow">
@endsection

@section('content')
      
      <!-- Jumbotron / Header -->
      <header>
        <div class="jumbotron jumbotron-fluid jumbotron-header jumbotron-header-front">
          <div class="container">
            <div class="row">
              
              <div class="col-md-6">
                <h1>SEO<br/>Webudvikling<br/>Grafisk Design</h1>
                <p class="lead pt-3">
                  Din hjælpende hånd
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
                <a href="#" class="btn btn-large btn-cta">Lær mere</a>
              </div>

              <div class="col-md-6 d-flex justify-content-center">
                <img src="img/desktop.png" class="img-fluid" alt="Desktop - OnlineMind" />
              </div>
              
            </div> <!-- ./ row -->
          </div> <!-- /.container -->
        </div> <!-- /.jumbotron -->
      </header>

      <!-- Section Divider -->
      <section class="divider-section">
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
            <div class="row">
              <div class="col-md-12 text-center">
                <h2>Noget Tekst</h2>
                <p class="lead">ksjahdkjashda</p>
              </div>
            </div>
          </div>
        </section>

        <!-- SEO -->
        <section id="front-seo" class="lightblue-section">
          <div class="container">
            <div class="row">

              <div class="col-md-6 d-flex justify-content-center">
                <img src="img/seo-graph.png" class="img-fluid" alt="SEO Graf" />
              </div>

              <div class="col-md-6 text-center middle-section-text">
                <h3>SEO</h3>
                <p class="text-left">Lorem ipsum dolor sit amet, 
                consectetur <a href="#">adipiscing elit</a>, sed do eiusmod tempor 
                incididunt ut labore et dolore magna <b>aliqua</b>. Ut enim ad minim veniam
                </p>
                <a href="landingpage.html" class="btn btn-large btn-cta">Lær mere</a>
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
                <p class="text-left">Lorem ipsum dolor sit amet, 
                consectetur <a href="#">adipiscing elit</a>, sed do eiusmod tempor 
                incididunt ut labore et dolore magna <b>aliqua</b>. Ut enim ad minim veniam
                </p>
                <a href="#" class="btn btn-large btn-cta">Lær mere</a>
              </div> 

              <div class="col-md-6 d-flex justify-content-center">
                <img src="img/webudvikling.png" class="img-fluid" alt="Webudvikling" />
              </div>
            </div>
          </div>
        </section>

        <!-- Tekstforfatning -->
        <section id="front-tekstforfatning" class="lightblue-section">
          <div class="container">
            <div class="row">
              <div class="col-md-6 d-flex justify-content-center">
                <img src="img/tekstforfatning.png" class="img-fluid" alt="Tekstforfatning - notesbog" />
              </div>

              <div class="col-md-6 text-center middle-section-text">
                <h3>Tekstforfatning</h3>
                <p class="text-left">Lorem ipsum dolor sit amet, 
                consectetur <a href="#">adipiscing elit</a>, sed do eiusmod tempor 
                incididunt ut labore et dolore magna <b>aliqua</b>. Ut enim ad minim veniam
                </p>
                <a href="#" class="btn btn-large btn-cta">Lær mere</a>
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
                <p class="text-left">Lorem ipsum dolor sit amet, 
                consectetur adipiscing elit, sed do eiusmod tempor 
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                </p>
                <a href="#" class="btn btn-large btn-cta">Lær mere</a>
              </div>

              <div class="col-md-6 d-flex justify-content-center">
                  <img src="img/grafisk-design-plante.png" class="img-fluid" alt="Grafisk Design - Kaktus" />
              </div>

            </div>
          </div>
        </section>

        <!-- Møde -->
        <section class="lightblue-section">
          <div class="container">
            <div class="row">
              <div class="col-md-6 d-flex justify-content-center">
                <img src="img/kaffe-kop.png" class="img-fluid" alt="Møde - Kaffe" />                                
              </div>

              <div class="col-md-6 text-center middle-section-text">
                <h3>Møde?</h3>
                <p class="text-left">Lorem ipsum dolor sit amet, 
                consectetur <a href="#">adipiscing elit</a>, sed do eiusmod tempor 
                incididunt ut labore et dolore magna <b>aliqua</b>. Ut enim ad minim veniam
                <a href="#" class="btn btn-block btn-success">Kontakt Her</a>
              </div>
            </div>
          </div>
        </section>

      </main>
@endsection