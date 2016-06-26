<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
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
        $context = $this->context;
        $request = $this->request;

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

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // asesores_sa_main_homepage
        if ($pathinfo === '/AsesoresSA') {
            return array (  '_controller' => 'AsesoresSA\\MainBundle\\Controller\\DefaultController::indexAction',  '_route' => 'asesores_sa_main_homepage',);
        }

        // asesores_sa_inicio
        if ($pathinfo === '/index') {
            return array (  '_controller' => 'AsesoresSA\\MainBundle\\Controller\\UsuariosController::indexUsuarioAction',  '_route' => 'asesores_sa_inicio',);
        }

        if (0 === strpos($pathinfo, '/ramo')) {
            // asesores_sa_nuevoRamo
            if ($pathinfo === '/ramo/nuevo') {
                return array (  '_controller' => 'AsesoresSA\\MainBundle\\Controller\\RamoController::nuevoRamoAction',  '_route' => 'asesores_sa_nuevoRamo',);
            }

            if (0 === strpos($pathinfo, '/ramo/e')) {
                // asesores_sa_editarRamo
                if (0 === strpos($pathinfo, '/ramo/editar') && preg_match('#^/ramo/editar/(?P<siglaramo>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'asesores_sa_editarRamo')), array (  '_controller' => 'AsesoresSA\\MainBundle\\Controller\\RamoController::editarRamoAction',));
                }

                // asesores_sa_eliminaRamo
                if (0 === strpos($pathinfo, '/ramo/eliminar') && preg_match('#^/ramo/eliminar/(?P<siglaramo>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'asesores_sa_eliminaRamo')), array (  '_controller' => 'AsesoresSA\\MainBundle\\Controller\\RamoController::eliminaRamoAction',));
                }

            }

            // asesores_sa_listarRamo
            if ($pathinfo === '/ramo/listar') {
                return array (  '_controller' => 'AsesoresSA\\MainBundle\\Controller\\RamoController::listarRamoAction',  '_route' => 'asesores_sa_listarRamo',);
            }

        }

        if (0 === strpos($pathinfo, '/movimiento')) {
            // asesores_sa_nuevoMovimiento
            if ($pathinfo === '/movimiento/nuevo') {
                return array (  '_controller' => 'AsesoresSA\\MainBundle\\Controller\\MovimientoController::nuevoMovimientoAction',  '_route' => 'asesores_sa_nuevoMovimiento',);
            }

            // asesores_sa_editarMovimiento
            if (0 === strpos($pathinfo, '/movimiento/editar') && preg_match('#^/movimiento/editar/(?P<siglamovimiento>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'asesores_sa_editarMovimiento')), array (  '_controller' => 'AsesoresSA\\MainBundle\\Controller\\MovimientoController::editMovimientoAction',));
            }

            // asesores_sa_listarMovimiento
            if ($pathinfo === '/movimiento/listar') {
                return array (  '_controller' => 'AsesoresSA\\MainBundle\\Controller\\MovimientoController::listarMovimientoAction',  '_route' => 'asesores_sa_listarMovimiento',);
            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            // asesores_sa_nuevoAnexo
            if ($pathinfo === '/anexo/nuevo') {
                return array (  '_controller' => 'AsesoresSA\\MainBundle\\Controller\\AnexoController::nuevoAnexoAction',  '_route' => 'asesores_sa_nuevoAnexo',);
            }

            if (0 === strpos($pathinfo, '/aseguradora')) {
                // asesores_sa_nuevaAseguradora
                if ($pathinfo === '/aseguradora/nuevo') {
                    return array (  '_controller' => 'AsesoresSA\\MainBundle\\Controller\\AseguradoraController::nuevaAseguradoraAction',  '_route' => 'asesores_sa_nuevaAseguradora',);
                }

                // asesores_sa_editarAseguradora
                if (0 === strpos($pathinfo, '/aseguradora/editar') && preg_match('#^/aseguradora/editar/(?P<siglaaseguradora>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'asesores_sa_editarAseguradora')), array (  '_controller' => 'AsesoresSA\\MainBundle\\Controller\\AseguradoraController::editAseguradoraAction',));
                }

                // asesores_sa_listarAseguradora
                if ($pathinfo === '/aseguradora/listar') {
                    return array (  '_controller' => 'AsesoresSA\\MainBundle\\Controller\\AseguradoraController::listarAseguradoraAction',  '_route' => 'asesores_sa_listarAseguradora',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/cliente')) {
            // asesores_sa_nuevoCliente
            if ($pathinfo === '/cliente/nuevo') {
                return array (  '_controller' => 'AsesoresSA\\MainBundle\\Controller\\ClienteController::nuevoClienteAction',  '_route' => 'asesores_sa_nuevoCliente',);
            }

            // asesores_sa_editarCliente
            if (0 === strpos($pathinfo, '/cliente/editar') && preg_match('#^/cliente/editar/(?P<filecliente>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'asesores_sa_editarCliente')), array (  '_controller' => 'AsesoresSA\\MainBundle\\Controller\\ClienteController::editClienteAction',));
            }

            // asesores_sa_listarCliente
            if ($pathinfo === '/cliente/listar') {
                return array (  '_controller' => 'AsesoresSA\\MainBundle\\Controller\\ClienteController::listarClienteAction',  '_route' => 'asesores_sa_listarCliente',);
            }

        }

        if (0 === strpos($pathinfo, '/usuario')) {
            // asesores_sa_nuevoUsuario
            if ($pathinfo === '/usuario/nuevo') {
                return array (  '_controller' => 'AsesoresSA\\MainBundle\\Controller\\UsuariosController::nuevoUsuarioAction',  '_route' => 'asesores_sa_nuevoUsuario',);
            }

            // asesores_sa_listarUsuario
            if ($pathinfo === '/usuario/listar') {
                return array (  '_controller' => 'AsesoresSA\\MainBundle\\Controller\\UsuariosController::listarUsuarioAction',  '_route' => 'asesores_sa_listarUsuario',);
            }

            // asesores_sa_editarUsuario
            if (0 === strpos($pathinfo, '/usuario/editar') && preg_match('#^/usuario/editar/(?P<idusuario>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'asesores_sa_editarUsuario')), array (  '_controller' => 'AsesoresSA\\MainBundle\\Controller\\UsuariosController::editarUsuarioAction',));
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
