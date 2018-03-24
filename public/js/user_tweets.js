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
          var profiile_picture = $('#profile-image').attr('src');
            for(i=0; i<=post.length; i+= 1){
              comment = " ";
    if(post[i]["type"] == '2'){
      var variable = 'has watched ';
    }
    else{
      var variable = ' Wrote a comment on ';
      var comment = post[i]["tweet"];
    }

   var content = '<div class="row action_taken col-sm-11"><a href="/movie/'+post[i]["movie_id"]+'"><img src="'+profiile_picture+'" class="usr_pic img-circle"></a><a href="#"> '+post[i].name+'</a> '+variable+' <a href="/movie/'+post[i]["movie_id"]+'">'+post[i]["movie"]["movie_name"]+'</a><br>'+comment+'</div>';
   var date = post[i]['created_at'];
   date = date.split(" ");
   date = date[0];             
        //display.innerHTML += '<div class="col-sm-12 rounded" style="background-color:white"> <div class="col-sm-2"> <img width="70" height="100" src="'+post[i]["movie"]["movie_pic"]+'"> </div> <div class="col-sm-9"> <h4>'+post[i]["movie"]["movie_name"]+'</h4> <hr style="margin: -2px;"> <div class="col-sm-2"> <img width="40" hieght="40" class="img-circle" src="'+profiile_picture+'"> </div> <div class="col-sm-10"> '+post[i].tweet+'  </div> </div> </div>';
       // display.innerHTML += ' <div class="rounded col-sm-12"  style="background-color:white"> <div class="col-sm-2"><img width="70" height="100" src="'+post[i]["movie"]["movie_pic"]+'"> </div> <div class="col-sm-9"> <p>'+post[i].name+' has Watched <a href="/movie/'+post[i]["movie_id"]+'">'+post[i]["movie"]["movie_name"]+'</a> </p> <hr style="margin: -2px;"> <div class="col-sm-2"> <img width="40" hieght="40" class="img-circle" src="'+profiile_picture+'"> </div> <div class="col-sm-10"> '+post[i].tweet+' </div> </div> </div> ';
        display.innerHTML +=  '<div class="col-sm-9 event_container row" ><div class="col-sm-3"><a href="/movie/'+post[i]["movie_id"]+'"><img class="sample" src="'+post[i]["movie"]["movie_pic"]+'"></a></div><div id="details" style="background-color: white " class="row col-sm-9"><div class="col-sm-12"><p><a href="/movie/'+post[i]["movie_id"]+'"> '+post[i]["movie"]["movie_name"]+' </a> </p></div><div class="col-sm-1"><h5><small>date</small></h5>'+date+' <div style="color: #727272; border-left:1px solid #727272;height:115px"></div></div>'+content+'</div></div>';
     
            }// @end LOOPs   
        }// end success
        
        
    });

 
    
  });
  
