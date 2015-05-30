<! Doctype html >
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <title> Maritza Hung's Portfolio</title>
     
    <!--Jquery library -->
    <script src="./js/jquery-1.11.2.min.js"></script>
    
    <?php /*Bootstrap block*/?>
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <script src="./js/bootstrap.js"></script>
   
    <?php /*Angular block*/?>
    <script src="./js/angular.js"></script>
    <script src="./js/homeApp.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.13/angular-animate.js"></script>
    
    <?php /*Own block*/?>
    <link rel="stylesheet" href="css/css.css"/> 
    <!--<script src="js/menu.js"></script>-->
    

    
</head>
<body ng-app="homeApp" ng-controller="clickWorks">
<!--MENU -->
<section id="menu">
    <?php include("menu-header.php");?>
</section>    

<!--BANNER -->

<div class="container">
    <div class="banner-title">
        <div class="col-md-6 ">
            <div class="pole-banner">
                <img src="images/pole-banner.png"/>
            </div>
            
            <h1 id="title-me">MY WORK</h1>
            
            <div class="pole-banner-bottom">
                <img src="images/pole-banner.png"/>
            </div>

        </div>
        <div class="col-md-6 col-xs-12">
           
           
        </div>
    </div>
</div>
<img src="images/banner.jpg" class="img-responsive" title="nyc-web-Developer-img" alt="web-developer"/>
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
   
    
<div class="container content-background">
    
    
    <div class="col-xs-12">
        <div class="col-xs-12 col-md-6 col-lg-6">
        
            <img src="images/work-three.png" class="img-responsive img"/>
        
        </div>
        <div class="col-xs-12 col-md-6 col-lg-6">
        
            <img src="images/pole-green.png">
            <h3>MIN WU PHOTOGRAPHY</h3>
            <p class="content-font">Website-Portfolio for a <ins>Photographer.</ins></p>
            <p class="content-font">Platform: HTML, Javascript, CSS.</p>
            <p class="content-font">Totally <ins>responsive</ins></p>
            <a href="#" class="btn">MORE</a>
        
        
        </div>
    </div>
    <div class="col-xs-12">
    
        <div class="col-xs-12 col-md-6 col-lg-6">
            <img src="images/pole-green.png">
            <h3>HTML SCRAPPER</h3>
            <p class="content-font">Website-Portfolio for a <ins>Photographer.</ins></p>
            <p class="content-font">Platform: HTML, Javascript, CSS.</p>
            <p class="content-font">Totally <ins>responsive</ins></p>
            <a href="#" class="btn">MORE</a>
        </div>
        
        <div class="col-xs-12 col-md-6 col-lg-6">
         <img src="images/scraper.png" class="img-responsive img"/>
        </div>
    </div>
    <div class="col-xs-12">
        <div class="col-xs-12 col-md-6 col-lg-6">
        <img src="images/cocina-economica.png" class="img-responsive img"/>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-6">
            <img src="images/pole-green.png">
            <h3>WEBSITE </h3>
            <p class="content-font">Website-Portfolio for a <ins>Photographer.</ins></p>
            <p class="content-font">Platform: HTML, Javascript, CSS.</p>
            <p class="content-font">Totally <ins>responsive</ins></p>
            <a href="#" class="btn">MORE</a>
        </div>
        
    </div>
    
    
    <div class="col-xs-12">
        <div class="col-xs-12 col-md-6 col-lg-6">
            <img src="images/pole-green.png">
            <h3>DESIGN MOCKUP</h3>
            <p class="content-font">Website-Portfolio for a <ins>Photographer.</ins></p>
            <p class="content-font">Platform: HTML, Javascript, CSS.</p>
            <p class="content-font">Totally <ins>responsive</ins></p>
            <a href="#" class="btn">MORE</a>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-6">
        <img src="images/travel.png" class="img-responsive img"/>
        </div>
        
    </div>
    
    
    <div class="col-xs-12">
        <div class="col-xs-12 col-md-6 col-lg-6">
        <img src="images/europuntos.png" class="img-responsive img"/>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-6">
            <img src="images/pole-green.png">
            <h3>EUROPUNTOS WEB DEVELOPMENT</h3>
            <p class="content-font">Website-Portfolio for a <ins>Photographer.</ins></p>
            <p class="content-font">Platform: HTML, Javascript, CSS.</p>
            <p class="content-font">Totally <ins>responsive</ins></p>
            <a href="#" class="btn">MORE</a>
        </div>
        
    </div>
    
    
    <div class="col-xs-12">
        <div class="col-xs-12 col-md-6 col-lg-6">
            <img src="images/pole-green.png">
            <h3>RECYCLE GAME</h3>
            <p class="content-font">Website-Portfolio for a <ins>Photographer.</ins></p>
            <p class="content-font">Platform: HTML, Javascript, CSS.</p>
            <p class="content-font">Totally <ins>responsive</ins></p>
            <a href="#" class="btn">MORE</a>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-6">
        <img src="images/game.png" class="img-responsive img"/>
        </div>
    </div>
    
    
</div>
    
<br/>
   

<!-- FOOTER-->
<section id="footer">
    <?php include ("contact-form.php");?>
</section>
    
</body>
</html>
