@extends('layouts.app')

@section('content')
<head>
<script src="https://www.jqueryscript.net/demo/Simple-jQuery-Image-Zoom-Pan-Crop-Plugin-Cropit/dist/jquery.cropit.js"></script>
<meta name="_token" content="{!! csrf_token() !!}"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/lity/2.2.2/lity.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/lity/2.2.2/lity.min.js"></script>
<script src="/js/upload_img.js" ></script>
<script src="/js/date.js" ></script>

<script src="/js/user_tweets.js" ></script>
<script src="/js/textarea.js" ></script>
<script src="/js/follow.js" ></script>
<script src="/js/update_img.js"></script>
<div>

<div id="container">
  
    <div style="background-image: url(/storage/{{$profile_owner->id}}/header.jpg);" class="col-sm-12" id="header">

<div  class="row col-sm-3" id="user">
      <div class="col-sm-6 image-editor">
 @if(isset(Auth::user()->id) && $profile_owner->id == Auth::user()->id)    
        

        {{csrf_field()}}

        <a href="/test" data-lity>
        <img id="profile-image" class="self  avatar"  src="/storage/{{$profile_owner->id}}/{{$profile_owner->pic}}"> 
        </a>

        

        @else
        <img id="profile-image" class="avatar"  src="/storage/{{$profile_owner->id}}/{{$profile_owner->pic}}">   

        @endif   
        </div>
      <div class="col-sm-6">
  
  <h2 class="text-center name">  {{$profile_owner->name}}</h2>    
  <br>      
  @if(isset(Auth::user()->id) &&  $profile_owner->id != Auth::user()->id)
        
        @if($are_we_friends == '[]' || $are_we_friends == false)
            <button id="follow_button" class="follow btn btn-lg btn-block btn-success">Follow</button>
        @else()
            <button onmouseover="hover(this)" onmouseout="unhover(this)" id="follow_button" class="unfollow btn btn-lg btn-block ">Followed</button>
        @endif
    @else

    
   
    @endif
      </div> 


    </div>

    </div>


<div class="row">
<div class="col-sm-9">
        
        <div class="col-sm-9">
          @if(isset(Auth::user()->id) &&  $profile_owner->id == Auth::user()->id)
            @include('layouts.textarea');
           @endif   
        </div>  
<!-- /************************************
*                                        *
*                                        *
*   TWEETS GOES HERE                     *  
*                                        *
*                                        *
******************************************-->
   


 <div id="posts" >    </div>


  </div>





<div class="col-sm-3 row">
  <p>About me
  <hr>
  <div class="boxes">
 {{$profile_owner->bio}}
  </div>

  <div class="boxes">
    <ul class="ul">
          
               @if($profile_owner->place != '-' &&  $profile_owner->place != null)
                    Lives in {{$profile_owner->place}}
              @endif
    </ul>
  </div>

  <br>

  

  
  <div class="boxes col-sm-12">
    <p>Favorites</p><hr class="no_margin">
      
  
  </div>

  <div class="boxes col-sm-12">
    <p>badges</p>
    <hr class="no_margin">
    <h6 class="center"><small> No badges awarded yet! </small> </h6>  
  </div>

  <div class="boxes col-sm-12">
    <p>Summary</p>  
    <hr class="no_margin">
  </div>

  

</div>

</div>

</div>

<input id="user_id" type="hidden" value="{{$profile_owner->id}}">
<div id="snackbar">Post sent !</div>
@endsection

