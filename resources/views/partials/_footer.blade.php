      <!-- Footer -->
      <footer id="footer">
        <div class="container">
          <div class="row justify-content-center text-center">
            <div class="col-md-2">
              <h6>OnlineMind</h6>
            </div>

            <div class="col-md-3">
              <h6>Kontakt</h6>
              <address>
              Email: <a href="mailto:kasper@onlinemind.dk">kasper@onlinemind.dk</a>
              <br/>
              Tlf: <a href="tel:+4531777940">31 77 79 40</a>
              </address>
            </div>

            <div class="col-md-3">
              <h6>Adresse</h6>
              <address>
                Korsikavej 4. 1th<br/>
                2300 København S<br/>
                <i>CVR: 35109455</i>
              </address>
            </div>

            <div class="col-md-4">
              <h6>Nyhedsbrev</h6>
              <p>Skriv dig op til nyhedsbrevet</p>

                <form action="{{ url('newsletter') }}" method="POST">
                  <div class="input-group">
                    <input type="text" class="form-control form-control-sm" name="newsletterName" placeholder="Navn" required>
                    <input type="email" class="form-control form-control-sm" name="newsletterEmail" placeholder="E-mail" required>
                    <div class="input-group-append">
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-cta">Tilmeld</button>
                    </div>
                  </div>
                </form>
                
                <!-- Newsletter Subscribe Succes -->
                @if (Session::has('newsletterSuccess'))
                  <div class="alert alert-success alert-dismissible fade show" role="alert" id="footer-newsletter-msg">
                    <h4 class="alert-heading">Du er nu tilmeldt</h4>
                    <hr/>
                    <p>{{ Session::get('newsletterSuccess') }}</p>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                @endif
                
                <!-- Newsletter Already subscribed error -->
                @if (Session::has('newsletterError'))
                  <div class="alert alert-warning alert-dismissible fade show" role="alert" id="footer-newsletter-msg">
                    <p>{{ Session::get('newsletterError') }}</p>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                @endif
                
                <!-- Newsletter Validation Errors -->
                @if (count($errors) > 0)
                  <div class="alert alert-danger alert-dismissible fade show" role="alert" id="footer-newsletter-msg">
                    <h4 class="alert-heading">Du mangler at udfylde:</h4>
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
                @endif

            </div>

          </div> <!-- /.row -->
        </div> <!-- /.container -->
      </footer>

      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

      <script defer src="https://use.fontawesome.com/releases/v5.1.1/js/all.js" integrity="sha384-BtvRZcyfv4r0x/phJt9Y9HhnN5ur1Z+kZbKVgzVBAlQZX4jvAuImlIz+bG7TS00a" crossorigin="anonymous"></script>

      <script src="{{ asset('js/scripts.js') }}"></script>
    </body>
</html>