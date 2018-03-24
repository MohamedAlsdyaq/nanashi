@extends('layouts.app')

@section('content')
<head>
<script src="/js/browse.js"></script>

</head>
<div class="page container">
    <div class="row">
        <div >
            <div class="panel panel-default">
                <div class="bar search_bar_label panel-"><label id="searching"> Searching for... Movies </label></div>

                <div class="search_bar panel-body">
                    <div class="col-sm-8"> 
                     
                    </div>
                    <br><hr>
                <div id="loop"><img  id="big_load" > </div>
                    All Data Rights Reserved for TMDB
                </div>
            </div>
        </div>
    </div>
</div>
<input id="genre" type="hidden" value="{{$id}}">
@endsection
