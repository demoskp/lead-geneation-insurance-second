    $(document).ready(function (){
	
	$('#carousel-ul li:first').before($('#carousel-ul li:last')); 
    $('#right-scroll img').click(function(){
        var item_width = $('#carousel-ul li').outerWidth() + 10;
        var left_indent = parseInt($('#carousel-ul').css('left')) - item_width;
        $('#carousel-ul:not(:animated)').animate({'left' : left_indent},500,function() {  
            $('#carousel-ul li:last').after($('#carousel-ul li:first')); 
            $('#carousel-ul').css({'left' : '-210px'});
        }); 
    });
    
    $('#left-scroll img').click(function(){
        var item_width = $('#carousel-ul li').outerWidth() + 10;
        var left_indent = parseInt($('#carousel-ul').css('left')) + item_width;
            $('#carousel-ul:not(:animated)').animate({'left' : left_indent},500,function() { 
            $('#carousel-ul li:first').before($('#carousel-ul li:last')); 
            $('#carousel-ul').css({'left' : '-210px'});
        });
    });
	
    });