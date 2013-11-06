/**
 * Created by Raul on 6/11/13.
 */

var tarifa_app = angular.module('tarifaApp', ['ngResource', 'timsaControllers', 'timsaServices', 'ngRoute'] )
                        .config(['$interpolateProvider', '$routeProvider' , function($interpolateProvider, $routeProvider){
                                    $interpolateProvider.startSymbol('{[{').endSymbol('}]}');

                                    $routeProvider.
                                        when('/agencia:agenciaID', {
                                            templateUrl: 'partials/tarifa_agencia.html',
                                            controller: 'TarifaAgenciaCOntroller'
                                        })
                                }]);

var timsaControllers = angular.mudule('timsaControllers', [] );

timsaControllers.controller('tarifaController', ['$scope', 'TarifaAgencia',
                                function($scope, TarifaAgencia){

                                    $scope.loadImage = "http://localhost/TimsaLzc/web/images/loading.gif";
                                    $scope.load = false;

                                    $scope.tarifas = TarifaAgencia.get({ agenciaID: $routeParams.agenciaID } ,function(){
                                        $('#load').hide();
                                    });

                                }
                            ]);


var timsaServices = angular.module('timsaServices', [] );

timsaServices.factory('TarifaAgencia', ['$resource',
                    function ($resource){
                        return $resource('../main/rest/agencia/tarifas/:agenciaID', {} ,{
                            query: { method:'GET', params:{agenciaID:''}, isArray:true }
                        });
                    }
               ])