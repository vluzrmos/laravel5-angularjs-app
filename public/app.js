'use strict';

// Declare app level module which depends on views, and components
var SeriesApp = angular.module('SeriesApp', [
    'ngRoute', 'ngResource','truncate'
]);

SeriesApp.constant("base_api", "/api/v0");

SeriesApp.config(['$routeProvider', function ($routeProvider) {
    $routeProvider.when("/", {redirectTo:"/series"});

    $routeProvider.when("/series", {
        controller: "SeriesCtrl",
        templateUrl: "/templates/series/list.html"
    });

    $routeProvider.when("/series/create", {
        controller: "CreateSerieCtrl",
        templateUrl: "templates/series/create.html"
    });

    $routeProvider.when("/series/:id", {
        controller: "ShowSerieCtrl",
        templateUrl: "/templates/series/show.html"
    });

    $routeProvider.when("/series/:id/edit", {
        controller: "EditSerieCtrl",
        templateUrl: "/templates/series/create.html"
    });

    $routeProvider.otherwise("/series");
}]);
