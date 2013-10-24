/**
*  Module
*
* Description
*/
var fletesApp = angular.module('fletesApp', ['ngResource', 'timsaControllers', 'timsaServices' ])
					   .config(['$interpolateProvider', function($interpolateProvider){
					       	 	$interpolateProvider.startSymbol('{[{').endSymbol('}]}');
					    	}]);

var timsaControllers = angular.module('timsaControllers', [] );

timsaControllers.controller('fleteListController', [ '$scope', 'Fletes', 
	function($scope, Fletes){
/*
	$scope.fletes = [
						{
							"numero" : 		1,
							 "economico":	1,
							 "operador": 	1,
							 "licencia":	1,
							 "socio": 		1,
							 "booking": 	1,
							 "workorder": 	1,
							 "trafico": 	1,
							 "cliente": 	1,
							 "contenedor": 	1,
							 "size": 		1,
							 "type": 		1,
							 "fecha": 		1,
						}
					];
					*/
	$scope.fletes = Fletes.query();

} ]);

var timsaServices = angular.module('timsaServices', ['ngResource']);
 
timsaServices.factory('Fletes', ['$resource',
  function($resource){
    return $resource('../main/flete/rest/:fleteId', {}, {
      query: {method:'GET', params:{fleteId:'list'}, isArray:true}
    });
  }]);