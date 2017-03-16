@extends('layouts.app')

@section('content')
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="/css/starrr.css">
    <script src="/js/starrr.js" ></script>
<script src="/js/textarea.js" ></script>
<script src="/js/movie.js" ></script>
<script src="/js/show_more.js" ></script>
<script src="/js/recommended_movie.js" ></script>


 <title></title>   

</head>

<div class="page">



  <div class="movie_container row">

      
      
      
      
      <div  class="col-sm-8">
           
 <div class="rounded col-sm-12">

<div style="margin-left: -20px;" class=" col-sm-3">
<img id="poster" class="img-responsive"><br>
        </div>

<div class=" col-sm-8">
<h4 class="no_margin_bottom">
    <label class="no_margin_bottom"  id="movie_title">  </label> 
      <span id="links" ></span> 
    </h4>
        <span id="pages"></span>
    
    <small class="small">
     <span id="date"></span> - 
        Length: <span id="length"></span> -
        Popularity: <span id="popularity"> </span> - 
        Vote Count: <span id="votes"> </span>
       <span id="vote_average" align='center'>Scored: </span>  

    </small>
<br> 
<br>
<label>Genres: </label><span id="ges"></span><br>
<label>Production: </label><span id="production"></span><br>


<h4 id="bio"></h4>
    
<div class="borderd col-sm-9">
<div class="col-sm-5">    <button id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="dropdown-toggle  btn btn-success">completed  <span class="caret"></span></button>
    
 <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li data-id="completed" class="drp"><a href="#">Completed</a></li>
    <li data-id="watchlist" class="drp"><a href="#">Watchlist</a></li>
    <li data-id="dropped" class="drp"><a href="#">Dropped</a></li>
      <li role="separator" class="divider"></li>
    <li data-id="completed" class="delete"><a href="#"><i class="fa fa-trash-o fa-fw"></i>Delete </a></li>
    </ul></div>
    
<div class="rating col-sm-4"> 
<div class="center-block">
  <i data-rating="1" class="fa fa-star-o"></i>
  <i data-rating="2" class="fa fa-star-o"></i>
  <i data-rating="3" class="fa fa-star-o"></i>
  <i data-rating="4" class="fa fa-star-o"></i>
  <i data-rating="5" class="fa fa-star-o"></i>

</div>
</div>

  <input id="score" type="hidden" value=" ">  
  <input id="status" type="hidden" value="">  
</div>
</div>
        </div><!-- movie phot and details here -->
       
     
     


      
            <!-- 
******************************************
*                                        *
*  add movie to list or update status    *
*                                        *
******************************************
 -->
      

      
      
      
      
      <!-- 
******************************************
*                                        *
*  who from my following wathced this    *
*   if none dont diplay                  *
******************************************
 -->
   <div class="rounded col-sm-12">
    Similar Movies: <br>
       <div class="col-sm-6">
           <div  id="similar_movies"> </div>
       </div> 
       <div class="col-sm-6">
           <div  id="best_match"> </div>
       </div>
       
      </div> 
          
          
      <div class="rounded col-sm-12">
    
     @include('layouts.textarea');
       
      </div> 
      
      
      <!-- 
******************************************
*                                        *
*  here i should display all tweets a    *
*   for the certain movie                *
******************************************
 -->
   <div  class="rounded col-sm-12">
@if($posts == '[]')
       <p class="text-muted text-center">  This movie has no reviews yet.. be the first one though.  </p>
@endif
       
@foreach($posts as $post)        
   <div class="post_container">   
    <div style="background-color:white" class="col-xs-12">
        <div class="col-xs-1">
            <img src="/storage/{{$post->user->email}}/{{$post->user->pic}}" width="50" height="50" class="img-rounded">
            </div>
                <div class="col-xs-10">
                    <h5><span id="user">{{$post->user->name}} </span>
                        <span>
                            <small id="rate"> </small>

                            <small id="date" > - {{$post->created_at}} </small> 
                        </span>
                    </h5>
                <hr style="margin: -2px;">
                <div id="post"> {{$post->tweet}} </div>      
            </div>  
        </div>    
    </div>
   @endforeach 



      </div>
      
          
      </div><!-- end th eleft comlumn col-sm-8-->
      
      
                  <!-- 
******************************************
*                                        *
*  the right side colomun                *
*                                        *
******************************************
 --> 
      
      
      
    
          
                <!-- 
******************************************
*                                        *
*  statistics about the movie            *
*                                        *
******************************************
 --> 
 
      
      <div id="people_also_liked" class="col-sm-4">

         <input id="recommended" type="hidden" value="{{$recommended}}">
          
    </div>
      
   
 
      
      
      
      
      
      
      
    </div><!-- end row -->

</div>

@endsection
