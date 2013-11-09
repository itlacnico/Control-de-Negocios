/**
 * Created by Raul on 6/11/13.
 */

var tarifa_app = angular.module('tarifaApp', ['ngResource', 'timsaControllers', 'timsaServices', 'ngRoute'] );
        // Cambia la configuracion de declaracion de llaves en Angular, para que no choque con twig
        tarifa_app.config(['$interpolateProvider', '$routeProvider' , function($interpolateProvider, $routeProvider){
                    $interpolateProvider.startSymbol('{[{').endSymbol('}]}');

                    // Realiza un ruteo, obteniendo la vista necesaria para el campo NgView. Y asignando el controlador.
                    $routeProvider.
                        when('/agencia/:agenciaID', {
                            templateUrl: "http://localhost/controlTimsa/web/partials/tarifa_agencia.html",
                            controller: 'tarifaController'
                        }).
                        otherwise({
                            redirectTo: '/agencia/1'
                        });
                }]);

var timsaServices = angular.module('timsaServices', [] );

timsaServices.factory('TarifaAgencia', ['$resource',
    function ($resource){
        return $resource('http://localhost/controlTimsa/web/app_dev.php/main/rest/agencia/tarifas/:agenciaID', {} ,{
            // Sobrescribe el metdo de $resource, personalidandolo con un valor en default.
            // los demas metodos REST de http se dejan como vienen predefinidos en $resource
            get: { method:'GET', params:{agenciaID:'1'}, isArray: true }
        });
    }
]);

var timsaControllers = angular.module('timsaControllers', [] );

timsaControllers.controller('tarifaController', [ '$scope', 'TarifaAgencia', '$routeParams',
                                function($scope, TarifaAgencia, $routeParams){

                                    $scope.loadImage = "http://localhost/controlTimsa/web/images/loading.gif";
                                    $scope.load = false;

                                    $scope.clase = "2012";

                                    $scope.setClasificacion = function(evt, clase){
                                        evt.preventDefault();
                                        $scope.clase = clase;
                                    }

                                    $scope.tarifas = TarifaAgencia.get( { agenciaID: $routeParams.agenciaID } ,function(){
                                        $scope.load = true;
                                    });

                                    $scope.classes = [];

                                    angular.forEach( $scope.tarifas , function( value, key ){
                                        $scope.classes.push(  );
                                    });
                                }
                            ]);

