
$(document).ready(function(){

var noti = new XMLHttpRequest();
noti.onreadystatechange = function () {
  if(noti.readyState === 4 && noti.status === 200) {
    var notification = JSON.parse(noti.responseText);
      
console.log(notification);
    for (var i=0; i<notification.length; i += 1) {
        
       
        var when;

    var tim = notification[i].created_at;
      
    var tdate = tim.split(" ",2);
    var tyear = tdate[0].split("-");
    var ttime = tdate[1].split(":");

    var current = new Date();
    var currentY = current.getFullYear();
    var currentM = current.getMonth()+1;
    var currentD = current.getDate();
    var currentH = current.getHours();
    var currentMO = current.getMinutes();
 
   
    
    if(currentY != tyear){
        when = tim[0];
    }

    if(currentY == tyear[0]){
        if(currentM == tyear[1]){
            if(currentD == tyear[2]){
                //THE TWEET WAS SENT TODAY
                //SEE WHEN -MOMENT-
                if(currentH == ttime[0]){
                    if(currentMO == ttime[1]){
                        when = 'just now';
                } else{
                    when = currentMO - ttime[1];
                   when = when+' minutes ago..'
                }
                    }// not the same hour 
                else {
                   when = currentH - ttime[0];
                   when = when+' hours ago..'
                }
          
                
                
            }//END COMPARING DAYS 
            else {
                 when = currentD - tyear[2];
                if(when == 1){
                    when = 'yesterday'; }
                else{
                   when = when+' days ago..'
                }
            }
        }// END COMPARING MONTH
        else{
             when = currentM - tyear[1];
                   when = when+' months ago..'
        }
        
    } //end comparing years 
    else {
         
                   when = tim;
        
    }
        
        
        
var href = '/profile/'+notification[i].user1;
var action = 'followed you';
var npic = '/storage/'+notification[i].id+'/'+notification[i].pic;

      var nimg = '<div class="col-xs-3 text-left  "><div style="margin-top: 2px;" id="noti_img"><a href="'+href+'"> ';
        nimg += '<img  width="50" height="50" src="'+npic+'" > </a> </div>  </div> ';
        var nname = '   <div id="fname"><a href='+href+'>'+notification[i].name+' </a> '+action+'</div>';
           var ntime = '<div class="ago">'+when+'</div>';
        
        
        var ncontent = document.getElementById('noti2');
        ncontent.innerHTML += '<div class="noti2">'+nimg+nname+ntime+'<hr><br><br><br> </div> ';
        
    } //end of for loop


  }
};
var accept =   'get_notifications';

noti.open('GET', accept);
noti.send();
        
$("#notificationLink").click(function(){

        $("#notificationContainer").fadeToggle(300);
        $("#notification_count").fadeOut("slow");
        return false;
});

//Document Click
$(document).click(function(){
    $("#notificationContainer").hide();
    $('#results').hide();
});
//Popup Click
$("#notificationContainer").click(function(){
        return false
});
    
$('#notificationFooter').click(function(){
    $('#noti2').fadeOut();
    $('#n_count').html('');
 var d = 
                    $.ajax({
               
                type: "post",
                data: d,
                url: "",
                success: function(data){

                //make the text area empty
          console.log('success');
                }
});
    
    
    
    
});
  


}); // end of JQUERY ready
