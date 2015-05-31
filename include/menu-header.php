<div class="container">
    <div class="col-xs-2">
       <h2> <a href="index.php">M|H</a></h2>
    </div>
    
    <div class="col-xs-10 icons-align"> 
        <div id="menu" class="menu" ng-mode="menu" ng-show="true" ng-if="windowWidth>1000">
            <ul>
                <li><a class="about" href="index.php">ABOUT ME</a></li>
                <li ><a class="work" href="work.php">WORK</a></li>
                <li><a class="experience" href="experience.php">EXPERIENCE</a></li>
                <li><a href="#footer" scrollOnClick>CONTACT ME</a></li>
           </ul>
        </div>
        <div class="menu-phone" ng-if="windowWidth<1000" ng-show="true">
            <a href="#" ng-click="toggle()"><img src="images/menu-phone.png" height="40"/></a>
        </div>
        <div toggle class="panel-phone" ng-model="menuPhone" ng-if="menuPhone==true">
            <ul class="panel-menu">
                <li class="menu-items" ><a href="index.php">Home</a></li>
                <li class="menu-items"><a href="work.php">Work</a></li>
                <li class="menu-items"><a href="experience.php">Experience</a></li>
                <li class="menu-items"><a href="#footer" scrollOnClick> Contact me</a></li>
            </ul>
        </div>
        <span resize></span>
    </div>
    <div class="clearfix"></div>    
</div>