<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="{{ asset('logo_app.png') }}" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="{{ route('miniproject.index') }}">
                <i class="ni ni-tv-2 text-success"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>


            <li class="nav-item">
              <a class="nav-link" href="https://www.google.co.id/maps/place/Institut+Teknologi+Bandung/@-6.8928509,107.6108643,17z/data=!4m5!3m4!1s0x2e68e65767c9b183:0x2478e3dcdce37961!8m2!3d-6.8914798!4d107.6106589">
                <i class="ni ni-single-02 text-success" data-toggle="modal" data-target="#map-default"></i>
                <span class="nav-link-text">Our Location</span>

            </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/admin') }}">
                <i class="ni ni-key-25 text-success"></i>
                <span class="nav-link-text">Login Admin</span>
              </a>
            </li>

          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->

        </div>
      </div>
    </div>
  </nav>
