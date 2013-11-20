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

        $scope.operadores =  Operador.get();

        $scope.relaciones = Relacion.get( { } ,function(){
            $scope.load = true;
            $scope.economico = "";
            $scope.economicosList = [];

            angular.forEach( $scope.relaciones , function( value, key ){
                var economico = { value : value.economico };

                if (! containsObject( economico, $scope.economicosList ) ){
                    $scope.economicosList.push( economico );
                }

            });
        });

        $scope.operadoresList = [];
        $scope.operadores_ready = false;

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

                if( containsObject(economico , $scope.economicosList) ){
                    $('#economicoTest').removeClass("glyphicon glyphicon-remove")
                    $('#economicoTest').addClass("glyphicon glyphicon-ok-sign")

                    $scope.operadoresList = [];
                    angular.forEach($scope.relaciones, function(value, key){
                        if( value.economico === economico.value ){
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
    }]);

function containsObject(obj, list) {
    var i;
    for (i = 0; i < list.length; i++) {
        if (list[i].value === obj.value) {
            return true;
        }
    }

    return false;
}

$('#list_operadores').popover({
    html: true,
    title: function(){
        return $('#popover-head').html();
    },
    content: function(){
        return $('#popover-content').html();
    }
});