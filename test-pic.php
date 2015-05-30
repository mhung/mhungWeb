<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>mouseover demo</title>
  <style>
 /* div.out {
    width: 40%;
    height: 120px;
    margin: 0 15px;
    background-color: #d6edfc;
    float: left;
  }
  div.in {
    width: 60%;
    height: 60%;
    background-color: #fc0;
    margin: 10px auto;
  }
  p {
    line-height: 1em;
    margin: 0;
    padding: 0;
  }
      */
      
      .in
      { 
            width:33%;
           display:inline-block;
          
      }
      
      
      .in span
      {
        position:relative;
        visibility:hidden;
        z-index:1;
          display:block;
      }
      
      .in img
      {
        position:absolute;   
      }
      
      .out
      {
          
      }
      

      .in img:hover
      {
        	filter: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><filter id='grayscale'><feColorMatrix type='matrix' values='0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0'/></filter></svg>#grayscale"); /* Firefox 10+, Firefox on Android */
	filter: gray; /* IE6-9 */
	-webkit-filter: grayscale(100%); /* Chrome 19+, Safari 6+, Safari 6+ iOS */ 
	   
          
      }
      
      
  </style>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
 
    <div class="in">
          
          <img src="images/minwu.png"><span id="life">LIFE</span>
        
    </div>
        <div class="in">
            
          <img src="images/minwu.png"><span id="life">LIFE</span>
          
    </div>
        <div class="in">
             
          <img src="images/minwu.png"><span id="life">LIFE</span>
        
    </div>
<!--    
    
<div class="out overout">
  <span>move your mouse</span>
  <div class="in">
  </div>
</div>
 
<div class="out enterleave">
  <span>move your mouse</span>
  <div class="in">
  </div>
</div>-->
 
<script>
/*var i = 0;
$( "div.overout" )
  .mouseover(function() {
    i += 1;
    $( this ).find( "span" ).text( "mouse over x " + i );
  })
  .mouseout(function() {
    $( this ).find( "span" ).text( "mouse out " );
  });
 
var n = 0;
$( "div.enterleave" )
  .mouseenter(function() {
    n += 1;
    $( this ).find( "span" ).text( "mouse enter x " + n );
  })
  .mouseleave(function() {
    $( this ).find( "span" ).text( "mouse leave" );
  });*/
    
    $(".in").mouseover(function()
    {
        $( this ).find( "#life").css("visibility","visible");
       // $(this).find("img").addClass("grayscale");
    })
    .mouseleave(function()
    {
         $( this ).find( "#life").css("visibility","hidden");
        // $(this).find("img").addClass("no-grayscale");
    });
    
    
</script>
 
</body>
</html>