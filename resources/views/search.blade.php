@extends('layouts.app')

@section('content')
<head>
<script src="/js/search.js"></script>

</head>
<div class="page container">
    <div class="row">
        <div >
            <div class="panel panel-default">
                <div class="bar search_bar_label panel-"><label> Searching for...{{$movie_name}} </label></div>

                <div class="search_bar panel-body">
                    <div class="col-sm-8"> 
                        <input value="{{$movie_name}}" type="search" class="form-control"> 
                    </div>
                    <br><hr>
                <div id="loop"><img  id="big_load" > </div>
                    All Data Rights Reserved for TMDB
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
