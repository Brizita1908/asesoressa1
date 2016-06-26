<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'asesores_sa_main_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AsesoresSA\\MainBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/AsesoresSA',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'asesores_sa_inicio' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AsesoresSA\\MainBundle\\Controller\\UsuariosController::indexUsuarioAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/index',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'asesores_sa_nuevoRamo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AsesoresSA\\MainBundle\\Controller\\RamoController::nuevoRamoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ramo/nuevo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'asesores_sa_editarRamo' => array (  0 =>   array (    0 => 'siglaramo',  ),  1 =>   array (    '_controller' => 'AsesoresSA\\MainBundle\\Controller\\RamoController::editarRamoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'siglaramo',    ),    1 =>     array (      0 => 'text',      1 => '/ramo/editar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'asesores_sa_eliminaRamo' => array (  0 =>   array (    0 => 'siglaramo',  ),  1 =>   array (    '_controller' => 'AsesoresSA\\MainBundle\\Controller\\RamoController::eliminaRamoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'siglaramo',    ),    1 =>     array (      0 => 'text',      1 => '/ramo/eliminar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'asesores_sa_listarRamo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AsesoresSA\\MainBundle\\Controller\\RamoController::listarRamoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ramo/listar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'asesores_sa_nuevoMovimiento' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AsesoresSA\\MainBundle\\Controller\\MovimientoController::nuevoMovimientoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/movimiento/nuevo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'asesores_sa_editarMovimiento' => array (  0 =>   array (    0 => 'siglamovimiento',  ),  1 =>   array (    '_controller' => 'AsesoresSA\\MainBundle\\Controller\\MovimientoController::editMovimientoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'siglamovimiento',    ),    1 =>     array (      0 => 'text',      1 => '/movimiento/editar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'asesores_sa_listarMovimiento' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AsesoresSA\\MainBundle\\Controller\\MovimientoController::listarMovimientoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/movimiento/listar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'asesores_sa_nuevoAnexo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AsesoresSA\\MainBundle\\Controller\\AnexoController::nuevoAnexoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/anexo/nuevo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'asesores_sa_nuevaAseguradora' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AsesoresSA\\MainBundle\\Controller\\AseguradoraController::nuevaAseguradoraAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/aseguradora/nuevo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'asesores_sa_editarAseguradora' => array (  0 =>   array (    0 => 'siglaaseguradora',  ),  1 =>   array (    '_controller' => 'AsesoresSA\\MainBundle\\Controller\\AseguradoraController::editAseguradoraAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'siglaaseguradora',    ),    1 =>     array (      0 => 'text',      1 => '/aseguradora/editar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'asesores_sa_listarAseguradora' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AsesoresSA\\MainBundle\\Controller\\AseguradoraController::listarAseguradoraAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/aseguradora/listar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'asesores_sa_nuevoCliente' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AsesoresSA\\MainBundle\\Controller\\ClienteController::nuevoClienteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/cliente/nuevo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'asesores_sa_editarCliente' => array (  0 =>   array (    0 => 'filecliente',  ),  1 =>   array (    '_controller' => 'AsesoresSA\\MainBundle\\Controller\\ClienteController::editClienteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'filecliente',    ),    1 =>     array (      0 => 'text',      1 => '/cliente/editar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'asesores_sa_listarCliente' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AsesoresSA\\MainBundle\\Controller\\ClienteController::listarClienteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/cliente/listar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'asesores_sa_nuevoUsuario' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AsesoresSA\\MainBundle\\Controller\\UsuariosController::nuevoUsuarioAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/usuario/nuevo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'asesores_sa_listarUsuario' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AsesoresSA\\MainBundle\\Controller\\UsuariosController::listarUsuarioAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/usuario/listar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'asesores_sa_editarUsuario' => array (  0 =>   array (    0 => 'idusuario',  ),  1 =>   array (    '_controller' => 'AsesoresSA\\MainBundle\\Controller\\UsuariosController::editarUsuarioAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idusuario',    ),    1 =>     array (      0 => 'text',      1 => '/usuario/editar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
