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
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/hello')) {
            // pr2_l_article_homepage
            if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pr2_l_article_homepage')), array (  '_controller' => 'PR2L\\ArticleBundle\\Controller\\DefaultController::indexAction',));
            }

            // pr2_l_menu_homepage
            if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pr2_l_menu_homepage')), array (  '_controller' => 'PR2L\\MenuBundle\\Controller\\DefaultController::indexAction',));
            }

        }

        if (0 === strpos($pathinfo, '/user')) {
            // pr2l_user_main
            if (rtrim($pathinfo, '/') === '/user') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'pr2l_user_main');
                }

                return array (  '_controller' => 'PR2L\\UserBundle\\Controller\\ProfilController::indexAction',  '_route' => 'pr2l_user_main',);
            }

            // pr2l_user_view
            if (0 === strpos($pathinfo, '/user/view') && preg_match('#^/user/view(?:/(?P<id>\\d))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pr2l_user_view')), array (  '_controller' => 'PR2L\\UserBundle\\Controller\\ProfilController::viewAction',  'id' => NULL,));
            }

            // pr2l__user_add
            if ($pathinfo === '/user/add') {
                return array (  '_controller' => 'PR2L\\UserBundle\\Controller\\ProfilController::addAction',  '_route' => 'pr2l__user_add',);
            }

            // pr2l_user_remove
            if (0 === strpos($pathinfo, '/user/remove') && preg_match('#^/user/remove/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pr2l_user_remove')), array (  '_controller' => 'PR2L\\UserBundle\\Controller\\ProfilController::removeAction',));
            }

            // pr2l_user_edit
            if (0 === strpos($pathinfo, '/user/edit') && preg_match('#^/user/edit(?:/(?P<id>\\d))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pr2l_user_edit')), array (  '_controller' => 'PR2L\\UserBundle\\Controller\\ProfilController::editAction',  'id' => NULL,));
            }

            // pr2l_user_list
            if ($pathinfo === '/user/list') {
                return array (  '_controller' => 'PR2L\\UserBundle\\Controller\\ProfilController::listAction',  '_route' => 'pr2l_user_list',);
            }

            if (0 === strpos($pathinfo, '/user/demo')) {
                // pr2l_demo_formArticle
                if ($pathinfo === '/user/demo/article') {
                    return array (  '_controller' => 'PR2L\\UserBundle\\Controller\\ProfilController::formArticleAction',  '_route' => 'pr2l_demo_formArticle',);
                }

                // pr2l_demo_listerNews
                if ($pathinfo === '/user/demo/news') {
                    return array (  '_controller' => 'PR2L\\UserBundle\\Controller\\ProfilController::listerNewsAction',  '_route' => 'pr2l_demo_listerNews',);
                }

            }

        }

        // pr2l_accueil
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'pr2l_accueil');
            }

            return array (  ':' => 'base.html.twig',  '_route' => 'pr2l_accueil',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
