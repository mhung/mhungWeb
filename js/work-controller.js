
var work=angular.module('work',[]);


work.controller("workcontroller",function($scope)
{
    $scope.mwOne=true;
    $scope.phoneOne=true;
    $scope.rightbtn=function()
    {
        console.log("right");
        if ($scope.mwOne==true)
        {
            $scope.mwOne=false;
            $scope.mwTwo=true;
            $scope.phoneOne=false;
            $scope.phoneTwo=true;
        }
        else
        {
            if ($scope.mwTwo==true)
            {
                $scope.mwOne=false;
                $scope.mwTwo=false;
                $scope.mwThree=true;
                $scope.phoneTwo=false;
                $scope.phoneThree=true;
            }
        }   
    }
    
    $scope.leftbtn=function()
    {
        console.log("left");
        
        if ($scope.mwTwo==true)
        {
            $scope.mwOne=true;
            $scope.mwTwo=false;
            $scope.phoneOne=true;
            $scope.phoneTwo=false;
        }
        else
        {
            
            if ($scope.mwThree==true)
            {
                $scope.mwOne=false;
                $scope.mwTwo=true;
                $scope.mwThree=false;
                $scope.phoneOne=false;
                $scope.phoneTwo=true;
                $scope.phoneThree=false;
            }
            else
            {
                if ($scope.mwOne==true)
                {
                    $scope.mwThree=false;
                    $scope.mwTwo=false;
                } 

            }
            
        }
        
        
           
    }
});











work.directive('fancybox', function ($compile, $http) {
    return {
        restrict: 'A',

        controller: function($scope) {
             $scope.openFancybox = function (url) {

                $http.get(url).then(function(response) {
                    
                    if (response.status == 200) 
                    {

                        var template = angular.element(response.data);
                        var compiledTemplate = $compile(template);
                        compiledTemplate($scope);

                        $.fancybox.open({ content: template, type: 'php' });
                    }
                });
            };
        }
    };
});