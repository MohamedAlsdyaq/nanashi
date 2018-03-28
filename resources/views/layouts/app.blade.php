<!DOCTYPE html>
<html lang="en">
<head>
<meta name="_token" content="{!! csrf_token() !!}"/>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }}</title>

<!-- Styles -->
<script   src="http://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="/css/app.css" rel="stylesheet">
<link href="/css/css.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<!-- Scripts -->

<script   src="/js/notifications.js"></script>
<script>
window.Laravel = <?php echo json_encode([
'csrfToken' => csrf_token(),
]); ?>
</script>
</head>
<body>
<div id="app">
<nav class="transition hd show navbar navbar-default navbar-static-top">
<div class="container">
<div class="navbar-header">

<!-- Collapsed Hamburger -->
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
<span class="sr-only">Toggle Navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>

<!-- Branding Image -->
<a class="navbar-brand" href="{{ url('/') }}">
Nanashi
</a>

</div>

<div class="collapse navbar-collapse" id="app-navbar-collapse">
<ul class="nav navbar-nav">
&nbsp;

    
    <li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
    
  Browse <span class="caret"></span>
</a>

<ul class="dropdown-menu" role="menu">
  <li>
     <a href="/browse/12">
        Action
        </a>

    </li>  
    
    <li>
     <a href="/browse/18">
        Drama
        </a>

    </li>
     <li>
     <a href="/browse/35">
        Comedy
        </a>

    </li>
     <li>
     <a href="/browse/99">
        Documentary
        </a>

    </li>
    
    
    
</ul>
</li>
    
    
   <li>
 <a>      
    <form action="/search" method="get" role="search">
  <div class="search">
    <input     autocomplete="off"
 type="text" name="q" class="search" placeholder="Search">
  </div>
     </form>
       </a>
    </li> 
   
</ul>
  

<!-- Right Side Of Navbar -->
<ul class="nav navbar-nav navbar-right">
<!-- Authentication Links -->
@if (Auth::guest())
<li><a href="{{ url('/login') }}">Login</a></li>
<li><a href="{{ url('/register') }}">Register</a></li>
@else
 <li>
     <a href="{{ url('/') }}" >
    
         Home
         
     </a>
    
</li>       
<li id="notification_li"><a id="notificationLink" href="#">Notification

<span id="n_count" class="badge"></span></a>
<div id="notificationContainer">
<div id="notificationTitle">Notifications</div>
<div style="background-color: #f2f2f2; overflow-y: scroll; overflow: auto;" id="notificationsBody" class="notifications">
<div id="noti">
<div id="noti2">
</div><!-- END OF #NOTI HERE -->
</div><!-- END OF #NOTI HERE -->
</div>
<div id="notificationFooter"><a href="#">Clear</a></div>
</div>
        </li>
    
 
    
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
    
    {{ Auth::user()->name }} <span class="caret"></span>
</a>

<ul class="dropdown-menu" role="menu">
    <li>
     <a href="{{ url('profile/'.Auth::user()->id) }}">
       <i class="fa fa-paper-plane" aria-hidden="true"></i>
        My Profile
        </a>

    </li>
    
    <li>
     <a href="{{ url('list/'.Auth::user()->id) }}">
       <i class="fa fa-list-ul" aria-hidden="true"></i>
        My List
        </a>

    </li>
    
    <li>
        <a href="{{ url('/logout') }}"
            onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
         <i class="fa fa-sign-out" aria-hidden="true"></i>
            Logout
        </a>

        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </li>
</ul>
</li>
@endif
</ul>
</div>
</div>
    

</nav>
@yield('content')
</div>

    <div class="footer">
    
       
        © 2016 Nanashi Inc. <a class="no_anchor" href="/privacy">Privacy </a>  Contact
       
        
    
</div>
<!-- Scripts -->
<script src="/js/app.js"></script>
<script>
    $('.hd').hover(function () {
        $('.hd').removeClass('show');
    }, function () {
        $('.hd').addClass('show');
    });



    $(window).scroll(function() {
        if ($(window).scrollTop() > 100 ){
            $('.hd').removeClass('show');
        } else {
            $('.hd').addClass('show');
        };
    });
</script>
</body>
</html>
