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
    private static $declaredRoutes = array(
        'pr2_l_article_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'PR2L\\ArticleBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/publication/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pr2l_menu_accueil' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PR2L\\MenuBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pr2l_user_main' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PR2L\\UserBundle\\Controller\\ProfilController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pr2l_user_view' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'PR2L\\UserBundle\\Controller\\ProfilController::viewAction',    'id' => NULL,  ),  2 =>   array (    'id' => '\\d',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/user/view',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pr2l__user_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PR2L\\UserBundle\\Controller\\ProfilController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pr2l_user_remove' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'PR2L\\UserBundle\\Controller\\ProfilController::removeAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/user/remove',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pr2l_user_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'PR2L\\UserBundle\\Controller\\ProfilController::editAction',    'id' => NULL,  ),  2 =>   array (    'id' => '\\d',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/user/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pr2l_user_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PR2L\\UserBundle\\Controller\\ProfilController::listAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pr2l_user_connexion' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PR2L\\UserBundle\\Controller\\ProfilController::connexionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/connexion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pr2l_demo_formArticle' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PR2L\\UserBundle\\Controller\\ProfilController::formArticleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/demo/article',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pr2l_demo_listerNews' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PR2L\\UserBundle\\Controller\\ProfilController::listerNewsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/demo/news',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
