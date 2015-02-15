SeriesApp.controller("ShowSerieCtrl", function($scope, SerieService, $routeParams, $location){
    $scope.title = "Visualizar série";

    $scope.serie = SerieService.get({id:$routeParams.id});

    $scope.remove = function(){
        SerieService.remove({id:$scope.serie.id}).$promise.then(function(){
            $location.path("/series");
        },function(){

        });
    }
});
