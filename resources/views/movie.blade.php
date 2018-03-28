@extends('layouts.app')

@section('content')
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="/css/starrr.css">

<link href="https://cdnjs.cloudflare.com/ajax/libs/lity/2.2.2/lity.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/lity/2.2.2/lity.min.js"></script>
<script src="/js/starrr.js" ></script>  
<script src="/js/textarea.js" ></script>
<script src="/js/movie.js" ></script>
<script src="/js/video.js" ></script>
<script src="/js/toggle.js" ></script>


<link rel="stylesheet" href="/css/jquery.fancybox-1.3.4.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <title></title>   

</head>

<div class="">
<div id="backdrop" class=" col-sm-12 landing">
</div>



<div  class="col-sm-3">
       <img id="poster" class="img-responsive"><br>
</div>
    

 

    
</div> <!-- end header section -->
<div class="up col-sm-12" id="white_blank_space">
</div>

<div class=" up col-sm-12" >

<div class="col-sm-3 "> <!-- @@ BLANK SPACE  --></div>
<div class="col-sm-6 "> 



<div class="tab">
  <button class="active tablinks" onclick="toggle(event, 'summary')">Summary</button>
  <button class="tablinks" onclick="toggle(event, 'gallery')">Gallery</button>
  <button class="tablinks" onclick="toggle(event, 'Recommendation')">Recommendation</button>
  <button class="tablinks" onclick="toggle(event, 'staff')">Staff</button>
</div>


  
</div>
</div>


<div style="display: none;" id="gallery" class="common ">
<div class="container">

<div id="gallery_photos">
</div>


</div>

  
</div>
<div id="Recommendation" class="common ">


  
</div>
<div style="display: none" id="staff" class="common ">
<div class="container">
<div class="col-sm-12"><h4> Staff </h4></div>

<div class="staff">
  
</div>

<h4>Crew</h4>

<div id="crew"></div>

  </div>
</div>

<div id="summary" class="common  container">

                                <div class="row">

                                <div class="col-sm-3"> 


                                <div class="col-sm-3">  
                                <button id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="dropdown-toggle  btn btn-success">Watched  <span class="caret"></span></button>

                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <li data-id="completed" class="drp"><a href="#">Watched</a></li>
                                <li data-id="watchlist" class="drp"><a href="#">Watchlist</a></li>
                                <li role="separator" class="divider"></li>
                                <li data-id="completed" class="delete"><a href="#"><i class="fa fa-trash-o fa-fw"></i>Delete </a></li>
                                </ul>

                                <div class="rating c"> 
                                <div class="center-block">
                                <i data-rating="1" class="fa fa-star-o"></i>
                                <i data-rating="2" class="fa fa-star-o"></i>
                                <i data-rating="3" class="fa fa-star-o"></i>
                                <i data-rating="4" class="fa fa-star-o"></i>
                                <i data-rating="5" class="fa fa-star-o"></i>
                                </div>
                                </div>


                                </div>
                                <input id="score" type="hidden" value=" ">  
                                <input id="status" type="hidden" value="">  
                                <input value="" type="hidden" class="movie_id">


                                </div>

                                <div class="col-sm-6">

                                <div class=""    id="">
                                <label class="no_margin_bottom"  id="movie_title">  </label>  
                                <div id="bio"></div >
                                <br>
                                <label class=""  > Keywords </label>  
                                <ul class="tags">
                                <div id="tagz"></div>
                                </ul>
                                </div>

                                <hr>

                                @if(isset(Auth::user()->id ) )
                                <div class="write col-sm-12">

                                @include('layouts.textarea');

                                </div> 
                                @endif

                                <div  class="rounded col-sm-12">
                                @if($posts == null)
                                <p class="text-muted text-center">  This movie has no reviews yet.. be the first one though.  </p>
                                @endif

                                @foreach($posts as $post)        
                                <div class="post_container">   
                                <div style="background-color:white" class="col-xs-12">
                                <div class="col-xs-2">
                                <img src="/storage/{{$post->user->id}}/{{$post->user->pic}}" width="50" height="50" class="img-rounded">
                                </div>
                                <div class="col-sm-10">
                                <h5><span id="user">{{$post->user->name}} </span>
                                <span>
                                <small id="rate"> </small>

                                <small id="date" > - {{$post->created_at}} </small> 
                                </span>
                                </h5>
                                <hr style="margin: -2px;">
                                <div id="post"> {{$post->tweet}} </div> 
                                <hr>     
                                </div>  
                                </div>    
                                </div>
                                @endforeach 



                                </div>


                                </div> <!-- @@ End of col-sm-6 Midle -->


                                <div class="col-sm-3 float-right">
                                    
                                <a id="video" href="" data-lity>
                                <img class="trailer " src="/storage/trailer.png">
                                </a> 

                                <div class="panel panel-default">
                                <div class="text-center panel-heading">Movie Details 



                                </div>

                                <div class="panel-body">

                                <div class="movie_details more">

                                <p> Length: <span id="length"></span> 
                                <p>Popularity: <span id="popularity"> </span> 
                                <p> Vote Count: <span id="votes"> </span>
                                <span id="vote_average" align='center'>
                                <p>Scored: </span>  
                                <label>Genres: </label><span id="ges"></span><br>
                                <label>Production: </label><span id="production"></span><br>
                                <span id="links" ></span> 
                                <span id="pages"></span>

                                </div>

                                </div>
                                </div>





                                </div>



                                <!-- /************************************
                                *                                        *
                                *                                        *
                                *   TWEETS GOES HERE                     *  
                                *                                        *
                                *                                        *
                                ******************************************-->
                                <div >

                                <div id="posts" class=" col-sm-12">


                                </div>


                                </div>

                                </div>

 </div><!-- END ROW -->
    
</div>

</div>

@endsection
