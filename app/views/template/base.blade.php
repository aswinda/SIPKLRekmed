<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>Narrow Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="{{URL::to('/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{URL::to('/css/jumbotron-narrow.css')}}" rel="stylesheet">

  </head>

  <body>

    <div class="container">
      <div class="header">
        <ul class="nav nav-pills pull-right">
          <li <?php if(Request::segment(1)==''){ echo "class='active'"; } ?>><a href="{{URL::to('/')}}">Home</a></li>
          @if(Auth::check())
            <li <?php if(Request::segment(1)=='books'){ echo "class='active'"; } ?> ><a href="{{URL::to('/books')}}">Books</a></li>
            <li <?php if(Request::segment(1)=='search'){ echo "class='active'"; } ?>><a href="{{URL::to('/search')}}">Search</a></li>
            <li <?php if(Request::segment(1)=='users'){ echo "class='active'"; } ?>><a href="{{URL::to('/users')}}">User</a></li>
            <li><a href="{{URL::to('/logout')}}">Logout</a></li>
          @else
            <li <?php if(Request::segment(1)=='login'){ echo "class='active'"; } ?>><a href="{{URL::to('/login')}}">Login</a></li>                    
          @endif
        </ul>
        <h3 class="text-muted"><strong>BookApp</strong></h3>
      </div>

     @yield('content')

      <div class="footer">
        <p>&copy; Sekolah Vokasi 2013</p>
      </div>

    </div> <!-- /container -->

  </body>
</html>
