$(document).ready(function(){
   
var movie_id = $('#recommended').val();
    console.log(movie_id);
if(movie_id){
    
    var url = 'http://api.themoviedb.org/3/movie/'+movie_id+'?api_key=54f297aa644bf4f27044771fc75cbb64';

$.ajax({
            type: 'GET',
            url: url,
            async: false,
            contentType: 'application/json',
            dataType: 'jsonp',
            beforeSend: function() {
      //  $('#load').attr("src", "img/ring.gif");
            },
            success: function(ajax) {
                console.log(ajax);
                
var pic = 'http://image.tmdb.org/t/p/w500'+ajax.poster_path
var name = ajax.title;
var bio = ajax.overview;
var date = ajax.release_date;
var id = ajax.id;

var url = window.location.href.split('/');
var href = '<a href="/movie/'+id+'">';
                
    if(url[3]){

$('#people_also_liked').html('<div class="col-sm-12 rounded"> People also Liked <br> <a href="/movie/'+id+'"><div class="col-sm-5"><img class="img-responsive" src="'+pic+'" width="140" height="200"> <br> <button class="margin-xm btn btn-xm btn-success">Add To Watchlist</button></a></div><div class="col-sm-7"> <h6> <a href="/movie/'+id+'">'+name+' </a> <span class="text-muted">('+date+')</span></h6> <h5 class="text-muted"> </h5><h6>'+bio+'<h6><div></div>');
    }//end if
        else{
            $('#people_also_liked').html(' <div class=" rounded"> <div class="col-sm-12"> <div class="center col-sm-12 col-centered"><a href="/movie/'+id+'"> <img src="'+pic+'" width="120" height="190"> </a></div> <div class="text-center"> <h5> <a href="/movie/'+id+'">'+name+' </a> <small><span class="text-muted">('+date+')</span><small></h5> </div> </div> <div class="col-sm-12"> <h5> <small>'+bio+'</small></h5> </div> </div>');
        }
            }//end ajax success
    
});//end ajax
    
    
}//end big-O-notoion 
    
});