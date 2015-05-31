<! Doctype html >
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <title> Maritza Hung's Portfolio</title>
    <?php include ("./include/head.php");?>

    
</head>
<body id="home" ng-app="homeApp" ng-controller="clickWorks">
<!--MENU -->
<section id="menu">
    <?php include("./include/menu-header.php");?>
</section>    

<!--BANNER -->
<div class="background-banner" >
    <div class="banner-title container">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            
            <div class="container-banner">
                <div class="pole-banner">
                    <img src="images/pole-banner.png"/>
                </div>
                
                <h1 id="title-me">ABOUT MYSELF</h1>
                
                <div class="pole-banner-bottom">
                    <img src="images/pole-banner.png"/>
                </div>
            </div>

        </div>
        <div class="col-sm-12 col-md-6 col-xs-12 col-lg-6">
            <p id="description" class="info-description">
                My passion is based on two things, first: <i>Web Development</i> and second: <i>Web Design</i>. Working in those two fields make me completely satisfy    </p>
           
        </div>
    </div>
</div>ƒ
<!--END BANNER-->

<!--FIND ME PANEL-->
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
<!--END FIND ME PANEL-->
<div class="clear"></div>
    

<!--CONTENT-->
    
<!-- RECENT WORK BLOCK-->
<section id="recentWork">
<div class="container content-background">
    <br/>
    
     <div class="col-xs-12 col-md-6">
        <img src="images/work-one.png" id="work1" title="min-wu-site" alt="min-wu-site" class="img-responsive" ng-model="work1" ng-show="true" ng-if="work1==true">
        <img src="images/work-two.png" id="work2" title="min-wu-site" alt="min-wu-site"  class="img-responsive" ng-model="work2"  ng-show="true" ng-if="work2==true">
         <img src="images/work-three.png" id="work3" title="min-wu-site" alt="min-wu-site"  class="img-responsive" ng-model="work3"  ng-show="true" ng-if="work3==true">
         
         <div class="bullets-work">
             <a href ng-click="clickone()"><img src="images/bullet.png" id="page-one"/></a>
             <a href ng-click="clicktwo()"><img src="images/bullet.png" id="page-two"/></a>
             <a href ng-click="clickthree()"><img src="images/bullet.png" id="page-three"/></a>

        </div>
    </div>

    <div class="col-xs-12 col-md-6" >
        <div class="content-right">
            <img src="images/pole-green.png">
            <h3>RECENT WORK</h3>
            <p class="content-font">Website-Portfolio for a <span class="pink-decoration">Photographer.</span></p>
            <p class="content-font">Platform: HTML, Javascript, CSS.</p>
            <p class="content-font">Totally <span class="green-decoration">responsive</span></p>
            <a href="work.php" class="btn">MORE</a>
        </div>
    </div>

</div>
</section>
<!-- END RECENT WORK BLOCK-->    
   
<div class="clear"></div>
    
<!--DESCRIPTION ABOUT WHAT I DO-->   
<section id="expertise">
 <div class="col-yellow"></div>
    
<div class="container content-background container-top">
    
        <div class="col-xs-12 col-md-4" >
            <div class="content-right">
                <div class="col-xs-12 col-md-6">
                    <img src="images/pole-green.png"> 
                    <h3>WHAT I DO?</h3>
                </div>
                <div class="col-xs-12 col-md-6">
                
                    <?php/*<a href="#" class="like" ><img src="images/like.png" class="img-responsive"/></a>*/?>
                    <div class="like"></div>
                </div>


                <div class="col-xs-12 col-md-12">
                <p class="content-font">Basically, I am a <span class="pink-decoration">Web Developer </span>who can code in PHP together with HTML, CSS or any other language that It is required. Moreover, I have knowledge with Photoshop. Therefore, I'm able to <span class="yello-decoration">combine</span> all my skills </p>

                <a href="experience.php" class="btn btn-Pink">MORE INFO</a>
                </div>
            </div>
        </div>
    
    <div class="col-xs-12 col-md-8">
            
        <img src="images/animation.gif" title="animation-computer" alt="animation-computer" class="img-responsive" id="computer"/>
            
    </div>
</div>

</section>
<!--END DESCRIPTION ABOUT WHAT I DO-->       

<!--DESCRIPTION PAGE-->    
<section id="descriptionPage">
    <div class="container content-background container-top">
        
        <div class="col-xs-12 col-md-12 align"  >
            <img src="images/pole-green.png"> 
            <h3>ABOUT THIS PAGE</h3>
            <p class="content-font" style="font-weight:bolder;">This website is built up by <span class="yello-decoration">AngularJS, HTML, PHP, CSS and Bootstrap</span></p>
            <p class="content-font">I'm using google font which is Oxygen</p>
            <p class="content-font">Also,there are some pictures are from <span class="pink-decoration">MIN WU</span> </p>
            
            <div class="align">
                <img src="images/angularjs.png" height="70"/>
                <img src="images/html.png" height="70"/>
                <img src="images/development-php.png" height="70"/>
                
            
            </div>
        </div>
        
    </div>
    
    <div class="col-green"></div>
    
</section>   
<!--END DESCRIPTION PAGE-->   
   
<br/>

<!-- FOOTER-->
<section id="footer">
    <?php include ("contact-form.php");?>
</section>
    
</body>
</html>
