(function(){
	var app=angular.module('aplicacion',['menumod','ngRoute','contmod']);
	app.directive('appDir',function(){
		return {
			restrict: 'E',
			templateUrl: '/public/html/postindex.html'
		};
	});
	app.config(function($routeProvider){
		$routeProvider
			.when('/inicio',{
				controller:'inicioCtrl',
				templateUrl:'/public/html/inicio.html'
			})
			.when('/app-admin',{
				controller:'adminCtrl',
				templateUrl:'/public/html/inicio.html'
			})
			.otherwise({
				redirectTo:'/inicio'
			});
	});
})();