(function(){
	var app=angular.module('contmod',[]);
	app.controller('inicioCtrl',function($http,$window,$scope){
		$scope.mensaje='Inicio';
	});
	app.controller('adminCtrl',function($http,$window,$scope){
		$scope.mensaje='Admin';
	});
})();