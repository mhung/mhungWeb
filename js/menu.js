$(document).ready(function(e) 
{
	resize();
    
    
   /* $('#down-info').click ( function()
    {
       //$('#text-me').show(); 
         $('#text-me').css('visibility', 'visible');
     
    });
    $('#close-me').click(function()
    {
        $('#text-me').css('visibility', 'hidden');
    });*/
    
});

$(window).resize(function()
{
	resize()
});


function resize()
{
    var width=$(window).width();
    if (width<1024)
    {
       // $("#menu").hide();
    //    $("icon-menu").show();
    }
    else
    {
     //   $("icon-menu").hide();
    //    $("#menu").show();
    }
    
    
    
}