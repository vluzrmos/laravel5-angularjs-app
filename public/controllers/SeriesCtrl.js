SeriesApp.controller("SeriesCtrl", function($scope, $location, SerieService){
    $scope.title = "Séries";

    $scope.series = [];

    $scope.series = SerieService.query();
});