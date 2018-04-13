@extends('layouts.landingpage')

@section('meta')
  <title>OnlineMind | Webudvikling </title>
  <meta name="description" content="">
  <meta name="robots" content="index, follow">
@endsection

      <!-- Header -->
      <header>
        <div class="jumbotron jumbotron-fluid jumbotron-header">
          <div class="container">
            <div class="row">
              <div class="d-flex justify-content-center">
                <div class="col-md-4"></div>
                <div class="col-md-8 text-center">
                  <h1>Webudvikling</h1>
                  <p class="lead pt-3">
                    Din hjælpende hånd

                  </p>
                </div>
              </div>
            </div> <!-- ./ row -->
          </div> <!-- /.container -->
        </div> <!-- /.jumbotron -->
      </header>

      <!-- Landing Content -->
      @section('land_content')
        <h3 class="text-center">I Scroll</h3>
        <p>Sriracha biodiesel taxidermy organic post-ironic, Intelligentsia salvia mustache 90's code editing brunch. Butcher polaroid VHS art party, hashtag Brooklyn deep v PBR narwhal sustainable mixtape swag wolf squid tote bag. Tote bag cronut semiotics,
        raw denim deep v taxidermy messenger bag. Tofu YOLO Etsy, direct trade ethical Odd Future jean shorts paleo. Forage Shoreditch tousled aesthetic irony, street art organic Bushwick artisan cliche semiotics ugh synth chillwave meditation.
        Shabby chic lomo plaid vinyl chambray Vice. Vice sustainable cardigan, Williamsburg master cleanse hella DIY 90's blog.</p>

        <p>Ethical Kickstarter PBR asymmetrical lo-fi. oreamcatcher street art Carles, stumptown gluten-free Kickstarter artisan Wes Anderson wolf pug. Godard sustainable you probably haven't heard of them, vegan farm-to-table Williamsburg slow-carb
        readymade disrupt deep v. Meggings seitan Wes Anderson semiotics, cliche American Apparel whatever. Helvetica cray plaid, vegan brunch Banksy leggings +1 direct trade. Wayfarers codeply PBR selfies. Banh mi McSweeney's Shoreditch selfies,
        forage fingerstache food truck occupy YOLO Pitchfork fixie iPhone fanny pack art party Portland.</p>

        <!-- Section Divider -->
        <section class="d-flex justify-content-center row divider-section">
          <h4 class="text-center">Hvad jeg arbejder mest med</h4>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="https://da.wikipedia.org/wiki/HTML5" target=_blank><i class="fab fa-html5 fa-3x"></i></a></li>
            <li class="list-inline-item"><a href="https://en.wikipedia.org/wiki/Cascading_Style_Sheets" target="_blank"><i class="fab fa-css3-alt fa-3x"></i></a></li>
            <li class="list-inline-item"><a href="https://getbootstrap.com" target="_blank"><i class="fas fa-bold fa-3x"></i></a></li>
            <li class="list-inline-item"><a href="https://laravel.com" target="_blank"><i class="fab fa-laravel fa-3x"></i></a></li>
            <li class="list-inline-item"><a href="https://wordpress.com" target="_blank"><i class="fab fa-wordpress fa-3x"></i></a></li>
            <li class="list-inline-item"><a href="https://www.javascript.com" target="_blank"><i class="fab fa-js-square fa-3x"></i></a></li>
            <li class="list-inline-item"><a href="http://github.com/kasperkloster" target="_blank"><i class="fab fa-github fa-3x"></i></a></li>
          </ul>    
        </section>

        <p>Ethical Kickstarter PBR asymmetrical lo-fi. oreamcatcher street art Carles, stumptown gluten-free Kickstarter artisan Wes Anderson wolf pug. Godard sustainable you probably haven't heard of them, vegan farm-to-table Williamsburg slow-carb
        readymade disrupt deep v. Meggings seitan Wes Anderson semiotics, cliche American Apparel whatever. Helvetica cray plaid, vegan brunch Banksy leggings +1 direct trade. Wayfarers codeply PBR selfies. Banh mi McSweeney's Shoreditch selfies,
        forage fingerstache food truck occupy YOLO Pitchfork fixie iPhone fanny pack art party Portland.</p>

        <p>Sriracha biodiesel taxidermy organic post-ironic, Intelligentsia salvia mustache 90's code editing brunch. Butcher polaroid VHS art party, hashtag Brooklyn deep v PBR narwhal sustainable mixtape swag wolf squid tote bag. Tote bag cronut semiotics,
        raw denim deep v taxidermy messenger bag. Tofu YOLO Etsy, direct trade ethical Odd Future jean shorts paleo. Forage Shoreditch tousled aesthetic irony, street art organic Bushwick artisan cliche semiotics ugh synth chillwave meditation.
        Shabby chic lomo plaid vinyl chambray Vice. Vice sustainable cardigan, Williamsburg master cleanse hella DIY 90's blog.</p>
      @endsection

      <!-- Sidebar Headline -->
      @section('landing-sidebar-headline')
        <h4>Ny side?</h4>
        <p>Kontakt mig her og jeg vender tilbage til dig</p>
      @endsection

      @section('contact-form-type')
      {{-- Hidden Field / Sends were mail is sent from --}}
        <input type="hidden" name="contactFormType" value="webudvikling">
      @endsection