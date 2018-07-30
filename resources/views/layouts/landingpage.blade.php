@extends('layouts.main')

@section('content')

      @yield('land_header')

      <!-- Main Content -->
      <div class="container-fluid">
          <div class="row">

              <main class="col-md-8">
                <div class="container pt-5">
                  <div class="row d-flex justify-content-center">
                    <div class="col-md-4 mx-auto"></div>
                    <div class="col-md-8 mx-auto">
                      <article>
                        @yield('land_content')
                      </article>
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
                      @yield('landing-sidebar-headline')
                        
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

                        <form action="{{ action('PagesController@postContact') }}" method="POST">
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
                          
                          @yield('contact-form-type')

                          <button type="submit" class="btn btn-block btn-cta">Send</button>
                        </form>
                    </div> <!-- /. col-md-8 mx-auto -->
                  </div> <!-- /. row -->
                </div> <!-- /. container pt-5 -->
              </aside>         

          </div> <!-- ./ row h-100 -->
      </div> <!-- ./container h-100 -->

@endsection