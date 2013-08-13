angular.module('freebaseApp')
  	.controller('MoviesCtrl', function ($scope, $http) {
   		$scope.getQuery = function(){
	    	$http.jsonp('https://www.googleapis.com/freebase/v1/search?query=' 
	    	+ $scope.freebaseQuery 
	    	+'&filter=(all+type%3A%2Ffilm%2Ffilm)&callback=JSON_CALLBACK').success(
			function( payload ){
				$scope.movies = payload.result;
			}
		);
    }
  })
  .controller('MovieCtrl', function ($scope, $http, $routeParams) {
  		$scope.movieid = $routeParams.movieId
    	$http.jsonp('https://www.googleapis.com/freebase/v1/topic/m/'
    	+ $scope.movieid 
    	+'?callback=JSON_CALLBACK').success(
			function( payload ){
				$scope.movie = payload.property;
				$scope.actors = $scope.movie['/film/film/starring'].values;
			}
		);
  })
