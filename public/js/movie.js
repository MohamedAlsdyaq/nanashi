//get the movie Id from the url
function imageExists(image_url){

    var http = new XMLHttpRequest();

    http.open('HEAD', image_url, false);
    http.send();

    return http.status != 404;

}

var movie_id = window.location.href;
movie_id = movie_id.split('movie/');
movie_id = movie_id[1].split('?');
movie_id = movie_id[0];

var url = 'http://api.themoviedb.org/3/movie/'+movie_id+'?api_key=54f297aa644bf4f27044771fc75cbb64&append_to_response=videos,images,keywords,similar,credits,recommendations';

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
var backdrop = 'http://image.tmdb.org/t/p/w500'+ajax.backdrop_path;
var bio = ajax.overview;
var score = ajax.vote_average;
var vote = ajax.vote_count;
var popularity = ajax.popularity;
var date = ajax.release_date;
if(ajax.videos.results[0].key)
var video = 'https://www.youtube.com/watch?v='+ajax.videos.results[0].key;
if(ajax.keywords.keywords)
var tags = ajax.keywords.keywords;
if(ajax.images.posters)
var images = ajax.images.posters;
if ( ajax.credits.cast) 
var cast =  ajax.credits.cast;
if(ajax.credits.crew)
var crew =  ajax.credits.crew;

var image_url, checker;
if(crew){
for(i=0; i<cast.length/2; i += 1){

image_url = "http://image.tmdb.org/t/p/w500"+cast[i].profile_path+"";

 $.get(image_url)
  .done(function() { 
      checker = true;
     
  }).fail(function() { 
       checker = false;
  })
if(checker = true)
  $('.staff').append('<div class="app-img-wrapper">  <a href="http://kenwheeler.github.io/slick/img/fonz1.png" class="app-img-link" title="Image 1"><img src="http://image.tmdb.org/t/p/w500'+cast[i].profile_path+'" class="img-responsive app-img" alt="App"><h4 class="app-img-text">'+cast[i].character + ' (<small>'+cast[i].name+'</small>)'+'</h4></a></div> ');
else
  continue;
}


for(i=0; i<crew.length/2; i += 1){

image_url = "http://image.tmdb.org/t/p/w500"+crew[i].profile_path+"";

 $.get(image_url)
  .done(function() { 
      checker = true;   
  }).fail(function() { 
       checker = false;
  })
if(checker = true)
  $('#crew').append('<div class="app-img-wrapper">  <a href="http://kenwheeler.github.io/slick/img/fonz1.png" class="app-img-link" title="Image 1"><img src="http://image.tmdb.org/t/p/w500'+crew[i].profile_path+'" class="img-responsive app-img" alt="App"><h4 class="app-img-text">'+crew[i].name + ' (<small>'+crew[i].job+'</small>)'+'</h4></a></div> ');
else
  continue;

}


if(images[12]){
for(i=0; i<13; i += 1){

  $('#gallery_photos').append('<a href="http://image.tmdb.org/t/p/w500'+images[i].file_path+'"" data-lity  ><img class="max" src="http://image.tmdb.org/t/p/w500'+images[i].file_path+'"></a>');

}
}
else
  $('#gallery_photos').html('<div class="col-sm-12"> <h4>No Images Found for This Movie</h4>')

} //  @@ if images exsists !!

if(video)
$('#video').attr('href', video);
         
for(i=0; i<ajax.production_companies.length; i +=1){
    $('#production').append('<u> '+ ajax.production_companies[i].name+'</u>');
    $('#production').append(', ');
    
    }

for(i=0; i<ajax.genres.length; i +=1){        
          $('#ges').append('<u> '+ajax.genres[i].name+'</u>');
          $('#ges').append(', ');
    }
    console.log(tags[0].name)
  for(i=0; i<tags.length; i++){
          $('#tagz').append(' <li><span class="tag">'+tags[i].name+'</span></li>')
   }          


var imdb = '<a href="http://www.imdb.com/title/'+ajax.imdb_id+'"> IMDB </a>';
var homepage = '<a href="'+ajax.homepage+'"> Movie Page </a>';


            $('#poster').attr('src', pic); 
            $('#backdrop').css('background-image', 'url('+backdrop+')'); 
            $('#movie_title').html(name);
            $('title').html(name+' | Nanashi');
            $('#links').html(imdb+' . '+homepage);
            $('#bio').html(''+bio);
            $('#length').html(' '+length+' minute(s)') ;
            $('#date').html(' '+date) ;
            $('#vote_average').append(score) ;
            $('#popularity').html(popularity) ;
            $('#votes').html(vote) ;
                
       $('#movie_name').val(name);         
       $('.movie_id').val(id);         
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

