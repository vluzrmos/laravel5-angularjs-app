SeriesApp.controller("EditSerieCtrl", function ($scope, $routeParams, $location, SerieService) {
    $scope.title = "Editar série";

    $scope.serie = SerieService.get({id: $routeParams.id});
    $scope.errors = null;

    $scope.disable_submit = false;

    $scope.save = function () {

        $scope.disable_submit = true;

        SerieService.update({id: $scope.serie.id}, $scope.serie).$promise.then(
            function () {
                $location.path("series");
            },
            function (status) {
                $scope.disable_submit = false;
                $scope.errors = [];

                for (var error in status.data) {
                    $scope.errors.push(status.data[error][0]);
                }

            });
    }
});