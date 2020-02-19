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
  <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm" style="border-bottom: 2px solid #ffcc00; font-size: 20px;">

        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="https://i.ibb.co/GCf1kKs/logo.png" height="35px" alt="TekPub">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                @yield('navbar')
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" target="_blank" href="vizija.pdf" style="color:#ffcc00">Vision</a>

                </li>
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}" style="color:#ffcc00">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}" style="color:#ffcc00">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown bg-dark ">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle bg-dark" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color:#ffcc00; ">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right bg-dark border-warning" aria-labelledby="navbarDropdown">
                            <a class="border-warning dropdown-item bg-dark" href="{{ route('user.profile') }}" style="color:#ffcc00">
                                {{ __('Profile') }}
                            </a>
                            @can('manage-users')
                            <a class="border-warning dropdown-item bg-dark" href="{{ route('allOrders.views') }}" style="color:#ffcc00; ">
                                All orders
                             </a>
                                <a class="border-warning dropdown-item bg-dark" href="{{ route('admin.users.index') }}" style="color:#ffcc00; ">
                                   User Management
                                </a>
                            @endcan
                            <hr style="border-top: 1px solid #ffcc00;">
                            <a class="dropdown-item bg-dark" href="{{ route('logout') }}" style="color:#ffcc00"
                               onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>


  <!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="intro-heading text-warning" style="text-shadow: 6px 6px 0px rgba(0,0,0,0.8);">TekPub</div>
      <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" style="color:black" href="{{ route('product.index') }}">Order Now!</a>
        <div class="intro-lead-in"><br></div>
      </div>
    </div>
  </header>


  <!-- Contact -->
  <section class="page-section" style="border-top: 2px solid #ffcc00; border-bottom: 2px solid #ffcc00;" id="contact">
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
