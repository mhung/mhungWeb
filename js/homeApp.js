var homeApp=angular.module('homeApp',['work','experience']);


/*homeApp.config(function ($routeProvider)
{
    $routeProvider
   .when('/portfolio',{ 
         templateUrl: 'contact-form.php',
         controller: 'workcontroller'
         });
    
});
*/

homeApp.controller("clickWorks", function($scope,$window)
{
    
    $scope.work1=true;
    $scope.menu=true;
    

   
    $scope.clickPhone = function()
    {
        $scope.menuPhone=true; 
        
        
    }
    
    $scope.clickInfo= function()
    {
        $scope.textInfo=true;
    }
    
    
    $scope.closeInfo= function()
    {
         $scope.textInfo=false;
    }
    
    $scope.clickone = function ()
    {   
        $scope.work2=false;
        $scope.work3=false;
        $scope.work1=true;
    }
    
    $scope.clicktwo = function ()
    {
        $scope.work3=false;
        $scope.work2=true;
        $scope.work1=false;
    }
    
    $scope.clickthree = function ()
    {
        $scope.work2=false;
        $scope.work1=false;
        $scope.work3=true;
        
    }
      $scope.toggle = function() {
          
          $scope.menuPhone=true;
        $scope.$broadcast('event:toggle');
    }

      
      $scope.scrollTo = function (id) 
      {
          
        var old = $location.hash();
        $location.hash(id);
        $anchorScroll();
        $location.hash(old);
      }
});

homeApp.directive('resize',function($window)
{
    return function (scope, element) 
    {
        var w=angular.element($window);

        scope.getWidth= function()
        {
            return{'h': w.width()};   
        };
      
        
    scope.$watch(scope.getWidth, function(newValue)
    {
        
         scope.windowWidth=newValue.h;
    },true);
    
    w.bind('resize',function()
    {
        scope.$apply();
    
    });
        
    };
    
});

homeApp.directive('toggle', function()
{
   return function(scope, elem, attrs) {
        scope.$on('event:toggle', function() {
            elem.slideToggle();
        });
    };
});


homeApp.directive('scrollOnClick', function() {
  return {
    restrict: 'A',
    link: function(scope, $elm, attrs) {
      var idToScroll = attrs.href;
      $elm.on('click', function() {
        var $target;
        if (idToScroll) 
        {
          $target = $(idToScroll);
        } else 
        {
          $target = $elm;
        }
        $("body").animate({scrollTop: $target.offset().top}, "slow");
      });
    }
  }
});