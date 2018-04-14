@extends('layouts.main')

@section('meta')
  <title>OnlineMind | Kontakt </title>
  <meta name="description" content="">
  <meta name="robots" content="index, follow">
@endsection

      <!-- Header -->
      <header>
        <div class="jumbotron jumbotron-fluid jumbotron-header">
          <div class="container">
            <div class="row">
              <div class="d-flex justify-content-center">
                <div class="col-md-12 text-center">
                  <h1>Kontakt</h1>
                  <p class="lead pt-3">
                  OnlineMind er en enkeltmandsvirksomhed startet og drevet af Kasper Kloster<br/>
                  Hvad jeg ikke ved, finder jeg ud af. Hvad jeg ikke kan nå, finder jeg ekstra hænder til.<br/>
                  </p>
                </div>
              </div>
            </div> <!-- ./ row -->
          </div> <!-- /.container -->
        </div> <!-- /.jumbotron -->
      </header>

      <!-- Main Content -->
      <div class="container-fluid h-100">
          <div class="row h-100">

              <main class="col-md-6">
                <div class="container pt-5">
                  <div class="row d-flex justify-content-center">
                    <div class="col-md-4 mx-auto"></div>
                    <div class="col-md-8 mx-auto">
                      <h2>Om OnlineMind</h2>
                      <p>
                      <hr/>
                      <address>
                        Korsikavej 4, 1.th<br/>
                        2300 København S
                        <br/>
                        CVR: 35 10 94 55
                      </address>
                    </p>
                    </div>
                  </div>
                </div>

              </main>

              <!-- Sidebar -->
              <div id="contact-right" class="col-md-6">
                <div class="container pt-5">
                  <div class="row">
                    <!-- <div class="col-md-4 mx-auto"></div> -->
                    <div class="col-md-8 mx-auto text-center">
                      <h3>Brug for Hjælp?</h3>
                      <p>Kontakt mig her og jeg kontakter dig hurtigst muligt</p>
                        
                        @if (Session::has('success'))
                          <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <h4 class="alert-heading">Din besked blev sendt!</h4>
                            <hr/>
                            <p>{{ Session::get('success') }}</p>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                        @endif

                        @if (count($errors) > 0)
                        <section class="main-content">
                          <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <h4 class="alert-heading">Din besked blev ikke sendt.</h4>
                            <hr/>
                            <ul>
                            @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                        </section>
                        @endif

                        <form action="{{ url('kontakt') }}" method="POST">
                          {{ csrf_field() }}
                          <div class="form-group">
                            <div class="form-row">
                              <div class="col">
                                <input type="text" class="form-control" name="name" placeholder="Navn" required>
                              </div>
                            </div>
                          </div>

                          <div class="form-group">
                            <div class="form-row">
                              <div class="col">
                                <input type="email" class="form-control" name="email" placeholder="E-mail" required>
                              </div>

                              <div class="col">
                                <input type="tel" class="form-control" name="phone" placeholder="Telefon">
                              </div>
                            </div>
                          </div>

                          <div class="form-group">
                            <textarea class="form-control" rows="3" name="message" placeholder="Besked"></textarea>
                          </div>

                          <input type="hidden" name="contactFormType" value="contact-form">

                          <button type="submit" class="btn btn-block btn-cta">Send</button>
                        </form>

                    </div> <!-- /. col-md-8 mx-auto -->
                  </div> <!-- /. row -->
                </div> <!-- /. container pt-5 -->
              </div>         

          </div> <!-- ./ row h-100 -->
      </div> <!-- ./container h-100 -->