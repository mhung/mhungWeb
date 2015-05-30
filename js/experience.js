var experience = angular.module("experience", []);

experience.controller("skills",function($scope)
{
    $scope.oraiko=true;
    $scope.next =function()
    {
        console.log("fml");
        $scope.class="linedot";
    };
});