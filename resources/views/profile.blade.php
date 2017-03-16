@extends('layouts.app')

@section('content')
<head>
<meta name="_token" content="{!! csrf_token() !!}"/>
<script src="/js/user_tweets.js" ></script>
<script src="/js/textarea.js" ></script>
<script src="/js/follow.js" ></script>
<link rel="stylesheet" href="croppie.css" />
<script src="/js/update_img.js"></script>
    
<script>
$('.my-image').croppie();
</script>
    
<style>
    .header{
        background-image: url(/storage/{{$profile_owner->id}}/{{$profile_owner->header}}) ;
  
    }  
    .panel-body{
        padding: 10px;
    }
</style>
      {!! Charts::assets() !!}
</head>
<div class="page">
<div class="header col-sm-12">

<!-- 

HERE LIES THE HEADER IMAGE BUT NOT QUIT YET!
-->

<div class="col-sm-1"></div>
<div class="col-sm-2">
    
 @if($profile_owner->id == Auth::user()->id)    
    <input id="profile-image-upload" class="hidden" type="file">
    <img id="profile-image" class="upload avatar"  src="/storage/{{$profile_owner->id}}/{{$profile_owner->pic}}"> 
    
@else
  <img class="upload" id="avatar" src="/storage/{{$profile_owner->id}}/{{$profile_owner->pic}}">   
    
@endif    
    
</div>
    
<div class="col-sm-3">
  <h2 class="white_text">  {{$profile_owner->name}}</h2>    
</div>
 
<div class="col-sm-2 col-sm-offset-4">
    @if($profile_owner->id != Auth::user()->id)
        
        @if($are_we_friends == '[]')
            <button id="follow_button" class="follow btn btn-lg btn-block btn-success">Follow</button>
        @else()
            <button onmouseover="hover(this)" onmouseout="unhover(this)" id="follow_button" class="unfollow btn btn-lg btn-block ">Followed</button>
        @endif
    @else
     <form enctype="multipart/form-data" action="/profile/edit/{{Auth::user()->id}}" method="POST">
               
                <input   type="file" name="avatar">
         
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
         
                <input id="edit_button" class="btn btn-default btn-lg" type="submit" class="pull-right btn btn-sm btn-primary" value="Edit">
            </form>
    
   
    @endif
</div>
    
</div> <!-- end header section -->

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
                        <img class="eye-img" src="/storage/eye.png"> </div>
                    
                    <div class="col-sm-10">
                     <span> <h4>I've watched <span id="statistics"> {{$statistic}} </span> days of movies. </h4> </span>
                    </div>
                
                    
                   
                    
                </div>
            </div>  
            
            
            <div class="panel panel-default">
                <div class="text-center panel-heading"> Achievements </div>
                <div class="panel-body">
                  
                @if($acheviments['counting'] >= 3)
                             
                    <img  class="achevment-img img-responsive" src="/storage/action.jpg"> 
                    
        <h2 class="text-center achevment-text">ACTION MASTER </h2>
                @endif
                  
                </div>
            </div>
            
            
            
        </div>
        
        <div class="col-sm-7">
          @if($profile_owner->id == Auth::user()->id)
            @include('layouts.textarea');
           @endif   
             
<!-- /************************************
*                                        *
*                                        *
*   TWEETS GOES HERE                     *  
*                                        *
*                                        *
******************************************-->
      <div id="posts"></div>
            
        </div>
        
    </div><!-- END ROW -->
    
</div>
</div>
<input id="user_id" type="hidden" value="{{$profile_owner->id}}">
<div id="snackbar">Post sent !</div>
@endsection
