/**
*  Module
*
* Description
*/
var fletesApp = angular.module('fletesApp', ['ngResource', 'timsaControllers', 'timsaServices', 'timsaAnimations' ])
					   .config(['$interpolateProvider', function($interpolateProvider){
					       	 	$interpolateProvider.startSymbol('{[{').endSymbol('}]}');
					    	}]);

var timsaControllers = angular.module('timsaControllers', [] );

timsaControllers.controller('fleteListController', [ '$scope', 'Fletes',
	function($scope, Fletes){

	$scope.loadImage = "http://localhost/TimsaLzc/web/images/loading.gif";
	$scope.load = false;

	$scope.fletes = Fletes.query(function(){
		$('#load').hide();
	});

	$scope.append = function(){
		$scope.fletes.push( {"id" : $scope.entrada} )
	}

}]);

var timsaServices = angular.module('timsaServices', ['ngResource']);
 
timsaServices.factory('Fletes', ['$resource',
  function($resource){
    return $resource('../main/rest/:fleteId', {}, {
      query: {method:'GET', params:{fleteId:'flete'}, isArray:true}
    });
  }]);

var timsaAnimations = angular.module('timsaAnimations', ['ngAnimate']);

