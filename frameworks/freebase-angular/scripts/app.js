angular.module('freebaseApp', [])
  .config(function ($routeProvider) {
    $routeProvider
      .when('/', {
        templateUrl: 'views/main.html',
        controller: 'MoviesCtrl'
      }).when('/movie/m/:movieId',{
        templateUrl: 'views/movie.html',
        controller: 'MovieCtrl'})
      .otherwise({
        redirectTo: '/'
      });
  });
