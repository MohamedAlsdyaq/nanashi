/*****************************************
*                                        *
*                                        *
*   THIS HANDLES THE TEXAREA EXPANDINH   *  
*                                        *
*                                        *
******************************************/
function expand(){
    
    $('#comment').attr('rows', '8');
    $('#buttons').show();
    
}
function collapse(){
    $('#comment').attr('rows', '2');
    $('#buttons').hide();
}    
function toast(){
           // var x = document.getElementById("snackbar")
            //x.className = "show";
            //setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
            collapse();
}
/*****************************************
*                                        *
*                                        *
*   AJAX AJAX AJAX        !!!!!!!!!!!!   *  
*                                        *
*                                        *
******************************************/
 
$(document).on('click', '#save', function(e){
 e.preventDefault();
add_movie_and_post();
});

function add_movie_and_post(){
    

//check if this was clled from movie page or profile page
   
    
var post = $('#post').serialize();
    console.log(post);
$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
}); 
    
    $.ajax({
        url: '/tweet',
        data: post,
        type: 'POST',
        datatype: 'JSON',
        success: function(d){
            console.log(d);
            $('#comment').val('');
            collapse();
            toast();
        },
        catch: function(e){
            console.log(e);
        }
        
    });   
}