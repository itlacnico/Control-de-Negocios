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
                                        $scope.setMaster(clase);
                                    }

                                    $scope.classes = [];

                                    $scope.tarifas = TarifaAgencia.get( { agenciaID: $routeParams.agenciaID } ,function(){
                                        $scope.load = true;

                                        angular.forEach( $scope.tarifas , function( value, key ){
                                            clasificacion = { value : value.clasificacion };

                                           if (! containsObject( clasificacion, $scope.classes ) ){
                                               $scope.classes.push( clasificacion );
                                           }

                                        });
                                    });

                                    $scope.selected = 2012;

                                    $scope.setMaster = function(section) {
                                        $scope.selected = section;
                                    }

                                    $scope.isSelected = function(section) {
                                        return $scope.selected === section;
                                    }


                                    $scope.addClase = false;

                                    $scope.mostrarInputClase = function(){
                                        $scope.addClase = ! $scope.addClase;
                                    }

                                    $scope.appendInputClase = function(){
                                        var nuevaClase = { value: $scope.nuevaClase };

                                        if (! containsObject( nuevaClase , $scope.classes ) ){
                                            $scope.classes.push( nuevaClase );
                                            $scope.nuevaClase = "";
                                        }
                                        else{
                                            alert("La clase ya existe.");
                                        }
                                    }

                                }
                            ]);


function containsObject(obj, list) {
    var i;
    for (i = 0; i < list.length; i++) {
        if (list[i].value === obj.value) {
            return true;
        }
    }

    return false;
}

