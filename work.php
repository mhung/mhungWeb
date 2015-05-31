<! Doctype html >
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <title> Maritza Hung's Work</title>
     

    <?php include ("./include/head.php");?>

    
</head>
<body id="work" ng-app="homeApp" ng-controller="clickWorks">
<!--MENU -->
<section id="menu">
    <?php include("./include/menu-header.php");?>
</section>    

<!--BANNER -->

<div class="background-banner">
    <div class="col-md-12 col-lg-12">
        
        <div class="container">
            <div class="banner-title-center">
                <h1 id="title-me">WORK</h1>
            </div>

        </div>
   
           
    </div>
   
</div>


<!-- FIND ME -->    
<div class="me">

    <div id="down-info" class="down-info" ng-click="clickInfo()" ng-mouseover="clickInfo()">
     
        <img src="images/find-me.png" height="40" title="icon-find" alt="icon-find-me">
        

    </div>
    
    
     <div class="col-xs-12" ng-model="textInfo" id="text-me" ng-show="true" ng-if="textInfo==true" >
               <div id="close-me" ng-model="closeInfo" ng-click="closeInfo()">Close</div>
                <div class="align-info-me">
                    <div class="">
                        <div class="col-xs-6">

                             <img src="images/me.png" height="100" title="maritza-web-developer" alt="web-developer">

                        </div>

                         <div class="col-xs-6">
                            <p class="content-font">Hello everybody!</p>
                            <p class="content-font">Welcome to my Website!</p>
                            
                        </div>
                    </div>
                </div>
            </div>
    
</div>
    
<div class="clear"></div>
    
<!--CONTENT-->
   
    


<div class="container content-background ">
    <div class="col-md-12 col-sm-12 col-xs-12 col">
        
        
        <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
        
             <img src="images/computer.png"class="img-responsive space-top" width="700"/>
        
        </div>
        
        
        <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6 vertical-align">
        
            <img src="images/pole-green.png" class="space-top"> 
            <h3>EUROPUNTOS</h3>
            <p class="content-font">Role: <span class="pink-decoration">Web Developer</span></p>
            <p class="content-font">Platform: ASP.NET</p>
            <p class="content-font">Web application for members of a Hotel Group to manage all transactions from a reward program</p>
            <a fancybox ng-click="openFancybox('index.php')" class="btn">MORE</a>
        </div>
        
        
    </div>
</div>
    
 <div class="col-yellow"></div>
    
<div class="container content-background ">
    
  
    <br/>
    
    <div class="col-md-12 col-sm-12 col-xs-12 col align row">
    
        
    
        <h3>Testimony</h3>
        <br/>
        <div class="col-md-3">
            <img src="images/minwu.png" class="img-circle">
        </div>
        <div class="col-md-9">
            <p class="content-font" style="color:black;">
                "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s"
            </p>
        </div>
        
        <div fancybox ng-click="openFancybox('http://www.minwuphotography.com')" ></div>
        <a href="http://www.minwuphotography.com" target="_blank">    <span class="yello-decoration">MIN WU'S SITE</span></div></a>

<div class="clearfix "></div>     
        
        
    </div>
    

<section id="extra" ng-show="true" ng-if="windowWidth>1000">
<div class="work-background" >
    <div class="container ">
        <div class="col-md-6 col-xs-12 col-lg-6 ">
            &nbsp;
        </div>
        <div class="col-md-6 col-xs-12 col-lg-6 ">
            <div class="align-left">
            <p class="title">WHERE RESULTS, SAY MORE...</p>
            </div>
        </div>
    </div>
    
</div>
</section>
    
    
    
<div class="container content-background ">
    <div class="row">
    
    <div class="col-md-12 align">
           <img src="images/pole-green.png" class="space-top"> 
        <h3>MORE PROJECTS</h3>
        
            
    </div>
        
    <div class="col-md-4 col-sm-4 col-xs-12 col">
        <div class="">
        
             <a fancybox ng-click="openFancybox('project-minwu.php')" href="">
             <img src="images/work-three.png" class="img-responsive img"/>
            </a>     
            
        
        </div>
       
    </div>
    <div class="col-md-4 col-sm-4 col-xs-12 col">
         <div class="box">
         <!--<img src="images/box-design.png" class="img-responsive img"/>-->
             
           <a fancybox ng-click="openFancybox('projectOne.php')" href=""><img src="images/scraper.png" class="img-responsive img"/></a>
        </div>
    </div>
    <div class="col-md-4 col-sm-4 col-xs-12 col">
           <div class="">
        
            <a fancybox ng-click="openFancybox('projectOne.php')" href="">
            
                 <img src="images/cocina-economica.png" class="img-responsive img"/>
               
            </a>
               
               
                  

            </div>
    </div>
    
    </div>
    
    <div class="clear"></div>
    
    <div class="row">
    
    
    
     <div class="col-md-4 col-sm-4 col-xs-12 col">
        <div class="box">
        <!--<img src="images/process.png" class="img-responsive img"/>-->
           <img src="images/travel.png" class="img-responsive img"/>
        
        </div>
       
    </div>
    <div class="col-md-4 col-sm-4 col-xs-12 col">
         <div class="">
         
             <img src="images/europuntos.png" class="img-responsive img"/>
               
             
        </div>
    </div>
    <div class="col-md-4 col-sm-4 col-xs-12 col">
           <div class="box">
        
                 <!--<img src="images/box-develop.png" class="img-responsive img"/>-->
               <img src="images/game.png" class="img-responsive img"/>

            </div>
    </div>
    

        </div>
    
    
    
    
    
</div>


<!-- FOOTER-->
<section id="footer">
    <?php include ("contact-form.php");?>
</section>
    
</body>
</html>
