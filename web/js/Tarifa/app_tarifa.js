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

timsaServices.factory('Tarifa', ['$resource',
    function ($resource){
        return $resource('http://localhost/controlTimsa/web/app_dev.php/main/rest/tarifa', {} ,{
            // Sobrescribe el metdo de $resource, personalidandolo con un valor en default.
            // los demas metodos REST de http se dejan como vienen predefinidos en $resource
            get: { method:'GET', isArray: true }
        });
    }
]);

timsaServices.factory('Cuota', ['$resource',
    function ($resource){
        return $resource('http://localhost/controlTimsa/web/app_dev.php/main/rest/cuota', {} ,{
            // Sobrescribe el metdo de $resource, personalidandolo con un valor en default.
            // los demas metodos REST de http se dejan como vienen predefinidos en $resource
            get: { method:'GET', isArray: true }
        });
    }
]);

var timsaControllers = angular.module('timsaControllers', [] );

timsaControllers.controller('tarifaController', [ '$scope', 'TarifaAgencia', '$routeParams', 'Tarifa', 'Cuota',
                                function($scope, TarifaAgencia, $routeParams, Tarifa, Cuota){

                                    $scope.agencia =  "#/agencia/" +$routeParams.agenciaID;
                                    $('a[href$="' +  $scope.agencia + '"]').parent().addClass('active').siblings().removeClass('active');

                                    $scope.loadImage = "http://localhost/controlTimsa/web/images/loading.gif";
                                    $scope.load = false;

                                    $scope.classes = [];

                                    $scope.tarifas = TarifaAgencia.get( { agenciaID: $routeParams.agenciaID } ,function(){
                                        $scope.load = true;

                                        angular.forEach( $scope.tarifas , function( value, key ){
                                            clasificacion = { value : value.clasificacion };

                                           if (! containsObject( clasificacion, $scope.classes ) ){
                                               $scope.classes.push( clasificacion );
                                           }

                                        });

                                        $scope.clase = $scope.classes[0].value;
                                    });

                                    $scope.tarifasAvalibles = Tarifa.get();

                                    $scope.cuotasAvalibles = Cuota.get();

                                    $scope.setClasificacion = function(evt, clase){
                                        evt.preventDefault();
                                        $scope.clase = clase;
                                        $scope.setMaster(clase);
                                    }

                                    // metodo para desplegar las vistas por clase
                                    $scope.setMaster = function(section) {
                                        $scope.clase = section;
                                    }

                                    $scope.isSelected = function(section) {
                                        return $scope.clase === section;
                                    }


                                    $scope.addClase = false;

                                    $scope.mostrarInputClase = function(){
                                        $scope.addClase = ! $scope.addClase;
                                    }

                                    $scope.appendInputClase = function(){
                                        if( ! $scope.nuevaClase ){
                                            alert("Valor no permitido");
                                            return;
                                        }

                                        var nuevaClase = { value: $scope.nuevaClase };


                                        if (! containsObject( nuevaClase , $scope.classes ) ){
                                            $scope.classes.push( nuevaClase );
                                            $scope.nuevaClase = "";
                                        }
                                        else{
                                            alert("La clase ya existe.");
                                        }
                                    }

                                    $scope.addTarifa = true;
                                    $scope.showAddTarifa = function(){
                                        $scope.addTarifa = ! $scope.addTarifa;
                                    }
                                    $scope.addTarifaMenu = true;
                                    $scope.showAddTarifaMenu = function(){
                                        $scope.addTarifaMenu = ! $scope.addTarifaMenu;
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

