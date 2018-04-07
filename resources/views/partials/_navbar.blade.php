      <!-- Display Menu -->
      <div id="main-nav" class="overlay">
        <div class="container">
          <div class="row">
              <div class="col-md-12">
                <a id="closebtn">Luk <i class="far fa-times-circle fa-2x"></i></a>
              </div>
          </div>
        </div>

        <div class="overlay-content">
          <nav>
            <a class="nav-item" href="{{ route('seo') }}">SEO</a>
            <a class="nav-item" href="#">About</a>
            <a class="nav-item" href="#">Contact</a>
            <a class="nav-item" href="#">Webudvikling</a>
            <a class="nav-item" href="#">Contact</a>
          </nav>
        </div>
      </div>

      <!-- Menu -->
      <nav class="navbar fixed-top">
        <div class="container">

          <!-- brand -->
          <a class="navbar-brand" href="{{ route('front') }}">OnlineMind</a>
          <!-- menu button -->
          <div id="menu-btn">
            <a href="#" class="pull-right">Menu 
              <div id="menu-btn-block" class="hover-circle">
                <span class="fas fa-bars hover-inner-circle"></span>
              </div>
            </a>
          </div>

        </div>
      </nav>