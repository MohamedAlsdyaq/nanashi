$(document).ready(function(){
   
var movie_id = window.location.href;
movie_id = movie_id.split('movie/');
movie_id = movie_id[1].split('?');
movie_id = movie_id[0];
    
   // var url = 'http://api.themoviedb.org/3/movie/'+movie_id+'?api_key=54f297aa644bf4f27044771fc75cbb64';
        var url = 'https://api.themoviedb.org/3/movie/'+movie_id+'/recommendations?api_key=54f297aa644bf4f27044771fc75cbb64&language=en-US&page=1';
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
                console.log(ajax.results[0]);

                
var pic = 'http://image.tmdb.org/t/p/w500'+ajax.results[0].poster_path;
var name = ajax.results[0].title;
var bio = ajax.results[0].overview;
var date = ajax.results[0].release_date;
var id = ajax.results[0].id;

console.log(id);
var href = '<a href="/movie/'+id+'">';
                

 $('#people_also_liked').html(' <div class="col-sm-12 rounded"> <div class="col-sm-12"> <div class="center col-sm-12 col-centered"><a href="/movie/'+id+'"> <img src="'+pic+'" width="120" height="190"> </a></div> <div class="text-center"> <h5> <a href="/movie/'+id+'">'+name+' </a> <small><span class="text-muted">('+date+')</span><small></h5> </div> </div> <div class="col-sm-12"> <h5> <small>'+bio+'</small></h5> </div> </div>');
   }
    
});//end ajax
    
    

    
});