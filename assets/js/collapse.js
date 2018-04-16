$( document ).ready(function(){

        $("#collapseform").on('click', function(){
            var text=$('#collapseform').text();
  if(text === "Find Quotes"){
    $(this).text('Close Form');
    $(this).removeClass('btn-warning').addClass('btn-close-form');
      $('.quickLoad').show();
      setTimeout(function(){
      $('.quickLoad').fadeOut(100);  
      $('#restofform').toggleClass('collapse');
      $('#quotes-message').addClass('bounceIn').delay(1000);          
      },2500);
      
  } else{
    $(this).text('Find Quotes');
    $(this).removeClass('btn-close-form').addClass('btn-warning'); 
    $('#restofform').toggleClass('collapse');  
 }
         
        });

    
        
     });

