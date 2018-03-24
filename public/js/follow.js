$(document).on('click', '.follow', function(){
    
    var data = {
        user_2: $('#user_id').val()
    }
$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
}); 
    
    $.ajax({
        url: '/friend',
        data: data,
        type: 'POST',
        beforeSend: function(){
         $('#follow_button').html('<img src="/img/loaderIcon.gif">');  
         $('#follow_button').removeClass('follow');  
        },
        success: function(d){

          $('#follow_button').addClass('unfollow');   
          $('#follow_button').removeClass('btn-success');   
          $('#follow_button').html('Followed');   
        }
        
    });
    
});
    
    
    
   $(document).on('click', '.unfollow', function(){
    
    var data = {
        user_2: $('#user_id').val()
    }
$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
}); 
    
    $.ajax({
        url: '/delete_friend',
        data: data,
        type: 'POST',
        beforeSend: function(){
         $('.unfollow').html('<img src="/img/loaderIcon.gif">');  
        },
        success: function(d){

        $('.unfollow').addClass('follow');   
        $('.unfollow').html('Follow'); 
        $('.unfollow').removeClass('btn-danger');  
        $('.unfollow').addClass('btn-success');  
        $('.unfollow').removeClass('unfollow');  


        }
        
    });
    
    
    
});



function hover(str){
    if($(str).text() == 'Followed'){
    $(str).html('Unfollow');
    $(str).addClass('btn-danger');
    }
}

function unhover(str){
  if($(str).text() == 'Unfollow'){
    $(str).html('Followed');
    $(str).removeClass('btn-danger');
}
}