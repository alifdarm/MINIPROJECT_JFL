<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('/bootstrap/docs/logo_app2.png') }}">

    <title>Home Page</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('bootstrap\docs\examples\cover\cover.css') }}" rel="stylesheet">
  </head>

  <body>

    <div class="site-wrapper" style="background-image: url({{ asset('logo_app2.png') }}); background-repeat:repeat;">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Antre Yuk!</h3>

            </div>
          </div>

          <div class="inner cover">
            <h1 class="cover-heading">Miniproject JFLS</h1>
            <p class="lead" style="background-color:black;">Projek kami, berupa prototype aplikasi penerapan antre digital hanya dalam genggaman</p>
            <p class="lead">
                @if (Route::has('login'))
                @auth
                    <a href="{{ url('/home') }}" class="btn btn-lg btn-primary">Home</a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-lg btn-primary">Login</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn btn-lg btn-default">Sign Up</a>
                @endif
                @endauth
            @endif
            </p>
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p>Cover template for <a href="https://getbootstrap.com">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
            </div>
          </div>

        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="{{ asset('/assets/js/vendor/jquery.min.js') }}"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="{{ asset('/bootstrap/docs/assets/js/vendor/holder.min.js') }}"></script>
    <script>
      $(function () {
        Holder.addTheme("thumb", { background: "#55595c", foreground: "#eceeef", text: "Thumbnail" });
      });
    </script>
    <script src="{{ asset('/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{ asset('/bootstrap/docs/assets/js/ie10-viewport-bug-workaround.js') }}"></script>


</body></html>
