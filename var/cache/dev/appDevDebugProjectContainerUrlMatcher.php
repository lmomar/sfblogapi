<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

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
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // post_default_index
        if ('/posts' === $pathinfo) {
            return array (  '_controller' => 'PostBundle\\Controller\\DefaultController::indexAction',  '_route' => 'post_default_index',);
        }

        // add_student
        if ('/students/add' === $pathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\StudentController:addStudentAction',  '_format' => NULL,  '_route' => 'add_student',);
            if (!in_array($canonicalMethod, array('GET'))) {
                $allow = array_merge($allow, array('GET'));
                goto not_add_student;
            }

            return $ret;
        }
        not_add_student:

        // app_student_addstudent
        if ('/student/add' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\StudentController::addStudentAction',  '_route' => 'app_student_addstudent',);
        }

        if (0 === strpos($pathinfo, '/api')) {
            if (0 === strpos($pathinfo, '/api/student/add')) {
                // api_add_student
                if ('/api/student/add' === $pathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\StudentController:apiAddStudentAction',  '_format' => NULL,  '_route' => 'api_add_student',);
                    if (!in_array($requestMethod, array('POST'))) {
                        $allow = array_merge($allow, array('POST'));
                        goto not_api_add_student;
                    }

                    return $ret;
                }
                not_api_add_student:

                // app_student_apiaddstudent
                if ('/api/student/add' === $pathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\StudentController::apiAddStudentAction',  '_route' => 'app_student_apiaddstudent',);
                    if (!in_array($requestMethod, array('POST'))) {
                        $allow = array_merge($allow, array('POST'));
                        goto not_app_student_apiaddstudent;
                    }

                    return $ret;
                }
                not_app_student_apiaddstudent:

            }

            elseif (0 === strpos($pathinfo, '/api/category')) {
                // app_category_postcategory
                if ('/api/category/add' === $pathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\CategoryController::postCategoryAction',  '_route' => 'app_category_postcategory',);
                    if (!in_array($requestMethod, array('POST'))) {
                        $allow = array_merge($allow, array('POST'));
                        goto not_app_category_postcategory;
                    }

                    return $ret;
                }
                not_app_category_postcategory:

                // app_category_putcategory
                if (0 === strpos($pathinfo, '/api/category/edit') && preg_match('#^/api/category/edit/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'app_category_putcategory')), array (  '_controller' => 'AppBundle\\Controller\\CategoryController::putCategoryAction',));
                    if (!in_array($requestMethod, array('PUT'))) {
                        $allow = array_merge($allow, array('PUT'));
                        goto not_app_category_putcategory;
                    }

                    return $ret;
                }
                not_app_category_putcategory:

                // app_category_removecategory
                if (0 === strpos($pathinfo, '/api/category/remove') && preg_match('#^/api/category/remove/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'app_category_removecategory')), array (  '_controller' => 'AppBundle\\Controller\\CategoryController::removeCategoryAction',));
                    if (!in_array($requestMethod, array('DELETE'))) {
                        $allow = array_merge($allow, array('DELETE'));
                        goto not_app_category_removecategory;
                    }

                    return $ret;
                }
                not_app_category_removecategory:

            }

            elseif (0 === strpos($pathinfo, '/api/categories')) {
                // app_category_getcategories
                if (preg_match('#^/api/categories/(?P<page>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'app_category_getcategories')), array (  '_controller' => 'AppBundle\\Controller\\CategoryController::getCategoriesAction',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_app_category_getcategories;
                    }

                    return $ret;
                }
                not_app_category_getcategories:

                // app_category_getallcategories
                if ('/api/categories' === $pathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\CategoryController::getAllCategoriesAction',  '_route' => 'app_category_getallcategories',);
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_app_category_getallcategories;
                    }

                    return $ret;
                }
                not_app_category_getallcategories:

            }

            elseif (0 === strpos($pathinfo, '/api/post')) {
                // app_post_postpost
                if ('/api/post/add' === $pathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\PostController::postPostAction',  '_route' => 'app_post_postpost',);
                    if (!in_array($requestMethod, array('POST'))) {
                        $allow = array_merge($allow, array('POST'));
                        goto not_app_post_postpost;
                    }

                    return $ret;
                }
                not_app_post_postpost:

                // app_post_putpost
                if (0 === strpos($pathinfo, '/api/post/edit') && preg_match('#^/api/post/edit/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'app_post_putpost')), array (  '_controller' => 'AppBundle\\Controller\\PostController::putPostAction',));
                    if (!in_array($requestMethod, array('PUT'))) {
                        $allow = array_merge($allow, array('PUT'));
                        goto not_app_post_putpost;
                    }

                    return $ret;
                }
                not_app_post_putpost:

                if (0 === strpos($pathinfo, '/api/posts')) {
                    // app_post_getpostsbycategory
                    if (0 === strpos($pathinfo, '/api/posts/category') && preg_match('#^/api/posts/category/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'app_post_getpostsbycategory')), array (  '_controller' => 'AppBundle\\Controller\\PostController::getPostsByCategoryAction',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_app_post_getpostsbycategory;
                        }

                        return $ret;
                    }
                    not_app_post_getpostsbycategory:

                    // app_post_getposts
                    if (preg_match('#^/api/posts/(?P<page>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'app_post_getposts')), array (  '_controller' => 'AppBundle\\Controller\\PostController::getPostsAction',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_app_post_getposts;
                        }

                        return $ret;
                    }
                    not_app_post_getposts:

                }

                // app_post_getpost
                if ('/api/post/{id]' === $pathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\PostController::getPostAction',  '_route' => 'app_post_getpost',);
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_app_post_getpost;
                    }

                    return $ret;
                }
                not_app_post_getpost:

                // app_post_removepost
                if (0 === strpos($pathinfo, '/api/post/remove') && preg_match('#^/api/post/remove/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'app_post_removepost')), array (  '_controller' => 'AppBundle\\Controller\\PostController::removePostAction',));
                    if (!in_array($requestMethod, array('DELETE'))) {
                        $allow = array_merge($allow, array('DELETE'));
                        goto not_app_post_removepost;
                    }

                    return $ret;
                }
                not_app_post_removepost:

            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        // app.swagger_ui
        if ('/doc' === $pathinfo) {
            $ret = array (  '_controller' => 'nelmio_api_doc.controller.swagger_ui',  '_route' => 'app.swagger_ui',);
            if (!in_array($canonicalMethod, array('GET'))) {
                $allow = array_merge($allow, array('GET'));
                goto not_appswagger_ui;
            }

            return $ret;
        }
        not_appswagger_ui:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
