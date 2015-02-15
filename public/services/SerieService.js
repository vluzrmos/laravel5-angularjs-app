SeriesApp.factory("SerieService", function ($http, $resource, base_api) {
    return $resource(base_api + "/series/:id", null, {
        'update': { 'method':'PUT' }
    });
});