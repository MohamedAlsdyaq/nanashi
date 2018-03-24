$(document).ready(function(){
    
var g = $('#genre').val()

    
var url = 'http://api.themoviedb.org/3/',
mode = 'discover/movie?',
input = '&with_genres='+g,
key = 'api_key=54f297aa644bf4f27044771fc75cbb64';
var v =  url + mode + key + input;
$.ajax({
           type: 'GET',
            url: url + mode + key + input,
            async: false,
            jsonpCallback: 'testing',
            contentType: 'application/json',
            dataType: 'jsonp',
            beforeSend: function() { 
           console.log(v); 
         $('#big_load').attr("src", "/img/big_ring.gif");
       
            
            }, 
            success: function(ajax) {
         $('#big_load').hide();

                var display = document.getElementById('loop');
                
             if(ajax.results['length'] == 0){
          display.innerHTML += '<h3 id="main_heading" class="text-center"> No Results Found.. </h3>';
             return; 
             }
    //write down what we are searching for 
                                     
                                     
                for(i=0; i<ajax.results['length']; i+= 1){
                    
       var href = '<a href=/movie/'+ajax.results[i].id+'>';

                    
    var pic = '<div class="col-xs-2">'+href+'<img width="110" height="180" src="http://image.tmdb.org/t/p/w500'+ajax.results[i].poster_path+'"></a></div>';
                    
    var details = '<div class="col-xs-6"><label>Name:</label> '+href+ajax.results[i].title+'</a><a href="#inline"></a><br><label>Aired:</label>'+ajax.results[i].release_date+'<br><label>story summary:</label>  '+ajax.results[i].overview+'</div><!-- row --> ';
                    
    display.innerHTML += '<div  id="ro'+i+'" class="row">'+pic+details+'</div><hr><br></div>';
                    
                }//end loop
               
            } // end success 
    
    });// end ajax 
    
});
