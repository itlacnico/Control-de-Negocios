/**
 * Created by Raul on 19/11/13.
 */


// Creacion de modulo de fletes
var flete_app = angular.module( "fleteApp", ['ngResource', 'timsaControllers', 'timsaServices', 'ngRoute'] );
// Configuracion para evitar colisiones con twig.
flete_app.config(['$interpolateProvider', '$routeProvider' , function($interpolateProvider, $routeProvider){
    $interpolateProvider.startSymbol('{[{').endSymbol('}]}');
}]);

var timsaServices = angular.module('timsaServices', [] );

// Servicio rest para relacion entre economicos, socios y operadores.
timsaServices.factory('Relacion', ['$resource',
    function ($resource){
        return $resource('http://localhost/controlTimsa/web/app_dev.php/main/rest/relacion', {} ,{
            // Sobrescribe el metdo de $resource, personalidandolo con un valor en default.
            // los demas metodos REST de http se dejan como vienen predefinidos en $resource
            get: { method:'GET', isArray: true }
        });
    }
]);

timsaServices.factory('Operador', [ '$resource' ,
    function($resource){
        return $resource('http://localhost/controlTimsa/web/app_dev.php/main/rest/operador', {}, {
            get: {method: 'GET', isArray:true}
        });
    }
]);


var timsaControllers = angular.module('timsaControllers', [] );


timsaControllers.controller('createController', [ '$scope',  '$routeParams', 'Relacion', 'Operador',
    function($scope, $routeParams, Relacion, Operador){

        $scope.loadImage = "http://localhost/controlTimsa/web/images/loading.gif";
        $scope.load = false;

        $scope.operadores =  Operador.get({}, function(){
            $scope.operadoresFilter = "";
        } );

        $scope.relaciones = Relacion.get( { } ,function(){
            $scope.load = true;
            $scope.economico = "";
            $scope.economicosList = [];

            angular.forEach( $scope.relaciones , function( value, key ){
                var economico = { value : value.economico };

                if (! $scope.containsObject( economico, $scope.economicosList ) ){
                    $scope.economicosList.push( economico );
                }

            });
        });

        $scope.operadoresList = [];
        $scope.operadores_ready = false;
        $scope.relacionActual = "";
        $scope.operador_seleccionado = "";

        $scope.$watch("economico", function() {
            economico = { value: parseInt($scope.economico) }
            $('#operadorTest').removeClass("glyphicon glyphicon-ok-sign");
            $('#operadorTest').addClass("glyphicon glyphicon-remove");
            $scope.operadores_ready = false;
            if( economico.value === NaN ){

                $('#economicoTest').removeClass("glyphicon glyphicon-ok-sign")
                $('#economicoTest').addClass("glyphicon glyphicon-remove");
                $scope.operadoresList = [];

            } else{

                if( $scope.containsObject(economico , $scope.economicosList) ){
                    $('#economicoTest').removeClass("glyphicon glyphicon-remove")
                    $('#economicoTest').addClass("glyphicon glyphicon-ok-sign")

                    $scope.operadoresList = [];
                    angular.forEach($scope.relaciones, function(value, key){
                        if( value.economico === economico.value ){
                            $scope.relacionActual = key;
                            $scope.operador_seleccionado = $scope.relaciones[$scope.relacionActual].operadorID;
                            $scope.operadoresList.push( { id : value.operadorID, nombre : value.operador } );
                            $('#operadorTest').removeClass("glyphicon glyphicon-remove");
                            $('#operadorTest').addClass("glyphicon glyphicon-ok-sign");
                            $scope.operadores_ready = true;
                        }
                    });
                }
                else{
                    $('#economicoTest').removeClass("glyphicon glyphicon-ok-sign")
                    $('#economicoTest').addClass("glyphicon glyphicon-remove");
                    $scope.operadoresList = [];
                }
            }
        });

        $scope.containsObject = function(obj, list) {
            if (typeof list !== 'undefined' && list.length > 0) {
                // the array is defined and has at least one element

                var i;
                for (i = 0; i < list.length; i++) {
                    if (list[i].value === obj.value) {
                        return true;
                    }
                }

                return false;
            }
        }

        $scope.isLibre = function(objeto, tipo){
            if( tipo === "economico"){
                $scope.mensajeEconomico = "";
                // Revisa si el economico esta libre.
                if($scope.economico){
                    var economico = { value: parseInt($scope.economico) }
                    if(! isNaN( economico.value  ) ){
                        if( $scope.relaciones[$scope.relacionActual].economico === economico.value  ){
                            if( $scope.relaciones[$scope.relacionActual].actividad_economico === 1 ){
                                $scope.mensajeEconomico = "El economico se encuentra libre";
                                return true;
                            }
                            else{
                                return false;
                            }
                        }
                    }
                    else{

                        return false;
                    }
                }
            }
            else if( tipo === "operador" ){
                $scope.mensajeOperador = "";
                if( $scope.operador_seleccionado ){
                    var operador = { value: parseInt($scope.operador_seleccionado.value) }
                    if(! isNaN( operador.value  ) ){
                        if( $scope.relaciones[$scope.relacionActual].operador === operador.value  ){
                            if( $scope.relaciones[$scope.relacionActual].actividad_operador === 1 ){
                                $scope.mensajeOperador = "El economico se encuentra libre";
                                return true;
                            }
                            else{
                                return false;
                            }
                        }
                    }
                    else{

                        return false;
                    }
                }
            }
        }

        $scope.isOcupado = function( objeto, tipo ){

            if( tipo === "economico" ){
                var economico = { value: parseInt($scope.economico) }
                if( ! isNaN( economico.value  ) ){
                    if( $scope.relaciones[$scope.relacionActual].economico === economico.value  ){
                        if( $scope.relaciones[$scope.relacionActual].actividad_economico !== 1 ){
                            $scope.mensajeEconomico = "El economico se encuentra ocupado";
                            $('#economicoTest').removeClass("glyphicon glyphicon-ok-sign")
                            $('#economicoTest').addClass("glyphicon glyphicon-remove");
                            return true;
                        }
                        else{
                            return false;
                        }
                    }
                }
                else{
                    return false;
                }
            }
        }


        $scope.$watch("operadoresFilter", function() {
            $scope.updateOperadoresList();
        });

        $scope.updateOperadoresList =  function (){
            $('#list_operadores').popover({
                html: true,
                title: function(){
                    return $('#popover-head').html();
                },
                content: function(){
                    return $('#popover-content').html();
                }
            });
        }

        $scope.updateOperadoresList();


        $scope.cambioOperador = function(){
            alert("sdfj")
        }
    }]);


