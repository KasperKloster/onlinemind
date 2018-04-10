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
                <div class="col-md-8 text-center">
                  <h1>Kontakt</h1>
                  <p class="lead pt-3">
                    Din hjælpende hånd
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
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
                      <h2>Om Onlinemind</h2>
                      <p>akldsjalkjsdlkajsdlkajslkdjasdjkl</p>
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

                        <form action="{{ url('kontakt') }}" method="POST">
                          {{ csrf_field() }}
                          <div class="form-group">
                            <div class="form-row">
                              <div class="col">
                                <input type="text" class="form-control" name="name" placeholder="Navn">
                              </div>
                            </div>
                          </div>

                          <div class="form-group">
                            <div class="form-row">
                              <div class="col">
                                <input type="email" class="form-control" name="email" placeholder="E-mail">
                              </div>

                              <div class="col">
                                <input type="tel" class="form-control" name="phone" placeholder="Telefon">
                              </div>
                            </div>
                          </div>

                          <div class="form-group">
                            <textarea class="form-control" rows="3" name="message" placeholder="Besked"></textarea>
                          </div>

                          <button type="submit" class="btn btn-block btn-cta">Send</button>
                        </form>

                    </div> <!-- /. col-md-8 mx-auto -->
                  </div> <!-- /. row -->
                </div> <!-- /. container pt-5 -->
              </div>         

          </div> <!-- ./ row h-100 -->
      </div> <!-- ./container h-100 -->