
<div class="container" ng-controller="workcontroller">
    
    <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
        <h3> MIN WU PHOTOGRAPHY</h3>
    
    </div>
  
   
    
    
    <div class="col-md-6 col-xs-12 col-sm-12 col-lg-12 align">
        
            
        <section id="screen" ng-mode="type=one">
        <img src="images/minwu-one.png" class="img-responsive" ng-if="mwOne==true" ng-show="true"/>
        <img src="images/minwu-three.png" class="img-responsive" ng-if="mwTwo==true"  ng-show="true">
        <img src="images/minwu-two.png" class="img-responsive" ng-if="mwThree==true" ng-show="true">
        </section>
        
        <section id="phone">
        <div class="iphone-project" ng-show="true" ng-if="windowWidth>1000">
            <img src="images/min-wu-one-phone.png" class="" ng-show="true" ng-if="phoneOne==true">
            <img src="images/min-wu-three-phone.png" class="" ng-show="true" ng-if="phoneTwo==true">
            <img src="images/min-wu-two-phone.png" class="" ng-show="true" ng-if="phoneThree==true">
            
       </div>
        </section>
        
      <div class="container box-arrow">
       <div class="arrow-Left">
            <a href="" ng-click="leftbtn()"><img src="images/arrowLeft.png"/></a>
        </div>
    
        <div class="arrow-Right">
            <a href="" ng-click="rightbtn()"><img src="images/arrowRight.png"/></a>
        </div>
    
   </div>
    
    </div>
    <br/>
    <div class="clearfix"></div>
    
</div>