<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'Timsa\\ControlFletesBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
        }

        // login_check
        if ($pathinfo === '/main/login_check') {
            return array('_route' => 'login_check');
        }

        // logout
        if ($pathinfo === '/login') {
            return array('_route' => 'logout');
        }

        // _homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_homepage');
            }

            return array (  '_controller' => 'Timsa\\ControlFletesBundle\\Controller\\PrincipalController::indexAction',  '_route' => '_homepage',);
        }

        if (0 === strpos($pathinfo, '/main')) {
            if (0 === strpos($pathinfo, '/main/operador')) {
                // _operadores
                if ($pathinfo === '/main/operador') {
                    return array (  '_controller' => 'Timsa\\ControlFletesBundle\\Controller\\OperadorController::indexAction',  '_route' => '_operadores',);
                }

                // _crearOperador
                if ($pathinfo === '/main/operador/crear') {
                    return array (  '_controller' => 'Timsa\\ControlFletesBundle\\Controller\\OperadorController::createAction',  '_route' => '_crearOperador',);
                }

            }

            // _socios
            if ($pathinfo === '/main/socio') {
                return array (  '_controller' => 'Timsa\\ControlFletesBundle\\Controller\\SocioController::indexAction',  '_route' => '_socios',);
            }

            // _economicos
            if ($pathinfo === '/main/economico') {
                return array (  '_controller' => 'Timsa\\ControlFletesBundle\\Controller\\EconomicoController::indexAction',  '_route' => '_economicos',);
            }

            if (0 === strpos($pathinfo, '/main/c')) {
                // _clientes
                if ($pathinfo === '/main/cliente') {
                    return array (  '_controller' => 'Timsa\\ControlFletesBundle\\Controller\\ClienteController::indexAction',  '_route' => '_clientes',);
                }

                // _cuotas
                if ($pathinfo === '/main/cuota') {
                    return array (  '_controller' => 'Timsa\\ControlFletesBundle\\Controller\\CuotaController::indexAction',  '_route' => '_cuotas',);
                }

            }

            // _fletes
            if ($pathinfo === '/main/flete') {
                return array (  '_controller' => 'Timsa\\ControlFletesBundle\\Controller\\FleteController::indexAction',  '_route' => '_fletes',);
            }

            // _procesar
            if (0 === strpos($pathinfo, '/main/procesar') && preg_match('#^/main/procesar/(?P<tipo>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_procesar')), array (  '_controller' => 'Timsa\\ControlFletesBundle\\Controller\\ProcesarController::indexAction',));
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if ($pathinfo === '/admin/core/get-short-object-description') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_route' => 'sonata_admin_short_object_information',);
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/timsa/controlfletes')) {
                if (0 === strpos($pathinfo, '/admin/timsa/controlfletes/socio')) {
                    // admin_timsa_controlfletes_socio_list
                    if ($pathinfo === '/admin/timsa/controlfletes/socio/list') {
                        return array (  '_controller' => 'Timsa\\ControlFletesBundle\\Controller\\AdminController::listAction',  '_sonata_admin' => 'sonata.admin.socio',  '_sonata_name' => 'admin_timsa_controlfletes_socio_list',  '_route' => 'admin_timsa_controlfletes_socio_list',);
                    }

                    // admin_timsa_controlfletes_socio_create
                    if ($pathinfo === '/admin/timsa/controlfletes/socio/create') {
                        return array (  '_controller' => 'Timsa\\ControlFletesBundle\\Controller\\AdminController::createAction',  '_sonata_admin' => 'sonata.admin.socio',  '_sonata_name' => 'admin_timsa_controlfletes_socio_create',  '_route' => 'admin_timsa_controlfletes_socio_create',);
                    }

                    // admin_timsa_controlfletes_socio_batch
                    if ($pathinfo === '/admin/timsa/controlfletes/socio/batch') {
                        return array (  '_controller' => 'Timsa\\ControlFletesBundle\\Controller\\AdminController::batchAction',  '_sonata_admin' => 'sonata.admin.socio',  '_sonata_name' => 'admin_timsa_controlfletes_socio_batch',  '_route' => 'admin_timsa_controlfletes_socio_batch',);
                    }

                    // admin_timsa_controlfletes_socio_edit
                    if (preg_match('#^/admin/timsa/controlfletes/socio/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_timsa_controlfletes_socio_edit')), array (  '_controller' => 'Timsa\\ControlFletesBundle\\Controller\\AdminController::editAction',  '_sonata_admin' => 'sonata.admin.socio',  '_sonata_name' => 'admin_timsa_controlfletes_socio_edit',));
                    }

                    // admin_timsa_controlfletes_socio_delete
                    if (preg_match('#^/admin/timsa/controlfletes/socio/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_timsa_controlfletes_socio_delete')), array (  '_controller' => 'Timsa\\ControlFletesBundle\\Controller\\AdminController::deleteAction',  '_sonata_admin' => 'sonata.admin.socio',  '_sonata_name' => 'admin_timsa_controlfletes_socio_delete',));
                    }

                    // admin_timsa_controlfletes_socio_show
                    if (preg_match('#^/admin/timsa/controlfletes/socio/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_timsa_controlfletes_socio_show')), array (  '_controller' => 'Timsa\\ControlFletesBundle\\Controller\\AdminController::showAction',  '_sonata_admin' => 'sonata.admin.socio',  '_sonata_name' => 'admin_timsa_controlfletes_socio_show',));
                    }

                    // admin_timsa_controlfletes_socio_export
                    if ($pathinfo === '/admin/timsa/controlfletes/socio/export') {
                        return array (  '_controller' => 'Timsa\\ControlFletesBundle\\Controller\\AdminController::exportAction',  '_sonata_admin' => 'sonata.admin.socio',  '_sonata_name' => 'admin_timsa_controlfletes_socio_export',  '_route' => 'admin_timsa_controlfletes_socio_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/timsa/controlfletes/user')) {
                    // admin_timsa_controlfletes_user_list
                    if ($pathinfo === '/admin/timsa/controlfletes/user/list') {
                        return array (  '_controller' => 'Timsa\\ControlFletesBundle\\Controller\\AdminController::listAction',  '_sonata_admin' => 'sonata.admin.user',  '_sonata_name' => 'admin_timsa_controlfletes_user_list',  '_route' => 'admin_timsa_controlfletes_user_list',);
                    }

                    // admin_timsa_controlfletes_user_create
                    if ($pathinfo === '/admin/timsa/controlfletes/user/create') {
                        return array (  '_controller' => 'Timsa\\ControlFletesBundle\\Controller\\AdminController::createAction',  '_sonata_admin' => 'sonata.admin.user',  '_sonata_name' => 'admin_timsa_controlfletes_user_create',  '_route' => 'admin_timsa_controlfletes_user_create',);
                    }

                    // admin_timsa_controlfletes_user_batch
                    if ($pathinfo === '/admin/timsa/controlfletes/user/batch') {
                        return array (  '_controller' => 'Timsa\\ControlFletesBundle\\Controller\\AdminController::batchAction',  '_sonata_admin' => 'sonata.admin.user',  '_sonata_name' => 'admin_timsa_controlfletes_user_batch',  '_route' => 'admin_timsa_controlfletes_user_batch',);
                    }

                    // admin_timsa_controlfletes_user_edit
                    if (preg_match('#^/admin/timsa/controlfletes/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_timsa_controlfletes_user_edit')), array (  '_controller' => 'Timsa\\ControlFletesBundle\\Controller\\AdminController::editAction',  '_sonata_admin' => 'sonata.admin.user',  '_sonata_name' => 'admin_timsa_controlfletes_user_edit',));
                    }

                    // admin_timsa_controlfletes_user_delete
                    if (preg_match('#^/admin/timsa/controlfletes/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_timsa_controlfletes_user_delete')), array (  '_controller' => 'Timsa\\ControlFletesBundle\\Controller\\AdminController::deleteAction',  '_sonata_admin' => 'sonata.admin.user',  '_sonata_name' => 'admin_timsa_controlfletes_user_delete',));
                    }

                    // admin_timsa_controlfletes_user_show
                    if (preg_match('#^/admin/timsa/controlfletes/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_timsa_controlfletes_user_show')), array (  '_controller' => 'Timsa\\ControlFletesBundle\\Controller\\AdminController::showAction',  '_sonata_admin' => 'sonata.admin.user',  '_sonata_name' => 'admin_timsa_controlfletes_user_show',));
                    }

                    // admin_timsa_controlfletes_user_export
                    if ($pathinfo === '/admin/timsa/controlfletes/user/export') {
                        return array (  '_controller' => 'Timsa\\ControlFletesBundle\\Controller\\AdminController::exportAction',  '_sonata_admin' => 'sonata.admin.user',  '_sonata_name' => 'admin_timsa_controlfletes_user_export',  '_route' => 'admin_timsa_controlfletes_user_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/timsa/controlfletes/operador')) {
                    // admin_timsa_controlfletes_operador_list
                    if ($pathinfo === '/admin/timsa/controlfletes/operador/list') {
                        return array (  '_controller' => 'Timsa\\ControlFletesBundle\\Controller\\AdminController::listAction',  '_sonata_admin' => 'sonata.admin.operador',  '_sonata_name' => 'admin_timsa_controlfletes_operador_list',  '_route' => 'admin_timsa_controlfletes_operador_list',);
                    }

                    // admin_timsa_controlfletes_operador_create
                    if ($pathinfo === '/admin/timsa/controlfletes/operador/create') {
                        return array (  '_controller' => 'Timsa\\ControlFletesBundle\\Controller\\AdminController::createAction',  '_sonata_admin' => 'sonata.admin.operador',  '_sonata_name' => 'admin_timsa_controlfletes_operador_create',  '_route' => 'admin_timsa_controlfletes_operador_create',);
                    }

                    // admin_timsa_controlfletes_operador_batch
                    if ($pathinfo === '/admin/timsa/controlfletes/operador/batch') {
                        return array (  '_controller' => 'Timsa\\ControlFletesBundle\\Controller\\AdminController::batchAction',  '_sonata_admin' => 'sonata.admin.operador',  '_sonata_name' => 'admin_timsa_controlfletes_operador_batch',  '_route' => 'admin_timsa_controlfletes_operador_batch',);
                    }

                    // admin_timsa_controlfletes_operador_edit
                    if (preg_match('#^/admin/timsa/controlfletes/operador/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_timsa_controlfletes_operador_edit')), array (  '_controller' => 'Timsa\\ControlFletesBundle\\Controller\\AdminController::editAction',  '_sonata_admin' => 'sonata.admin.operador',  '_sonata_name' => 'admin_timsa_controlfletes_operador_edit',));
                    }

                    // admin_timsa_controlfletes_operador_delete
                    if (preg_match('#^/admin/timsa/controlfletes/operador/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_timsa_controlfletes_operador_delete')), array (  '_controller' => 'Timsa\\ControlFletesBundle\\Controller\\AdminController::deleteAction',  '_sonata_admin' => 'sonata.admin.operador',  '_sonata_name' => 'admin_timsa_controlfletes_operador_delete',));
                    }

                    // admin_timsa_controlfletes_operador_show
                    if (preg_match('#^/admin/timsa/controlfletes/operador/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_timsa_controlfletes_operador_show')), array (  '_controller' => 'Timsa\\ControlFletesBundle\\Controller\\AdminController::showAction',  '_sonata_admin' => 'sonata.admin.operador',  '_sonata_name' => 'admin_timsa_controlfletes_operador_show',));
                    }

                    // admin_timsa_controlfletes_operador_export
                    if ($pathinfo === '/admin/timsa/controlfletes/operador/export') {
                        return array (  '_controller' => 'Timsa\\ControlFletesBundle\\Controller\\AdminController::exportAction',  '_sonata_admin' => 'sonata.admin.operador',  '_sonata_name' => 'admin_timsa_controlfletes_operador_export',  '_route' => 'admin_timsa_controlfletes_operador_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/timsa/controlfletes/role')) {
                    // admin_timsa_controlfletes_role_list
                    if ($pathinfo === '/admin/timsa/controlfletes/role/list') {
                        return array (  '_controller' => 'Timsa\\ControlFletesBundle\\Controller\\AdminController::listAction',  '_sonata_admin' => 'sonata.admin.role',  '_sonata_name' => 'admin_timsa_controlfletes_role_list',  '_route' => 'admin_timsa_controlfletes_role_list',);
                    }

                    // admin_timsa_controlfletes_role_create
                    if ($pathinfo === '/admin/timsa/controlfletes/role/create') {
                        return array (  '_controller' => 'Timsa\\ControlFletesBundle\\Controller\\AdminController::createAction',  '_sonata_admin' => 'sonata.admin.role',  '_sonata_name' => 'admin_timsa_controlfletes_role_create',  '_route' => 'admin_timsa_controlfletes_role_create',);
                    }

                    // admin_timsa_controlfletes_role_batch
                    if ($pathinfo === '/admin/timsa/controlfletes/role/batch') {
                        return array (  '_controller' => 'Timsa\\ControlFletesBundle\\Controller\\AdminController::batchAction',  '_sonata_admin' => 'sonata.admin.role',  '_sonata_name' => 'admin_timsa_controlfletes_role_batch',  '_route' => 'admin_timsa_controlfletes_role_batch',);
                    }

                    // admin_timsa_controlfletes_role_edit
                    if (preg_match('#^/admin/timsa/controlfletes/role/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_timsa_controlfletes_role_edit')), array (  '_controller' => 'Timsa\\ControlFletesBundle\\Controller\\AdminController::editAction',  '_sonata_admin' => 'sonata.admin.role',  '_sonata_name' => 'admin_timsa_controlfletes_role_edit',));
                    }

                    // admin_timsa_controlfletes_role_delete
                    if (preg_match('#^/admin/timsa/controlfletes/role/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_timsa_controlfletes_role_delete')), array (  '_controller' => 'Timsa\\ControlFletesBundle\\Controller\\AdminController::deleteAction',  '_sonata_admin' => 'sonata.admin.role',  '_sonata_name' => 'admin_timsa_controlfletes_role_delete',));
                    }

                    // admin_timsa_controlfletes_role_show
                    if (preg_match('#^/admin/timsa/controlfletes/role/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_timsa_controlfletes_role_show')), array (  '_controller' => 'Timsa\\ControlFletesBundle\\Controller\\AdminController::showAction',  '_sonata_admin' => 'sonata.admin.role',  '_sonata_name' => 'admin_timsa_controlfletes_role_show',));
                    }

                    // admin_timsa_controlfletes_role_export
                    if ($pathinfo === '/admin/timsa/controlfletes/role/export') {
                        return array (  '_controller' => 'Timsa\\ControlFletesBundle\\Controller\\AdminController::exportAction',  '_sonata_admin' => 'sonata.admin.role',  '_sonata_name' => 'admin_timsa_controlfletes_role_export',  '_route' => 'admin_timsa_controlfletes_role_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/timsa/controlfletes/economico')) {
                    // admin_timsa_controlfletes_economico_list
                    if ($pathinfo === '/admin/timsa/controlfletes/economico/list') {
                        return array (  '_controller' => 'Timsa\\ControlFletesBundle\\Controller\\AdminController::listAction',  '_sonata_admin' => 'sonata.admin.economico',  '_sonata_name' => 'admin_timsa_controlfletes_economico_list',  '_route' => 'admin_timsa_controlfletes_economico_list',);
                    }

                    // admin_timsa_controlfletes_economico_create
                    if ($pathinfo === '/admin/timsa/controlfletes/economico/create') {
                        return array (  '_controller' => 'Timsa\\ControlFletesBundle\\Controller\\AdminController::createAction',  '_sonata_admin' => 'sonata.admin.economico',  '_sonata_name' => 'admin_timsa_controlfletes_economico_create',  '_route' => 'admin_timsa_controlfletes_economico_create',);
                    }

                    // admin_timsa_controlfletes_economico_batch
                    if ($pathinfo === '/admin/timsa/controlfletes/economico/batch') {
                        return array (  '_controller' => 'Timsa\\ControlFletesBundle\\Controller\\AdminController::batchAction',  '_sonata_admin' => 'sonata.admin.economico',  '_sonata_name' => 'admin_timsa_controlfletes_economico_batch',  '_route' => 'admin_timsa_controlfletes_economico_batch',);
                    }

                    // admin_timsa_controlfletes_economico_edit
                    if (preg_match('#^/admin/timsa/controlfletes/economico/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_timsa_controlfletes_economico_edit')), array (  '_controller' => 'Timsa\\ControlFletesBundle\\Controller\\AdminController::editAction',  '_sonata_admin' => 'sonata.admin.economico',  '_sonata_name' => 'admin_timsa_controlfletes_economico_edit',));
                    }

                    // admin_timsa_controlfletes_economico_delete
                    if (preg_match('#^/admin/timsa/controlfletes/economico/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_timsa_controlfletes_economico_delete')), array (  '_controller' => 'Timsa\\ControlFletesBundle\\Controller\\AdminController::deleteAction',  '_sonata_admin' => 'sonata.admin.economico',  '_sonata_name' => 'admin_timsa_controlfletes_economico_delete',));
                    }

                    // admin_timsa_controlfletes_economico_show
                    if (preg_match('#^/admin/timsa/controlfletes/economico/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_timsa_controlfletes_economico_show')), array (  '_controller' => 'Timsa\\ControlFletesBundle\\Controller\\AdminController::showAction',  '_sonata_admin' => 'sonata.admin.economico',  '_sonata_name' => 'admin_timsa_controlfletes_economico_show',));
                    }

                    // admin_timsa_controlfletes_economico_export
                    if ($pathinfo === '/admin/timsa/controlfletes/economico/export') {
                        return array (  '_controller' => 'Timsa\\ControlFletesBundle\\Controller\\AdminController::exportAction',  '_sonata_admin' => 'sonata.admin.economico',  '_sonata_name' => 'admin_timsa_controlfletes_economico_export',  '_route' => 'admin_timsa_controlfletes_economico_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/timsa/controlfletes/relacion')) {
                    // admin_timsa_controlfletes_relacion_list
                    if ($pathinfo === '/admin/timsa/controlfletes/relacion/list') {
                        return array (  '_controller' => 'Timsa\\ControlFletesBundle\\Controller\\AdminController::listAction',  '_sonata_admin' => 'sonata.admin.relacion',  '_sonata_name' => 'admin_timsa_controlfletes_relacion_list',  '_route' => 'admin_timsa_controlfletes_relacion_list',);
                    }

                    // admin_timsa_controlfletes_relacion_create
                    if ($pathinfo === '/admin/timsa/controlfletes/relacion/create') {
                        return array (  '_controller' => 'Timsa\\ControlFletesBundle\\Controller\\AdminController::createAction',  '_sonata_admin' => 'sonata.admin.relacion',  '_sonata_name' => 'admin_timsa_controlfletes_relacion_create',  '_route' => 'admin_timsa_controlfletes_relacion_create',);
                    }

                    // admin_timsa_controlfletes_relacion_batch
                    if ($pathinfo === '/admin/timsa/controlfletes/relacion/batch') {
                        return array (  '_controller' => 'Timsa\\ControlFletesBundle\\Controller\\AdminController::batchAction',  '_sonata_admin' => 'sonata.admin.relacion',  '_sonata_name' => 'admin_timsa_controlfletes_relacion_batch',  '_route' => 'admin_timsa_controlfletes_relacion_batch',);
                    }

                    // admin_timsa_controlfletes_relacion_edit
                    if (preg_match('#^/admin/timsa/controlfletes/relacion/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_timsa_controlfletes_relacion_edit')), array (  '_controller' => 'Timsa\\ControlFletesBundle\\Controller\\AdminController::editAction',  '_sonata_admin' => 'sonata.admin.relacion',  '_sonata_name' => 'admin_timsa_controlfletes_relacion_edit',));
                    }

                    // admin_timsa_controlfletes_relacion_delete
                    if (preg_match('#^/admin/timsa/controlfletes/relacion/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_timsa_controlfletes_relacion_delete')), array (  '_controller' => 'Timsa\\ControlFletesBundle\\Controller\\AdminController::deleteAction',  '_sonata_admin' => 'sonata.admin.relacion',  '_sonata_name' => 'admin_timsa_controlfletes_relacion_delete',));
                    }

                    // admin_timsa_controlfletes_relacion_show
                    if (preg_match('#^/admin/timsa/controlfletes/relacion/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_timsa_controlfletes_relacion_show')), array (  '_controller' => 'Timsa\\ControlFletesBundle\\Controller\\AdminController::showAction',  '_sonata_admin' => 'sonata.admin.relacion',  '_sonata_name' => 'admin_timsa_controlfletes_relacion_show',));
                    }

                    // admin_timsa_controlfletes_relacion_export
                    if ($pathinfo === '/admin/timsa/controlfletes/relacion/export') {
                        return array (  '_controller' => 'Timsa\\ControlFletesBundle\\Controller\\AdminController::exportAction',  '_sonata_admin' => 'sonata.admin.relacion',  '_sonata_name' => 'admin_timsa_controlfletes_relacion_export',  '_route' => 'admin_timsa_controlfletes_relacion_export',);
                    }

                }

            }

        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
