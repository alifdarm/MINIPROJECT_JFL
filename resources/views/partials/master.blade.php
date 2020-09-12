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
      <!-- Modal -->
      <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="modal-title-default">Kelompok 1 JFLS ITB</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">

                 <!-- Light table -->
                 <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                        <th scope="col" class="sort" data-sort="name">Divisi</th>
                        <th scope="col" class="sort" data-sort="budget">Nama Lengkap</th>
                        <th scope="col" class="sort" data-sort="completion">Jurusan</th>

                        </tr>
                    </thead>
                    <tbody class="list">
                        <tr>
                            <td rowspan="2"><strong>ADVISER</strong></td>
                            <td>Eka Sylvianti Rahayu</td>
                            <td>S3 - Fisika</td>
                        </tr>
                        <tr>
                            <td>Iwan K.A</td>
                            <td>S2 - DKV</td>
                        </tr>
                        <tr>
                            <td rowspan="2"><strong>DEVELOPER</strong></td>
                            <td>I Gusti Putu Agata Wicaksana</td>
                            <td>S1 - Teknik Sipil</td>
                        </tr>
                        <tr>
                            <td>Muhammad Alif Darmamulia</td>
                            <td>S1 - Matematika</td>
                        </tr>
                        <tr>
                            <td rowspan="3"><strong>CONTENT CREATOR</strong></td>
                            <td>Antania Hanjani</td>
                            <td>S1 - Teknik Sipil</td>
                        </tr>
                        <tr>
                            <td>M. Insani Nur Alqodri</td>
                            <td>S1 - Teknik Kimia</td>
                        </tr>
                        <tr>
                            <td>Luh Putu Dilla</td>
                            <td>S1 - FKK</td>
                        </tr>
                        <tr>
                            <td rowspan="3"><strong>KALEIDOSKOP</strong></td>
                            <td>M. Ihsan Batubara</td>
                            <td>S1 - Teknik Pertambangan</td>
                        </tr>
                        <tr>
                            <td>Qisthyana Salimi</td>
                            <td>S1 - Astronomi</td>
                        </tr>
                        <tr>
                            <td>Farhan Dzikri Robbani</td>
                            <td>S1 - Teknik Metalurgi</td>
                        </tr>
                    </tbody>
                    </table>
                 </div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    <!--/modal-->

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

  <!-- Modal Scripts -->
  <script src="{{ asset('/bootstrap/docs/assets/js/vendor/jquery-slim.min.js') }}"></script>
  <script src="{{ asset('/bootstrap/docs/assets/js/vendor/tether.min.js') }}"></script>
  <script src="{{ asset('/bootstrap/js/dist/util.js') }}"></script>
  <script src="{{ asset('/bootstrap/js/dist/modal.js') }}"></script>
  <script src="{{ asset('/bootstrap/js/dist/collapse.js') }}"></script>
  <script src="{{ asset('/bootstrap/js/dist/tooltip.js') }}"></script>
  <script src="{{ asset('/bootstrap/js/dist/popover.js') }}"></script>
  <!-- Argon Scripts -->
  <script src="{{ asset('/assets/js/argon.min.js') }}"></script>
  <!-- Core -->
  <script src="{{ asset('/assets/vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('/assets/vendor/js-cookie/js.cookie.js') }}"></script>
  <script src="{{ asset('/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
  <script src="{{ asset('/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
  <!--Docs JS-->
  <script src="{{ asset('/assets/vendor/anchor-js/anchor.min.js') }}"></script>
  <script src="{{ asset('/assets/vendor/clipboard/dist/clipboard.min.js') }}"></script>
  <script src="{{ asset('/assets/vendor/holderjs/holder.min.js') }}"></script>
  <script src="{{ asset('/assets/vendor/prismjs/prism.js') }}"></script>
  <!-- Argon JS -->
  <script src="{{ asset('/assets/js/argon.js') }}"></script>
  <script>
    var firefoxTestDone = false

    function reportFirefoxTestResult(result) {
        if (!firefoxTestDone) {
            $('#ff-bug-test-result')
                .addClass(result ? 'text-success' : 'text-danger')
                .text(result ? 'PASS' : 'FAIL')
        }
    }


</script>
@stack('script')
@include('sweetalert::alert')
</body>

</html>
