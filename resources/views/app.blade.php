<!DOCTYPE html>
<html lang="pt-BR" ng-app="SeriesApp">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>On Séries - Suas Séries Online</title>


        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <base href="{!! url('/') !!}"/>

        <link rel="stylesheet" href="{{asset("bower_components/bootstrap/dist/css/bootstrap.min.css")}}"/>
        <link rel="stylesheet" href="{{asset("css/app.css")}}"/>
    </head>
    <body>
        <div class="navbar navbar-default navbar-fixed-top">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" ng-href="#/">OnSéries</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="#/series">Séries</a></li>
                    <li><a href="#/series/create">Adicionar</a></li>
                </ul>
            </div>
        </div>

        <div class="container-fluid" >
            <div class="col-md-10 col-md-offset-1">
                <ng-view></ng-view>
            </div>

        </div>

        <script src="{{asset("bower_components/jquery/dist/jquery.min.js")}}"></script>
        <script src="{{asset("bower_components/bootstrap/dist/js/bootstrap.min.js")}}"></script>
        <script src="{{asset("bower_components/angular/angular.js")}}"></script>
        <script src="{{asset("bower_components/angular-route/angular-route.js")}}"></script>
        <script src="{{asset("bower_components/angular-resource/angular-resource.js")}}"></script>
        <script src="{{asset("bower_components/angularjs-truncate/src/truncate.js")}}"></script>
        <script src="{{asset("app.js")}}"></script>

        @foreach(glob(public_path("/services/*.js")) as $service)
            <script src="{{asset("services/".basename($service))}}"></script>
        @endforeach

        @foreach(glob(public_path("/controllers/*.js")) as $controller)
            <script src="{{asset("/controllers/".basename($controller))}}"></script>
        @endforeach

    </body>
</html>
