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
             <h4>Box Office:</h4> 
                <hr class="hr_no_margin">
                
           <div id="loop"></div>
                
        </div> 
            
            <form action="/search" method="get" role="search">
               
                <div class="search">
     <br>
                </div>
             </form>
            
               
                <br><br>
                <div class="">
                <h4 class="text-center">Trending</h4>
                    <hr class="hr_no_margin">
                 <div class="col-sm-12 rounded">
                @foreach($top as $top)    
                    
               <div class="col-sm-2">
              <a href="/movie/{{$top->movie_id}}" >  
               <img width="80" height="120" src="{{$top->movie_pic}}" >
                   </a>
                   
                    <a href="/movie/{{$top->movie_id}}" >  
                   <h6>{{$top->movie_name}}</h6>
                   </a>
                </div>
                @endforeach
                </div>   
                </div>
                
        </div>
           
            
        <div class="col-sm-3">
            
            <div class="panel panel-default">
                <div class="panel-heading">Recommended for you..
                    </div>
                    <div class="panel-body">  
                        
                        <div id="people_also_liked">    </div>
                        
                    </div>
            </div>
            
            <div class="panel panel-default">
                <div class="panel-heading">Who To Follow..
                    </div>
                    <div class="panel-body">  
                            <div id="fsuggest"></div>
                        
                </div>
            </div>
            
             <div class="panel panel-default">
                <div class="panel-heading">Recent Update </div>
                    <div class="panel-body">  
                        @foreach($updates as $update)   
                        <div class="last_updates col-sm-11">
                            <div class="col-sm-3"> <img class="rounded-img" width="50" height="50" src="/storage/{{$update->id.'/'.$update->pic}}"></div>
                             <div class="col-sm-9">
                            <h6><a href="/profile/{{$update->user2}}">{{$update->name}}</a> has watched <a href="/movie/{{$update->id}}">{{$update->movie_name}}</a></h6>
                            <h6 class="text-muted">rated it {{$update->score}}/5</h6>
                        </div>
                     </div>
                        <hr class="hr_no_margin">
                       @endforeach 
                </div>
            </div>
            
            
        </div>
            
            
        </div>
</div>
<input type="hidden" value="{{$recommended}}" id="recommended">
@endsection
