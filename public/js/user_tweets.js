$(document).ready(function(){
    
    
var user_id = window.location.href;
user_id = user_id.split('profile/');
user_id = user_id[1];

var url = '/profile/posts/'+user_id;
$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
}); 
    
    $.ajax({
        
        url: url,
        datatype: 'JSON',
        type: 'GET',
     
        success: function(post){
   console.log(post);
            
           var display = document.getElementById('posts');
          var profiile_picture = $('#avatar').attr('src');
            for(i=0; i<3; i+= 1){
                
                display.innerHTML += '<div class="col-sm-12 rounded" style="background-color:white"> <div class="col-sm-2"> <img width="70" height="100" src="'+post[i]["movie"]["movie_pic"]+'"> </div> <div class="col-sm-9"> <h4>'+post[i]["movie"]["movie_name"]+'</h4> <hr style="margin: -2px;"> <div class="col-sm-2"> <img width="40" hieght="40" class="img-circle" src="'+profiile_picture+'"> </div> <div class="col-sm-10"> '+post[i].tweet+'  </div> </div> </div>';
                
                
            }// @end LOOPs   
        }// end success
        
        
    });

 
    
  });
  
