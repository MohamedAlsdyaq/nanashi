@extends('layouts/app')

@section('content')
<head>
<script src="/js/home_page.js"></script>
<script src="/js/recommended_movie.js"></script>
<script src="/js/who_to_follow.js"></script>
</head>
<div class="page">
    <div class="container-fluid">
        <div class="col-sm-9">        
            <div class="col-sm-12">
             <h4>Box Office</h4> 
                <hr class="hr_no_margin">
                
           <div id="loop"></div>
                
        </div> 
            
            <form action="/search" method="get" role="search">
               
                <div class="search">
     <br>
                </div>
             </form>
            
               
                <br><br>
         <div class="col-sm-12">
            <h4>Upcoming</h4> 
            <hr class="hr_no_margin">

            <div id="upcoming"></div>

        </div> 
  <br><br>
         <div class="col-sm-12">
            <h4>Highest Rated Movies</h4> 
            <hr class="hr_no_margin">

            <div id="rated"></div>

        </div> 

                
        </div>
           
            
        <div class="categories_box col-sm-3">
           
            
             <div class="panel panel-default">
                <div class="panel-heading">Categories </div>
                <hr class="hr_no_margin">     
            <div class="panel-body"> 

                <div class="col-sm-6">
                    <p class="text-center black" ><a class="black" href="/browse/28">Action </a>
                    <p class="text-center black" ><a class="black" href="/browse/12">Adventure </a>
                    <p class="text-center black" ><a class="black" href="/browse/16">Animation </a>
                    <p class="text-center black" ><a class="black" href="/browse/35"> Comedy</a>
                    <p class="text-center black" ><a class="black" href="/browse/80"> Crime</a>
                    <p class="text-center black" ><a class="black" href="/browse/99">Documentary </a>
                    <p class="text-center black" ><a class="black" href="/browse/18">Drama </a>
                    <p class="text-center black" ><a class="black" href="/browse/10751"> Family</a>
                    <p class="text-center black" ><a class="black" href="/browse/14">Fantasy </a>



                </div>
                <div class="col-sm-6">
                    <p class="text-center black" ><a class="black" href="/browse/36"> History</a>
                    <p class="text-center black" ><a class="black" href="/browse/10402"> Music </a>
                    <p class="text-center black" ><a class="black" href="/browse/9648"> Mystery</a>
                    <p class="text-center black" ><a class="black" href="/browse/878"> Sci-Fi</a>
                    <p class="text-center black" ><a class="black" href="/browse/10752"> War</a>
                    <p class="text-center black" ><a class="black" href="/browse/37">Western </a>
                    <p class="text-center black" ><a class="black" href="/browse/53">Triller </a>
                    <p class="text-center black" ><a class="black" href="/browse/27"> Horror </a>
                    <p class="text-center black" ><a class="black" href="/browse/1077"> TV Movie </a>
                </div>

                </div>
                
             </div>
            
            
        </div>
            
            
        </div>
</div>
<input type="hidden" value="{{$recommended}}" id="recommended">
@endsection
