@extends('layouts.main')

@section('content')

      <!-- Main Content -->
      <div class="container-fluid h-100">
          <div class="row h-100">

              <main class="col-md-8">
                <div class="container pt-5">
                  <div class="row d-flex justify-content-center">
                    <div class="col-md-4 mx-auto"></div>
                    <div class="col-md-8 mx-auto">
                      
                      @yield('land_content')

                    </div>
                  </div>
                </div>

              </main>

              <!-- Sidebar -->
              <aside class="landing-sidebar col-md-4">
                <div class="container pt-5">
                  <div class="row">
                    <!-- <div class="col-md-4 mx-auto"></div> -->
                    <div class="col-md-8 mx-auto text-center">
                      <h3>Brug for Hjælp?</h3>
                      <p>Kontakt mig her og jeg kontakter dig hurtigst muligt</p>
                        <form>
                          <div class="form-group">
                            <div class="form-row">
                              <div class="col">
                                <input type="text" class="form-control" placeholder="Navn">
                              </div>
                            </div>
                          </div>

                          <div class="form-group">
                            <div class="form-row">
                              <div class="col">
                                <input type="email" class="form-control" placeholder="E-mail">
                              </div>

                              <div class="col">
                                <input type="tel" class="form-control" placeholder="Telefon">
                              </div>
                            </div>
                          </div>

                          <div class="form-group">
                            <textarea class="form-control" rows="3" placeholder="Besked"></textarea>
                          </div>

                          <button type="submit" class="btn btn-block btn-cta">Send</button>
                        </form>
                    </div> <!-- /. col-md-8 mx-auto -->
                  </div> <!-- /. row -->
                </div> <!-- /. container pt-5 -->
              </aside>         

          </div> <!-- ./ row h-100 -->
      </div> <!-- ./container h-100 -->

@endsection