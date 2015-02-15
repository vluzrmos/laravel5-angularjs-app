SeriesApp.controller("CreateSerieCtrl", function($scope, SerieService, $location){
    $scope.title = "Adicionar Série";
    $scope.disable_submit = false;

    $scope.serie = {
        title:"",
        description:""
    };

    $scope.save = function() {

        $scope.disable_submit = true;

        SerieService.save($scope.serie).$promise.then(
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
