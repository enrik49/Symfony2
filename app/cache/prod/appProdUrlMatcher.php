<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // JAMAB_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'JAMAB_homepage');
            }

            return array (  '_controller' => 'Jazzyweb\\AulasMentor\\AlimentosBundle\\Controller\\DefaultController::indexAction',  '_route' => 'JAMAB_homepage',);
        }

        // JAMAB_listar
        if ($pathinfo === '/listar') {
            return array (  '_controller' => 'Jazzyweb\\AulasMentor\\AlimentosBundle\\Controller\\DefaultController::listarAction',  '_route' => 'JAMAB_listar',);
        }

        // JAMAB_insertar
        if ($pathinfo === '/insertar') {
            return array (  '_controller' => 'Jazzyweb\\AulasMentor\\AlimentosBundle\\Controller\\DefaultController::insertarAction',  '_route' => 'JAMAB_insertar',);
        }

        // JAMAB_buscar
        if ($pathinfo === '/buscar') {
            return array (  '_controller' => 'Jazzyweb\\AulasMentor\\AlimentosBundle\\Controller\\DefaultController::buscarPorNombreAction',  '_route' => 'JAMAB_buscar',);
        }

        // JAMAB_ver
        if (0 === strpos($pathinfo, '/ver') && preg_match('#^/ver/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'JAMAB_ver')), array (  '_controller' => 'Jazzyweb\\AulasMentor\\AlimentosBundle\\Controller\\DefaultController::verAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
