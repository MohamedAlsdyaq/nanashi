@extends('layouts.app')

@section('content')
<div class="page home_page">
<div class="landing col-sm-12">
    
    
    <h2>Nanashi</h2>
    <h3>Non-commercial, personalized movie recommendations.</h3>

<a href="/register"><input  type='submit' class='btn btn-default' value='Register'  /> </a>


    
    
    or <a href="/login">Log in</a>
    </div>
    
<div class="home_page_divs col-sm-offset-2 col-sm-8">
    
    <div class="col-sm-6">
    <p class="text-primary" >Recommendations</p>
we help you find movies you will like. Rate movies to build a custom taste profile, then we recommend other movies for you to watch.</div>
    <div class="col-sm-6">
        <img width="" height="" class="img-responsive" src="/storage/1.jpg">
    </div>
    
    </div>
    
    <div class="home_page_divs col-sm-offset-2 col-sm-8">
    
    <div class="col-sm-6">
    <p class="text-primary" >Presonalized Expirence</p>
we help you to expirence a unique instance of our site by presonalizing data for you.</div>
    <div class="col-sm-6">
        <img width="" height="" class="img-responsive" src="/storage/3.png">
    </div>
    
    </div>
    
 <div class="home_page_divs col-sm-offset-2 col-sm-8">
    
    <div class="col-sm-6">
    <p class="text-primary" >Organize your List</p>
we help you to organize your watchlist and to rate movies you liked to get more recommendations .</div>
    <div class="col-sm-6">
        <img width="" height="" class="img-responsive" src="/storage/2.png">
    </div>
    
    </div>


</div>

@endsection
