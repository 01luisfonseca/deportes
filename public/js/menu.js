(function(){
	var app=angular.module('menumod',[]);
	app.directive('menuDir',function(){
		return {
			restrict: 'E',
			templateUrl: '/public/html/menu.html'
		};
	});
	app.controller('menuCtrl',function($http,$window,$scope){
		$scope.enlaces={};
		$scope.admin=false;
		$scope.esAdmin=function(){
			$http.get('/usuario/esadmin').then(
				function(response){$scope.admin=response.data},
				function(response){}
			);
		};
		$scope.infoInicial=function(){
			$http.get('/usuario/enlaces').then(
				function(response){$scope.enlaces=response},
				function(response){$scope.enlaces=response}
			);
			$scope.esAdmin();
		};
		$scope.infoInicial();
	});
})();