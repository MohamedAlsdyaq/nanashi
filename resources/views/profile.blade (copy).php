@extends('layouts.app')

@section('content')
<head>
<script src="https://www.jqueryscript.net/demo/Simple-jQuery-Image-Zoom-Pan-Crop-Plugin-Cropit/dist/jquery.cropit.js"></script>
<meta name="_token" content="{!! csrf_token() !!}"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/lity/2.2.2/lity.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/lity/2.2.2/lity.min.js"></script>
<script src="/js/upload_img.js" ></script>

<script src="/js/user_tweets.js" ></script>
<script src="/js/textarea.js" ></script>
<script src="/js/follow.js" ></script>
<script src="/js/update_img.js"></script>

 <!-- @@ Adding LESS -->   


<style>
    .header{
        background-image: url(/storage/{{$profile_owner->id}}/header.jpg) ;
  
    }  
    .panel-body{
        padding: 10px;
    }

</style>
      {!! Charts::assets() !!}
</head>
<div class="page">
<div class="header col-sm-12 landing">

<!-- 

HERE LIES THE HEADER IMAGE 
-->

<div class="col-sm-1"></div>



<div  class="col-sm-2">
    
 @if(isset(Auth::user()->id) && $profile_owner->id == Auth::user()->id)    


<!--
<img id="profile-image" class="  avatar"  src="/storage/{{$profile_owner->id}}/{{$profile_owner->pic}}"> 

-->
<div class="image-editor">

<form action="/profile/edit/{{$profile_owner->id}}" method="post" enctype="multipart/form-data"> 
    {{csrf_field()}}

     <a href="/test" data-lity>
  <img id="profile-image" class="self  avatar"  src="/storage/{{$profile_owner->id}}/{{$profile_owner->pic}}"> 
    </a>

<div style="display: none" id="data"></div>
</form>
</div>




@else
  <img id="profile-image" class="avatar"  src="/storage/{{$profile_owner->id}}/{{$profile_owner->pic}}">   
    
@endif    
    
</div>
    

<div class="col-sm-2 col-sm-offset-4">
    @if(isset(Auth::user()->id) &&  $profile_owner->id != Auth::user()->id)
        
        @if($are_we_friends == '[]' || $are_we_friends == false)
            <button id="follow_button" class="follow btn btn-lg btn-block btn-success">Follow</button>
        @else()
            <button onmouseover="hover(this)" onmouseout="unhover(this)" id="follow_button" class="unfollow btn btn-lg btn-block ">Followed</button>
        @endif
    @else

    
   
    @endif
</div>
    
</div> <!-- end header section -->
<div class="col-sm-12" id="white_blank_space">
<div class="col-sm-3">
  <h2 class="text-center name">  {{$profile_owner->name}}</h2>    
</div>
 
</div>

<div class="container">

    <div class="row">
        
        <div class="col-sm-5 left">
            
            <div class="panel panel-default">
                <div class="text-center panel-heading">About 
                    {{$profile_owner->name}}
                    </div>

                <div class="panel-body">
                    <h5>{{$profile_owner->bio}}</h5>
                  
               @if($profile_owner->place != '-' &&  $profile_owner->place != null)
                    Lives in {{$profile_owner->place}}
              @endif
                </div>
            </div>
            <!--
                DISPLAY FAVORITE MOVIES
            -->





            
            <div class="panel panel-default">
                <div class="text-center panel-heading"> Movies Breakdown </div>
                <div class="panel-body">
                  @if(!empty($acheviments))
                      {!! $chart->render() !!}
                    @endif
                    <hr class="hr_no_margin">
                    <div class="col-sm-2">
                        <img style="height: 35px; width: 40px; z-index: -1" class="eye-img" src="/storage/eye.png"> </div>
                    
                    <div class="col-sm-10">
                     <span> <h4>I've watched <span id="statistics"> {{$statistic}} </span> days of movies. </h4> </span>
                    </div>
                
                    
                   
                    
                </div>
            </div>  
            
          @if($acheviments['counting'] >= 3)   
            <div class="panel panel-default">
                <div class="text-center panel-heading"> Achievements </div>
                <div class="panel-body">
                  
                @if($acheviments['counting'] >= 3)
                             
                    <img  class="achevment-img img-responsive" src="/storage/action.jpg"> 
                    
        <h2 class="text-center achevment-text">ACTION MASTER </h2>
                @endif
                  
                </div>
            </div>
            @endif
            
            
            
        </div>
        
        <div class="col-sm-7">
          @if(isset(Auth::user()->id) &&  $profile_owner->id == Auth::user()->id)
            @include('layouts.textarea');
           @endif   
             
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
<input id="user_id" type="hidden" value="{{$profile_owner->id}}">
<div id="snackbar">Post sent !</div>
@endsection
