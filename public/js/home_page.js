/*
BOX OFFICE

*/

var url = 'https://api.themoviedb.org/3/movie/now_playing?api_key=54f297aa644bf4f27044771fc75cbb64&language=en-US&page=1&region=en-US';
var url2 = 'https://api.themoviedb.org/3/movie/top_rated?api_key=54f297aa644bf4f27044771fc75cbb64&language=en-US&page=1&region=en-US';
var url3 = 'https://api.themoviedb.org/3/movie/upcoming?api_key=54f297aa644bf4f27044771fc75cbb64&language=en-US&page=1&region=en-US';


$.ajax({
            type: 'GET',
            url: url,
            async: false,
            jsonpCallback: 'testing',
            contentType: 'application/json',
            dataType: 'jsonp',
            success: function(ajax) {
                
                console.log(ajax);
          var container = document.getElementById('loop');      
         
        for(i=0; i<6; i+=1){
            
    var pic = 'http://image.tmdb.org/t/p/w500'+ajax.results[i].poster_path;
    var name = ajax.results[i].original_title;
    var id = ajax.results[i].id;
            var a = ' <a href="/movie/'+id+'">';

   
            
    container.innerHTML += ' <div class="custom_card"> '+a+' <img width="120" height="200" src="'+pic+'"></a>'+a+'<h5 class="text-center"><small>'+name+'<small><h5></a></div>';
            
            
        }//end loop
                
                
            }//end success
    
}); //end ajax

/*
BOX OFFICE

*/



$.ajax({
            type: 'GET',
            url: url2,
            async: false,
            jsonpCallback: 'testing',
            contentType: 'application/json',
            dataType: 'jsonp',
            success: function(ajax) {
                
                console.log(ajax);

          var container2 = document.getElementById('upcoming');
        for(i=0; i<6; i+=1){
            
    var pic = 'http://image.tmdb.org/t/p/w500'+ajax.results[i].poster_path;
    var name = ajax.results[i].original_title;
    var id = ajax.results[i].id;
            var a = ' <a href="/movie/'+id+'">';

            
    container2.innerHTML += ' <div class="custom_card"> '+a+' <img width="120" height="200" src="'+pic+'"></a>'+a+'<h5 class="text-center"><small>'+name+'<small><h5></a></div>';
            
            
        }//end loop
                
                
            }//end success
  
}); //end ajax




$.ajax({
            type: 'GET',
            url: url3,
            async: false,
            jsonpCallback: 'testing',
            contentType: 'application/json',
            dataType: 'jsonp',
            success: function(ajax) {
                
                console.log(ajax);

          var container3 = document.getElementById('rated');
        for(i=0; i<6; i+=1){
            
    var pic = 'http://image.tmdb.org/t/p/w500'+ajax.results[i].poster_path;
    var name = ajax.results[i].original_title;
    var id = ajax.results[i].id;
            var a = ' <a href="/movie/'+id+'">';

            
    container3.innerHTML += ' <div class="custom_card"> '+a+' <img width="120" height="200" src="'+pic+'"></a>'+a+'<h5 class="text-center"><small>'+name+'<small><h5></a></div>';
            
            
        }//end loop
                
                
            }//end success
            ,
            error: function (xOptions, textStatus) {
                console.log(textStatus);
            }
    
}); //end ajax