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

                                    $scope.getTarifas = function(){
                                        $scope.tarifas = TarifaAgencia.get( { agenciaID: $routeParams.agenciaID } ,function(){
                                            $scope.load = true;

                                            angular.forEach( $scope.tarifas , function( value, key ){
                                                clasificacion = { value : value.clasificacion };

                                                if (! containsObject( clasificacion, $scope.classes ) ){
                                                    $scope.classes.push( clasificacion );
                                                }

                                            });

                                            $scope.clase = $scope.classes[  $scope.classes.length-1 ].value;
                                        });
                                    }

                                    $scope.getTarifas();

                                    $scope.tarifasAvalibles = Tarifa.get({}, function(){
                                        if(  $scope.tarifasAvalibles.length > 0 ){
                                            $scope.tarifa_nueva.tarifa = $scope.tarifasAvalibles[0].id;
                                        }
                                        else{
                                            $scope.tarifa_nueva.tarifa = "Sin tarifas disponibles";
                                            $('#enviar').attr("disabled", "disabled");
                                        }

                                    });

                                    $scope.cuotasAvalibles = Cuota.get({}, function(){
                                        if(  $scope.cuotasAvalibles.length > 0 ){
                                            $scope.tarifa_nueva.cuota = $scope.cuotasAvalibles[0].id;
                                        }
                                        else{
                                            $scope.tarifa_nueva.cuota = "Sin cuotas disponibles, cree una nueva.";
                                        }

                                    });

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
                                            $scope.mensaje = "Valor no permitido";
                                            $scope.muestra_mensaje = true;
                                            return;
                                        }

                                        var nuevaClase = { value: $scope.nuevaClase };


                                        if (! containsObject( nuevaClase , $scope.classes ) ){
                                            $scope.classes.push( nuevaClase );
                                            $scope.nuevaClase = "";
                                            $scope.clase = nuevaClase.value;

                                        }
                                        else{
                                            $scope.mensaje = "La clase ya existe";
                                            $scope.muestra_mensaje = true;
                                        }
                                    }

                                    $scope.addTarifa = true;
                                    $scope.showAddTarifa = function(){
                                        $scope.addTarifa = ! $scope.addTarifa;
                                    }

                                    $scope.addTarifaMenu = false;
                                    $scope.showAddNewTarifaMenu = function(){
                                        $scope.addTarifaMenu = false;
                                        $scope.tarifa_nueva.reutilizarCuota = false;
                                    }
                                    $scope.showAddTarifaMenu = function(){
                                        $scope.addTarifaMenu = true;
                                        $scope.tarifa_nueva.reutilizarCuota = true;
                                    }

                                    $scope.$watch("clase", function() {
                                        $scope.tarifa_nueva.clase = $scope.clase;
                                    });


                                    $scope.tarifa_nueva = {
                                        agencia: $routeParams.agenciaID,
                                        tarifa : "" ,
                                        reutilizarCuota: false,
                                        clase: "",
                                        cuota: "",
                                        nombreCuota: "",
                                        importacionSencillo: "",
                                        importacionFull: "",
                                        exportacionSencillo: "",
                                        exportacionFull: "",
                                        reutilizadoSencillo: "",
                                        reutilizadoFull: ""
                                    }

                                    $scope.muestra_mensaje = false;
                                    $scope.mensaje = "";

                                    $scope.nuevaTarifa = function(){
                                        if(!$scope.clase){
                                            $scope.muestra_mensaje = true;
                                            $scope.mensaje = "Agrega una clase para poder continuar";
                                            return;
                                        }
                                        else if( $scope.tarifa_nueva.reutilizarCuota ){

                                        }
                                        else if (! $scope.tarifa_nueva.reutilizarCuota  ){

                                            if( ! $scope.tarifa_nueva.nombreCuota  ){
                                                $scope.mensaje = "Introduce un nombre para la cuota";
                                                $scope.muestra_mensaje = true;
                                                return;
                                            }

                                            if(! $scope.tarifa_nueva.importacionSencillo
                                                || ! $scope.tarifa_nueva.importacionFull
                                                || ! $scope.tarifa_nueva.exportacionSencillo
                                                || ! $scope.tarifa_nueva.exportacionFull
                                                || ! $scope.tarifa_nueva.reutilizadoFull
                                                || ! $scope.tarifa_nueva.reutilizadoSencillo
                                                ){
                                                $scope.mensaje = "Alguno de los campos de las cuotas falta de rellenarse";
                                                $scope.muestra_mensaje = true;
                                                return;
                                            }
                                            else{
                                                if(! $.isNumeric($scope.tarifa_nueva.importacionSencillo)){
                                                    $scope.valorNoEntero();
                                                    return;
                                                }
                                                if(! $.isNumeric($scope.tarifa_nueva.exportacionSencillo) ){
                                                    $scope.valorNoEntero();
                                                    return;
                                                }
                                                if(! $.isNumeric($scope.tarifa_nueva.exportacionFull) ){
                                                    $scope.valorNoEntero();
                                                    return;
                                                }
                                                if(! $.isNumeric($scope.tarifa_nueva.importacionFull) ){
                                                    $scope.valorNoEntero();
                                                    return;
                                                }
                                                if(! $.isNumeric($scope.tarifa_nueva.reutilizadoFull) ){
                                                    $scope.valorNoEntero();
                                                    return;
                                                }
                                                if(! $.isNumeric($scope.tarifa_nueva.reutilizadoSencillo) ){
                                                    $scope.valorNoEntero();
                                                    return;
                                                }
                                            }
                                        }

                                        Tarifa.save({}, { nuevaTarifa : $scope.tarifa_nueva }, function(data){

                                            if( data.resultado ){
                                                $('#mensaje').removeClass("alert-danger").addClass("alert-success");
                                            }
                                            else{
                                                $('#mensaje').removeClass("alert-success").addClass("alert-danger");
                                            }

                                            $scope.mensaje = data.mensaje;
                                            $scope.muestra_mensaje = true;
                                            $scope.getTarifas();

                                        } );

                                        $scope.load = false;
                                        $scope.addTarifa = true;



                                    }

                                    $(document.body).click(function(e){
                                        $scope.muestra_mensaje = false;
                                    });

                                    $scope.valorNoEntero = function(){
                                        $scope.mensaje = "Compruebe sus datos, al parecer no son numeros";
                                        $scope.muestra_mensaje = true;
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

