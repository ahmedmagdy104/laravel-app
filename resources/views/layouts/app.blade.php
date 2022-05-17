<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="Never miss any new movie">
    <title>HOME</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <link rel="stylesheet"  href="{{asset('fontawesome-free-5.14.0-web/css/all.css')}}">
</head>
<body>
        <div class="navbar">
        <div class="position">
        <div class="container">
         <h2>MO<span>V</span>GO</h2>
            <ul>
                <li><a class="activee" href="home.html"> Home</a></li>
                <li class="mov"><a href="#"> Movies</a>
                 <div class="menu">
                 <ul>
                 <li><a href="/action">Action</a></li>
                 <li><a href="/drama">Drama</a></li>
                 </ul>
                 </div>
                </li>
                <li><a> Search</a>
                <li class="last"><a href="#" ><i class="fas fa-bars">
                    <div class="all-menu">
                      <ul>
                          <li><a href="comingSoon">Coming Soon</a></li>
                          <li><a href="/trending">Trending Now</a></li>
                          <li><a href="/feedback">FeedBack</a></li>
                          <li><a href="/login"> Log in</a></li>
                          <li><a href="/register">Sign up</a></li>
                          <li><a href="/logout">Sign out</a></li>
                      </ul>
                    </div>
                    </i></a>
                </ul>
      </div>    
      </div>
      </div>
      @yield('content')
          
    <div class="footer">
        <h3>Thank you for visiting us!</h3>  
        <h5>having any problem? please contact us on <a href="../feedback%20form/feedback%20form.html">feedback</a></h5>
    <p>you can also find us here <i class="fab fa-facebook" aria-hidden="true" style="color: blue"></i> <i class="fab fa-instagram" aria-hidden="true" style="color: brown"> </i> <i class="fab fa-youtube" aria-hidden="true" style="color: darkred"></i></p>
    </div>
      <script  src="{{asset('js/jquery.js')}}" >  </script>
    <script  src="{{asset('js/home.js')}}" ></script>
</body>
</html>      