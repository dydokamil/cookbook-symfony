<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/ingredient')) {
            // ingredient_index
            if (rtrim($pathinfo, '/') === '/ingredient') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ingredient_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ingredient_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\IngredientController::indexAction',  '_route' => 'ingredient_index',);
            }
            not_ingredient_index:

            // ingredient_new
            if ($pathinfo === '/ingredient/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_ingredient_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\IngredientController::newAction',  '_route' => 'ingredient_new',);
            }
            not_ingredient_new:

            // ingredient_show
            if (preg_match('#^/ingredient/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ingredient_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ingredient_show')), array (  '_controller' => 'AppBundle\\Controller\\IngredientController::showAction',));
            }
            not_ingredient_show:

            // ingredient_edit
            if (preg_match('#^/ingredient/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_ingredient_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ingredient_edit')), array (  '_controller' => 'AppBundle\\Controller\\IngredientController::editAction',));
            }
            not_ingredient_edit:

            // ingredient_delete
            if (preg_match('#^/ingredient/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_ingredient_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ingredient_delete')), array (  '_controller' => 'AppBundle\\Controller\\IngredientController::deleteAction',));
            }
            not_ingredient_delete:

        }

        if (0 === strpos($pathinfo, '/recipe')) {
            // recipe_index
            if (rtrim($pathinfo, '/') === '/recipe') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_recipe_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'recipe_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\RecipeController::indexAction',  '_route' => 'recipe_index',);
            }
            not_recipe_index:

            // recipe_new
            if ($pathinfo === '/recipe/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_recipe_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\RecipeController::newAction',  '_route' => 'recipe_new',);
            }
            not_recipe_new:

            // recipe_show
            if (preg_match('#^/recipe/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_recipe_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'recipe_show')), array (  '_controller' => 'AppBundle\\Controller\\RecipeController::showAction',));
            }
            not_recipe_show:

            // recipe_edit
            if (preg_match('#^/recipe/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_recipe_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'recipe_edit')), array (  '_controller' => 'AppBundle\\Controller\\RecipeController::editAction',));
            }
            not_recipe_edit:

            // recipe_delete
            if (preg_match('#^/recipe/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_recipe_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'recipe_delete')), array (  '_controller' => 'AppBundle\\Controller\\RecipeController::deleteAction',));
            }
            not_recipe_delete:

            if (0 === strpos($pathinfo, '/recipestep')) {
                // recipestep_index
                if (rtrim($pathinfo, '/') === '/recipestep') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_recipestep_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'recipestep_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\RecipeStepController::indexAction',  '_route' => 'recipestep_index',);
                }
                not_recipestep_index:

                // recipestep_new
                if ($pathinfo === '/recipestep/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_recipestep_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\RecipeStepController::newAction',  '_route' => 'recipestep_new',);
                }
                not_recipestep_new:

                // recipestep_show
                if (preg_match('#^/recipestep/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_recipestep_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'recipestep_show')), array (  '_controller' => 'AppBundle\\Controller\\RecipeStepController::showAction',));
                }
                not_recipestep_show:

                // recipestep_edit
                if (preg_match('#^/recipestep/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_recipestep_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'recipestep_edit')), array (  '_controller' => 'AppBundle\\Controller\\RecipeStepController::editAction',));
                }
                not_recipestep_edit:

                // recipestep_delete
                if (preg_match('#^/recipestep/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_recipestep_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'recipestep_delete')), array (  '_controller' => 'AppBundle\\Controller\\RecipeStepController::deleteAction',));
                }
                not_recipestep_delete:

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
