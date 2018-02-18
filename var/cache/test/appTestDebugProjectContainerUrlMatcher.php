<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appTestDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
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

        // post_default_index
        if ('/posts' === $pathinfo) {
            return array (  '_controller' => 'PostBundle\\Controller\\DefaultController::indexAction',  '_route' => 'post_default_index',);
        }

        if (0 === strpos($pathinfo, '/api')) {
            if (0 === strpos($pathinfo, '/api/category')) {
                // app_category_postcategory
                if ('/api/category/add' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_app_category_postcategory;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\CategoryController::postCategoryAction',  '_route' => 'app_category_postcategory',);
                }
                not_app_category_postcategory:

                // app_category_putcategory
                if (0 === strpos($pathinfo, '/api/category/edit') && preg_match('#^/api/category/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('PUT' !== $canonicalMethod) {
                        $allow[] = 'PUT';
                        goto not_app_category_putcategory;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_category_putcategory')), array (  '_controller' => 'AppBundle\\Controller\\CategoryController::putCategoryAction',));
                }
                not_app_category_putcategory:

                // app_category_removecategory
                if (0 === strpos($pathinfo, '/api/category/remove') && preg_match('#^/api/category/remove/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_app_category_removecategory;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_category_removecategory')), array (  '_controller' => 'AppBundle\\Controller\\CategoryController::removeCategoryAction',));
                }
                not_app_category_removecategory:

            }

            elseif (0 === strpos($pathinfo, '/api/categories')) {
                // app_category_getcategories
                if (preg_match('#^/api/categories/(?P<page>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_app_category_getcategories;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_category_getcategories')), array (  '_controller' => 'AppBundle\\Controller\\CategoryController::getCategoriesAction',));
                }
                not_app_category_getcategories:

                // app_category_getallcategories
                if ('/api/categories' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_app_category_getallcategories;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\CategoryController::getAllCategoriesAction',  '_route' => 'app_category_getallcategories',);
                }
                not_app_category_getallcategories:

            }

            elseif (0 === strpos($pathinfo, '/api/post')) {
                // app_post_postpost
                if ('/api/post/add' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_app_post_postpost;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\PostController::postPostAction',  '_route' => 'app_post_postpost',);
                }
                not_app_post_postpost:

                // app_post_putpost
                if (0 === strpos($pathinfo, '/api/post/edit') && preg_match('#^/api/post/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if ('PUT' !== $canonicalMethod) {
                        $allow[] = 'PUT';
                        goto not_app_post_putpost;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_post_putpost')), array (  '_controller' => 'AppBundle\\Controller\\PostController::putPostAction',));
                }
                not_app_post_putpost:

                if (0 === strpos($pathinfo, '/api/posts')) {
                    // app_post_getpostsbycategory
                    if (0 === strpos($pathinfo, '/api/posts/category') && preg_match('#^/api/posts/category/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_app_post_getpostsbycategory;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_post_getpostsbycategory')), array (  '_controller' => 'AppBundle\\Controller\\PostController::getPostsByCategoryAction',));
                    }
                    not_app_post_getpostsbycategory:

                    // app_post_getposts
                    if (preg_match('#^/api/posts/(?P<page>[^/]++)$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_app_post_getposts;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_post_getposts')), array (  '_controller' => 'AppBundle\\Controller\\PostController::getPostsAction',));
                    }
                    not_app_post_getposts:

                }

                // app_post_getpost
                if ('/api/post/{id]' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_app_post_getpost;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\PostController::getPostAction',  '_route' => 'app_post_getpost',);
                }
                not_app_post_getpost:

                // app_post_removepost
                if (0 === strpos($pathinfo, '/api/post/remove') && preg_match('#^/api/post/remove/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_app_post_removepost;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_post_removepost')), array (  '_controller' => 'AppBundle\\Controller\\PostController::removePostAction',));
                }
                not_app_post_removepost:

            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }

        // app.swagger_ui
        if ('/doc' === $pathinfo) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_appswagger_ui;
            }

            return array (  '_controller' => 'nelmio_api_doc.controller.swagger_ui',  '_route' => 'app.swagger_ui',);
        }
        not_appswagger_ui:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
