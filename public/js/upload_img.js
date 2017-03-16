
$(document).ready(function(){



var suggest = new XMLHttpRequest();
suggest.onreadystatechange = function () {
  if(suggest.readyState === 4 && suggest.status === 200) {
    var susers = JSON.parse(suggest.responseText);
var limit = 3;
    for (var i=0; i<limit; i += 1) {
        
        if (i <limit){
    var id = susers[i].id;
    var herf = '<a href="/profile/'+id;
    
    var sphoto = '<div class="col-md-4 text-left  "> <div id="fimage">';
        sphoto += herf;
        sphoto += '<img  width="50" height="50" src="/';
        sphoto += '/storage/'+id+'/'+susers[i].pic+'"> </a></div>   </div>';
        
    var sname = herf;
        sname += '<div id="fname">'+susers[i].name+'</div></a>';
      
        
   var hidden = '<form id="fform_' + i + '"><input id="fnameh" name="name" type="hidden" value="' + susers[i].name + '" >';
        hidden += '<input name="id" type="hidden" value="' + susers[i].id + '" >';


var fbutton = '<button data-id="' + id + '" id=""class=" addfriend btn btn-info  btn-xs pull-right text-center" type="submit" >Follow <span class=" glyphicon glyphicon-plus" aria-hidden="true"></span> </button>';
        
    var display = document.getElementById('fsuggest');
        display.innerHTML += '<div class="col-sm-12" id="'+id+'" data-id="'+id+'" class="scroller"><div id="fspace" > <button  type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+sphoto+sname+fbutton+'</div></div>'
        
      
    
        }//end of IF statment 
        
    } //end of for loop
   console.log(susers);

  }
};
var suugestFile =   '/who_to_follow';

suggest.open('GET', suugestFile);
suggest.send();
        

}); // end of JQUERY ready


    
 $(document).on('click', '.addfriend', function(arg){
          var t = $(this).attr('data-id');          
$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
}); 
    
    var data = {
         user_2: t
    }
    $.ajax({
        url: '/friend',
        data: data,
        type: 'POST',
        beforeSend: function(){
         $('#'+t).html('<img src="/img/loaderIcon.gif"');   
        },
        success: function(d){
             $('#'+t).html(' ');  
            
        }
              
}); // end of $.ajax

                        
 
}); // end of click listner 