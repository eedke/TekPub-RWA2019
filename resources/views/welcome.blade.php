<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>TekPub</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/agency.min.css" rel="stylesheet">
    <link href="css/agencycss" rel="stylesheet">


</head>

<body style="background-color:#353942;" id="page-top">

  <!-- Navigation -->
      <div class="navbar bg-dark border-warning flex-center position-ref full-height float-right" style="font-size:20px; border-bottom: 3px solid #ffcc00;">
            @if (Route::has('login'))
                <div class="top-right links">
                <a class="js-scroll-trigger" href="#contact">Contact</a>
                    &nbsp;
                    <a class="js-scroll-trigger" href="vizija.pdf">Vision</a>
                &nbsp;
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                        &nbsp;
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        &nbsp;

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                            &nbsp;
                        @endif
                    @endauth

                </div>
            @endif
      </div>


  <!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="intro-heading text-warning" style="text-shadow: 6px 6px 0px rgba(0,0,0,0.8);"><img src="https://i.ibb.co/GcVXxCp/LogoPng.png" alt="TekPub"style="width:150px">TekPub</div>
      <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" style="color:black" href="{{ route('product.index') }}">Order Now!</a>
        <div class="intro-lead-in"><br></div>
      </div>
    </div>
  </header>

  <br><br><br>
  <!-- Contact -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase" style="color:#fed136">Contact Us</h2>
          <h3 class="section-subheading text-muted"></h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form id="contactForm" name="sentMessage" novalidate="novalidate">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group bg-dark border-warning">
                  <input class="form-control bg-dark border-warning border-warning" style="color:#a17f1a" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control bg-dark border-warning" style="color:#a17f1a" id="email" type="email" placeholder="Your E-Mail *" required="required" data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control bg-dark border-warning" style="color:#a17f1a" id="phone" type="tel" placeholder="Your Number *" required="required" data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea class="form-control bg-dark border-warning" style="color:#a17f1a" id="message" placeholder="Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" style="color:black" type="submit">Submit Message</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->

  <footer class="footer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4">
          <span class="copyright text-warning">Copyright &copy; TekPub 2019</span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-twitter" style="color:#ffcc00"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-facebook-f" style="color:#ffcc00"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-linkedin-in" style="color:#ffcc00"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/agency.min.js"></script>

</body>

</html>
