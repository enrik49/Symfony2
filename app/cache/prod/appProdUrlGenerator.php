<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        'JAMAB_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Jazzyweb\\AulasMentor\\AlimentosBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),),
        'JAMAB_listar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Jazzyweb\\AulasMentor\\AlimentosBundle\\Controller\\DefaultController::listarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/listar',    ),  ),  4 =>   array (  ),),
        'JAMAB_insertar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Jazzyweb\\AulasMentor\\AlimentosBundle\\Controller\\DefaultController::insertarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/insertar',    ),  ),  4 =>   array (  ),),
        'JAMAB_buscar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Jazzyweb\\AulasMentor\\AlimentosBundle\\Controller\\DefaultController::buscarPorNombreAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/buscar',    ),  ),  4 =>   array (  ),),
        'JAMAB_ver' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Jazzyweb\\AulasMentor\\AlimentosBundle\\Controller\\DefaultController::verAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/ver',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
