//get the movie Id from the url
var movie_id = window.location.href;
movie_id = movie_id.split('movie/');
movie_id = movie_id[1].split('?');
movie_id = movie_id[0];

var url = 'http://api.themoviedb.org/3/movie/'+movie_id+'?api_key=54f297aa644bf4f27044771fc75cbb64';

$.ajax({
            type: 'GET',
            url: url,
            async: false,
            jsonpCallback: 'testing',
            contentType: 'application/json',
            dataType: 'jsonp',
            beforeSend: function() {
      //  $('#load').attr("src", "img/ring.gif");
            },
            success: function(ajax) {
                console.log(ajax);
var pic = 'http://image.tmdb.org/t/p/w500'+ajax.poster_path
var name = ajax.title;
var length = ajax.runtime;
var id = ajax.id;

var bio = ajax.overview;
var score = ajax.vote_average;
var vote = ajax.vote_count;
var popularity = ajax.popularity;
var date = ajax.release_date;
                

         
for(i=0; i<ajax.production_companies.length; i +=1){
    $('#production').append('<u> '+ ajax.production_companies[i].name+'</u>');
    $('#production').append(', ');
    
    }

for(i=0; i<ajax.genres.length; i +=1){        
          $('#ges').append('<u> '+ajax.genres[i].name+'</u>');
          $('#ges').append(', ');
    }
                


var imdb = '<a href="http://www.imdb.com/title/'+ajax.imdb_id+'"> IMDB </a>';
var homepage = '<a href="'+ajax.homepage+'"> Movie Page </a>';


            $('#poster').attr('src', pic); 
            $('#movie_title').html(name);
            $('title').html(name+' | Nanashi');
            $('#links').html(imdb+' . '+homepage);
            $('#bio').html(bio);
            $('#length').html(' '+length+' minute(s)') ;
            $('#date').html(' '+date) ;
            $('#vote_average').append(score) ;
            $('#popularity').html(popularity) ;
            $('#votes').html(vote) ;
                
       $('#movie_name').val(name);         
       $('#movie_id').val(id);         
       $('#movie_pic').val(pic); 
         
for(i=0; i<ajax.genres.length; i +=1){        
        
             
       $('#movie_g'+i).val(ajax.genres[i].name);         
      
          }
       $('#movie_date').val(date);         
       $('#movie_rate').val(score);         
       $('#movie_bio').val(bio);         
       $('#movie_length').val(length);                

           // $('#movie_date').html(data) ;
            
                
            }//end ajax success
    
});//end ajax

var url = 'https://api.themoviedb.org/3/movie/'+movie_id+'/similar?api_key=54f297aa644bf4f27044771fc75cbb64';
$.ajax({
            type: 'GET',
            url: url,
            async: false,
            contentType: 'application/json',
            dataType: 'jsonp',
            success: function(ajax) {

            //console.log(ajax);
var pic = 'http://image.tmdb.org/t/p/w500'+ajax.results[0].poster_path
var name = ajax.results[0].title;
var id = ajax.results[0].id;                
var bio = ajax.results[0].overview;                
var date = ajax.results[0].release_date;                
                
        $('#best_match').html('<a href="/movie/'+id+'"><div class="col-sm-5"><img src="'+pic+'" width="140" height="200"> <br> <button class="margin-xm btn btn-xm btn-success">Add o Watchlist</button></a></div><div class="col-sm-7"> <h5> <a href="/movie/'+id+'">'+name+' </a> <span class="text-muted">('+date+')</span></h5> <h5 class="text-muted"> </h5><h5>'+bio+'<h5><div>') ;      
                
        var content =  document.getElementById('similar_movies');   
            
        for(i=1; i<9; i += 1){
var pic = 'http://image.tmdb.org/t/p/w500'+ajax.results[i].poster_path
var name = ajax.results[i].title;
var id = ajax.results[i].id;

content.innerHTML += '<a href="/movie/'+id+'" ><img width="80" height="120" class="margin-xs" src="'+pic+'" > <a>';
                }//end loop
                
            }//end ajax success
    
});//end ajax



function make_input(name, str){
 var data = '<input name="'+name+'" value="'+str+'" type="hidden">';
    return data;
}

// initialize with defaults


 
