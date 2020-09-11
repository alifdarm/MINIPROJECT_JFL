<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Antre Yuk!</title>
  <!-- Favicon -->
  <link rel="icon" href="{{ asset('/assets/img/brand/logo_app2.png') }}" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="{{ asset('/assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{ asset('/assets/css/argon.css?v=1.2.0') }}" type="text/css">
</head>

<body>
    <!-- Sidenav -->
    @include('partials.sidebar')
    <!-- Main content -->
    <div class="main-content" id="panel">
      <!-- Topnav -->
      @include('partials.navbar')
      <!-- Header -->
      <!-- Header -->
      <div class="header bg-green pb-6">
        @yield('up_container')
      <!-- Page content -->
      <div class="container-fluid mt--6">
        @yield('down_container')
        </div>
        <!-- Footer -->
        <footer class="footer pt-0">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6">
              <div class="copyright text-center  text-lg-left  text-muted">
                &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
                </li>
              </ul>
            </div>
          </div>
        </footer>
      </div>
    </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{ asset('/assets/vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('/assets/vendor/js-cookie/js.cookie.js') }}"></script>
  <script src="{{ asset('/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
  <script src="{{ asset('/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
  <!-- Argon JS -->
  <script src="{{ asset('/assets/js/argon.js?v=1.2.0') }}"></script>
  <script>
    function showFunc(){
        var x = document.getElementById("card_antre");
        if (window.getComputedStyle(x).display === "none") {
            x.style.display = "contents";
        }
    }
</script>
@stack('script')
@include('sweetalert::alert')
</body>

</html>
