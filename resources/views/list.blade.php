@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12 ">
            
            <div class="panel panel-default">
                <div class="bar panel">Watched</div>

                <div class="panel-body">
                    
           <div class="col-sm-1"> Cover</div>    
            <div class="col-sm-2"> Title</div>    
            <div class="col-sm-1"> Average</div>    
            <div class="col-sm-1"> Score</div>    
            <div class="col-sm-1"> length</div>    
            <div class="col-sm-1"> Added</div>    
            <div class="col-sm-2"> Released_at</div>    
            <div class="col-sm-2"> Genres</div><br>
                    <hr class="hr_no_margin">
        @foreach($data as $d) 
            <?php $dat = explode(' ', $d->created_at); ?>
            <div class="list_tag custom_font col-sm-12">
<div class="col-sm-1"> <img height="100" width="65" src="{{$d->movie->movie_pic}}"> </div>    
            <div class="col-sm-2"><h5> {{$d->movie->movie_name}}</h5></div>    
            <div class="col-sm-1"> {{$d->movie->movie_rate}}</div>    
            <div class="col-sm-1"> {{$d->score}}</div>    
            <div class="col-sm-1"> {{$d->movie->movie_length.".m"}}</div>    
            <div class="col-sm-1"><h6> <small>{{$dat[0]}} </small></h6> </div>    
            <div class="col-sm-2"> <h6> <small>{{$d->movie->movie_date}} </small></h6></div>    
                        <div class="col-sm-2"><h5><u> {{$d->movie->genre1.' '.$d->movie->genre2.' '.$d->movie->genre3}}</u></h5></div>  
                    </div>
                        <br> 

                        
       @endforeach             
                </div>
            </div>
            
            <div class="panel panel-default">
                <div class="bar panel">Watchlist</div>

                <div class="panel-body">
                    
                   <div class="col-sm-1"> Cover</div>    
            <div class="col-sm-2"> Title</div>    
            <div class="col-sm-1"> Average</div>    
            <div class="col-sm-1"> Score</div>    
            <div class="col-sm-1"> length</div>    
            <div class="col-sm-1"> Added</div>    
            <div class="col-sm-2"> Released_at</div>    
            <div class="col-sm-2"> Genres</div> <br>   
                  <hr class="hr_no_margin">
        @foreach($watchlist as $d) 
            <?php $dat = explode(' ', $d->created_at); ?>
            <div class="list_tag custom_font col-sm-12">
<div class="col-sm-1"> <img height="100" width="65" src="{{$d->movie->movie_pic}}"> </div>    
            <div class="col-sm-2"><h5> {{$d->movie->movie_name}}</h5></div>    
            <div class="col-sm-1"> {{$d->movie->movie_rate}}</div>    
            <div class="col-sm-1"> {{$d->score}}</div>    
            <div class="col-sm-1"> {{$d->movie->movie_length.".m"}}</div>    
            <div class="col-sm-1"><h6> <small>{{$dat[0]}} </small></h6> </div>    
            <div class="col-sm-2"> <h6> <small>{{$d->movie->movie_date}} </small></h6></div>    
                        <div class="col-sm-2"><h5><u> {{$d->movie->genre1.' '.$d->movie->genre2.' '.$d->movie->genre3}}</u></h5></div>  
                    </div>
                        <br> 

                        
       @endforeach                 
                </div>
            </div>
            
            
            
            
            <div class="panel panel-default">
                <div class="bar panel">Dropped</div>

                <div class="panel-body">
                    
                   <div class="col-sm-1"> Cover</div>    
            <div class="col-sm-2"> Title</div>    
            <div class="col-sm-1"> Average</div>    
            <div class="col-sm-1"> Score</div>    
            <div class="col-sm-1"> length</div>    
            <div class="col-sm-1"> Added</div>    
            <div class="col-sm-2"> Released_at</div>    
            <div class="col-sm-2"> Genres</div> <br>   
              <hr class="hr_no_margin">
        @foreach($dropped as $d) 
            <?php $dat = explode(' ', $d->created_at); ?>
            <div class="list_tag custom_font col-sm-12">
<div class="col-sm-1"> <img height="100" width="65" src="{{$d->movie->movie_pic}}"> </div>    
            <div class="col-sm-2"><h5> {{$d->movie->movie_name}}</h5></div>    
            <div class="col-sm-1"> {{$d->movie->movie_rate}}</div>    
            <div class="col-sm-1"> {{$d->score}}</div>    
            <div class="col-sm-1"> {{$d->movie->movie_length.".m"}}</div>    
            <div class="col-sm-1"><h6> <small>{{$dat[0]}} </small></h6> </div>    
            <div class="col-sm-2"> <h6> <small>{{$d->movie->movie_date}} </small></h6></div>    
                        <div class="col-sm-2"><h5><u> {{$d->movie->genre1.' '.$d->movie->genre2.' '.$d->movie->genre3}}</u></h5></div>  
                    </div>
                        <br> 

                        
       @endforeach                     
                </div>
            </div>
            
            
            
        </div>
    </div>
</div>
@endsection
