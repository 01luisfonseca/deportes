/*(function(){
	var app=angular.module('deportes',['mm.foundation']).config(function($interpolateProvider){
    		$interpolateProvider.startSymbol('//').endSymbol('//');
    app.directive('appDir',function(){
		return {
			restrict: 'E',
			templateUrl: '/html/postindex.html'
		};
	});
	});	
})();*/
(function(){
	var app=angular.module('deportes',[]);
	app.directive('appDir',function(){
		return {
			restrict: 'E',
			templateUrl: '/html/postindex.html'
		};
	});
})();