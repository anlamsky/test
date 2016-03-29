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

        if (0 === strpos($pathinfo, '/review')) {
            // review
            if (rtrim($pathinfo, '/') === '/review') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'review');
                }

                return array (  '_controller' => 'SF\\SmartfixBundle\\Controller\\ReviewController::indexAction',  '_route' => 'review',);
            }

            // review_show
            if (preg_match('#^/review/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'review_show')), array (  '_controller' => 'SF\\SmartfixBundle\\Controller\\ReviewController::showAction',));
            }

            // review_new
            if ($pathinfo === '/review/new') {
                return array (  '_controller' => 'SF\\SmartfixBundle\\Controller\\ReviewController::newAction',  '_route' => 'review_new',);
            }

            // review_create
            if ($pathinfo === '/review/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_review_create;
                }

                return array (  '_controller' => 'SF\\SmartfixBundle\\Controller\\ReviewController::createAction',  '_route' => 'review_create',);
            }
            not_review_create:

            // review_edit
            if (preg_match('#^/review/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'review_edit')), array (  '_controller' => 'SF\\SmartfixBundle\\Controller\\ReviewController::editAction',));
            }

            // review_update
            if (preg_match('#^/review/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_review_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'review_update')), array (  '_controller' => 'SF\\SmartfixBundle\\Controller\\ReviewController::updateAction',));
            }
            not_review_update:

            // review_delete
            if (preg_match('#^/review/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_review_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'review_delete')), array (  '_controller' => 'SF\\SmartfixBundle\\Controller\\ReviewController::deleteAction',));
            }
            not_review_delete:

        }

        if (0 === strpos($pathinfo, '/s')) {
            if (0 === strpos($pathinfo, '/support')) {
                // support
                if (rtrim($pathinfo, '/') === '/support') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'support');
                    }

                    return array (  '_controller' => 'SF\\SmartfixBundle\\Controller\\SupportController::indexAction',  '_route' => 'support',);
                }

                // support_show
                if (preg_match('#^/support/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'support_show')), array (  '_controller' => 'SF\\SmartfixBundle\\Controller\\SupportController::showAction',));
                }

                // support_new
                if ($pathinfo === '/support/new') {
                    return array (  '_controller' => 'SF\\SmartfixBundle\\Controller\\SupportController::newAction',  '_route' => 'support_new',);
                }

                // support_create
                if ($pathinfo === '/support/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_support_create;
                    }

                    return array (  '_controller' => 'SF\\SmartfixBundle\\Controller\\SupportController::createAction',  '_route' => 'support_create',);
                }
                not_support_create:

                // support_edit
                if (preg_match('#^/support/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'support_edit')), array (  '_controller' => 'SF\\SmartfixBundle\\Controller\\SupportController::editAction',));
                }

                // support_update
                if (preg_match('#^/support/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_support_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'support_update')), array (  '_controller' => 'SF\\SmartfixBundle\\Controller\\SupportController::updateAction',));
                }
                not_support_update:

                // support_delete
                if (preg_match('#^/support/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_support_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'support_delete')), array (  '_controller' => 'SF\\SmartfixBundle\\Controller\\SupportController::deleteAction',));
                }
                not_support_delete:

            }

            if (0 === strpos($pathinfo, '/service')) {
                // service
                if (rtrim($pathinfo, '/') === '/service') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'service');
                    }

                    return array (  '_controller' => 'SF\\SmartfixBundle\\Controller\\ServiceController::indexAction',  '_route' => 'service',);
                }

                // service_show
                if (preg_match('#^/service/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'service_show')), array (  '_controller' => 'SF\\SmartfixBundle\\Controller\\ServiceController::showAction',));
                }

                // service_new
                if ($pathinfo === '/service/new') {
                    return array (  '_controller' => 'SF\\SmartfixBundle\\Controller\\ServiceController::newAction',  '_route' => 'service_new',);
                }

                // service_create
                if ($pathinfo === '/service/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_service_create;
                    }

                    return array (  '_controller' => 'SF\\SmartfixBundle\\Controller\\ServiceController::createAction',  '_route' => 'service_create',);
                }
                not_service_create:

                // service_edit
                if (preg_match('#^/service/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'service_edit')), array (  '_controller' => 'SF\\SmartfixBundle\\Controller\\ServiceController::editAction',));
                }

                // service_update
                if (preg_match('#^/service/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_service_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'service_update')), array (  '_controller' => 'SF\\SmartfixBundle\\Controller\\ServiceController::updateAction',));
                }
                not_service_update:

                // service_delete
                if (preg_match('#^/service/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_service_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'service_delete')), array (  '_controller' => 'SF\\SmartfixBundle\\Controller\\ServiceController::deleteAction',));
                }
                not_service_delete:

            }

        }

        if (0 === strpos($pathinfo, '/client')) {
            // client
            if (rtrim($pathinfo, '/') === '/client') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'client');
                }

                return array (  '_controller' => 'SF\\SmartfixBundle\\Controller\\ClientController::indexAction',  '_route' => 'client',);
            }

            // client_show
            if (preg_match('#^/client/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_show')), array (  '_controller' => 'SF\\SmartfixBundle\\Controller\\ClientController::showAction',));
            }

            // client_new
            if ($pathinfo === '/client/new') {
                return array (  '_controller' => 'SF\\SmartfixBundle\\Controller\\ClientController::newAction',  '_route' => 'client_new',);
            }

            // client_create
            if ($pathinfo === '/client/create') {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_client_create;
                }

                return array (  '_controller' => 'SF\\SmartfixBundle\\Controller\\ClientController::createAction',  '_format' => NULL,  '_route' => 'client_create',);
            }
            not_client_create:

            // client_edit
            if (preg_match('#^/client/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_edit')), array (  '_controller' => 'SF\\SmartfixBundle\\Controller\\ClientController::editAction',));
            }

            // client_update
            if (preg_match('#^/client/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_client_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_update')), array (  '_controller' => 'SF\\SmartfixBundle\\Controller\\ClientController::updateAction',));
            }
            not_client_update:

            // client_delete
            if (preg_match('#^/client/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_client_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_delete')), array (  '_controller' => 'SF\\SmartfixBundle\\Controller\\ClientController::deleteAction',));
            }
            not_client_delete:

        }

        // smartfix_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'smartfix_homepage')), array (  '_controller' => 'SF\\SmartfixBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/api')) {
            if (0 === strpos($pathinfo, '/api/client')) {
                // add_client
                if (0 === strpos($pathinfo, '/api/client/create') && preg_match('#^/api/client/create(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_add_client;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'add_client')), array (  '_controller' => 'SF\\RESTBundle\\Controller\\ClientRestController::signUpAction',  '_format' => 'json',));
                }
                not_add_client:

                // login_client
                if (0 === strpos($pathinfo, '/api/client/login') && preg_match('#^/api/client/login(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_login_client;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'login_client')), array (  '_controller' => 'SF\\RESTBundle\\Controller\\ClientRestController::signInAction',  '_format' => 'json',));
                }
                not_login_client:

                // forgot_pass_client
                if (0 === strpos($pathinfo, '/api/client/forgotpass') && preg_match('#^/api/client/forgotpass(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_forgot_pass_client;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'forgot_pass_client')), array (  '_controller' => 'SF\\RESTBundle\\Controller\\ClientRestController::clientForgotPasswordAction',  '_format' => 'json',));
                }
                not_forgot_pass_client:

                // upload_avatar_client
                if (0 === strpos($pathinfo, '/api/client/avatar') && preg_match('#^/api/client/avatar(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_upload_avatar_client;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'upload_avatar_client')), array (  '_controller' => 'SF\\RESTBundle\\Controller\\ClientRestController::clientUploadAvatarAction',  '_format' => 'json',));
                }
                not_upload_avatar_client:

            }

            if (0 === strpos($pathinfo, '/api/s')) {
                if (0 === strpos($pathinfo, '/api/service')) {
                    // list_service
                    if (0 === strpos($pathinfo, '/api/service/list') && preg_match('#^/api/service/list(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_list_service;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'list_service')), array (  '_controller' => 'SF\\RESTBundle\\Controller\\ServiceRestController::getListServiceAction',  '_format' => 'json',));
                    }
                    not_list_service:

                    // add_service
                    if (0 === strpos($pathinfo, '/api/service/create') && preg_match('#^/api/service/create(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_add_service;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'add_service')), array (  '_controller' => 'SF\\RESTBundle\\Controller\\ServiceRestController::createServiceAction',  '_format' => 'json',));
                    }
                    not_add_service:

                }

                if (0 === strpos($pathinfo, '/api/support')) {
                    // add_support
                    if (0 === strpos($pathinfo, '/api/support/create') && preg_match('#^/api/support/create(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_add_support;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'add_support')), array (  '_controller' => 'SF\\RESTBundle\\Controller\\SupportRestController::createSupportAction',  '_format' => 'json',));
                    }
                    not_add_support:

                    // update_support
                    if (0 === strpos($pathinfo, '/api/support/update') && preg_match('#^/api/support/update(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_update_support;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_support')), array (  '_controller' => 'SF\\RESTBundle\\Controller\\SupportRestController::updateSupportAction',  '_format' => 'json',));
                    }
                    not_update_support:

                    // list_support
                    if (0 === strpos($pathinfo, '/api/support/list') && preg_match('#^/api/support/list(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                            goto not_list_support;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'list_support')), array (  '_controller' => 'SF\\RESTBundle\\Controller\\SupportRestController::listSupportAction',  '_format' => 'json',));
                    }
                    not_list_support:

                }

            }

            // add_review
            if (0 === strpos($pathinfo, '/api/review/create') && preg_match('#^/api/review/create(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_add_review;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'add_review')), array (  '_controller' => 'SF\\RESTBundle\\Controller\\ReviewRestController::createReviewAction',  '_format' => 'json',));
            }
            not_add_review:

        }

        if (0 === strpos($pathinfo, '/product')) {
            // blog_default_index
            if ($pathinfo === '/product/add') {
                return array (  '_controller' => 'BlogBundle\\Controller\\DefaultController::indexAction',  '_route' => 'blog_default_index',);
            }

            // blog_default_show
            if (0 === strpos($pathinfo, '/product/show') && preg_match('#^/product/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_default_show')), array (  '_controller' => 'BlogBundle\\Controller\\DefaultController::showAction',));
            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            // homepage
            if ($pathinfo === '/app/example') {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            }

            if (0 === strpos($pathinfo, '/admin')) {
                if (0 === strpos($pathinfo, '/admin/role')) {
                    // role
                    if (rtrim($pathinfo, '/') === '/admin/role') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'role');
                        }

                        return array (  '_controller' => 'StudentBundle\\Controller\\RoleController::indexAction',  '_route' => 'role',);
                    }

                    // role_show
                    if (preg_match('#^/admin/role/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'role_show')), array (  '_controller' => 'StudentBundle\\Controller\\RoleController::showAction',));
                    }

                    // role_new
                    if ($pathinfo === '/admin/role/new') {
                        return array (  '_controller' => 'StudentBundle\\Controller\\RoleController::newAction',  '_route' => 'role_new',);
                    }

                    // role_create
                    if ($pathinfo === '/admin/role/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_role_create;
                        }

                        return array (  '_controller' => 'StudentBundle\\Controller\\RoleController::createAction',  '_route' => 'role_create',);
                    }
                    not_role_create:

                    // role_edit
                    if (preg_match('#^/admin/role/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'role_edit')), array (  '_controller' => 'StudentBundle\\Controller\\RoleController::editAction',));
                    }

                    // role_update
                    if (preg_match('#^/admin/role/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_role_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'role_update')), array (  '_controller' => 'StudentBundle\\Controller\\RoleController::updateAction',));
                    }
                    not_role_update:

                    // role_delete
                    if (preg_match('#^/admin/role/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_role_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'role_delete')), array (  '_controller' => 'StudentBundle\\Controller\\RoleController::deleteAction',));
                    }
                    not_role_delete:

                }

                if (0 === strpos($pathinfo, '/admin/s')) {
                    if (0 === strpos($pathinfo, '/admin/student')) {
                        // student_show
                        if (preg_match('#^/admin/student/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'student_show')), array (  '_controller' => 'StudentBundle\\Controller\\StudentController::showAction',));
                        }

                        // student_new
                        if ($pathinfo === '/admin/student/new') {
                            return array (  '_controller' => 'StudentBundle\\Controller\\StudentController::newAction',  '_route' => 'student_new',);
                        }

                        // student_create
                        if ($pathinfo === '/admin/student/create') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_student_create;
                            }

                            return array (  '_controller' => 'StudentBundle\\Controller\\StudentController::createAction',  '_route' => 'student_create',);
                        }
                        not_student_create:

                        // student_edit
                        if (preg_match('#^/admin/student/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'student_edit')), array (  '_controller' => 'StudentBundle\\Controller\\StudentController::editAction',));
                        }

                        // student_update
                        if (preg_match('#^/admin/student/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                                $allow = array_merge($allow, array('POST', 'PUT'));
                                goto not_student_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'student_update')), array (  '_controller' => 'StudentBundle\\Controller\\StudentController::updateAction',));
                        }
                        not_student_update:

                        // student_update_image
                        if (preg_match('#^/admin/student/(?P<id>[^/]++)/update\\-image$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                                $allow = array_merge($allow, array('POST', 'PUT'));
                                goto not_student_update_image;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'student_update_image')), array (  '_controller' => 'StudentBundle\\Controller\\StudentController::updateImageAction',));
                        }
                        not_student_update_image:

                        // student_update_brochure
                        if (preg_match('#^/admin/student/(?P<id>[^/]++)/update\\-bpro$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                                $allow = array_merge($allow, array('POST', 'PUT'));
                                goto not_student_update_brochure;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'student_update_brochure')), array (  '_controller' => 'StudentBundle\\Controller\\StudentController::updateBprAction',));
                        }
                        not_student_update_brochure:

                        // student_delete
                        if (preg_match('#^/admin/student/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                                $allow = array_merge($allow, array('POST', 'DELETE'));
                                goto not_student_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'student_delete')), array (  '_controller' => 'StudentBundle\\Controller\\StudentController::deleteAction',));
                        }
                        not_student_delete:

                        if (0 === strpos($pathinfo, '/admin/student/student')) {
                            // student_up_position
                            if ($pathinfo === '/admin/student/student/up') {
                                return array (  '_controller' => 'StudentBundle\\Controller\\StudentController::upAction',  '_route' => 'student_up_position',);
                            }

                            // student_down_position
                            if ($pathinfo === '/admin/student/student/down') {
                                return array (  '_controller' => 'StudentBundle\\Controller\\StudentController::downAction',  '_route' => 'student_down_position',);
                            }

                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/school')) {
                        // school
                        if ($pathinfo === '/admin/school') {
                            return array (  '_controller' => 'StudentBundle\\Controller\\SchoolController::indexAction',  '_route' => 'school',);
                        }

                        // school_slash
                        if (rtrim($pathinfo, '/') === '/admin/school') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'school_slash');
                            }

                            return array (  '_controller' => 'StudentBundle\\Controller\\SchoolController::indexAction',  '_route' => 'school_slash',);
                        }

                        // school_test
                        if ($pathinfo === '/admin/school/test') {
                            return array (  '_controller' => 'StudentBundle\\Controller\\SchoolController::testAction',  '_route' => 'school_test',);
                        }

                        // school_add
                        if ($pathinfo === '/admin/school/add') {
                            return array (  '_controller' => 'StudentBundle\\Controller\\SchoolController::addAction',  '_route' => 'school_add',);
                        }

                        // school_update
                        if (0 === strpos($pathinfo, '/admin/school/update') && preg_match('#^/admin/school/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'school_update')), array (  '_controller' => 'StudentBundle\\Controller\\SchoolController::updateAction',));
                        }

                        // school_remove
                        if (0 === strpos($pathinfo, '/admin/school/remove') && preg_match('#^/admin/school/remove/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'school_remove')), array (  '_controller' => 'StudentBundle\\Controller\\SchoolController::removeAction',));
                        }

                        // school_get
                        if (0 === strpos($pathinfo, '/admin/school/school') && preg_match('#^/admin/school/school/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'school_get')), array (  '_controller' => 'StudentBundle\\Controller\\SchoolController::schoolAction',));
                        }

                        // school_up_position
                        if ($pathinfo === '/admin/school/up') {
                            return array (  '_controller' => 'StudentBundle\\Controller\\SchoolController::upAction',  '_route' => 'school_up_position',);
                        }

                        // school_down_position
                        if ($pathinfo === '/admin/school/down') {
                            return array (  '_controller' => 'StudentBundle\\Controller\\SchoolController::downAction',  '_route' => 'school_down_position',);
                        }

                        // student_by_school
                        if (preg_match('#^/admin/school/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'student_by_school')), array (  '_controller' => 'StudentBundle\\Controller\\SchoolController::listStudentAction',));
                        }

                    }

                    // student
                    if ($pathinfo === '/admin/student') {
                        return array (  '_controller' => 'StudentBundle\\Controller\\StudentController::indexAction',  '_route' => 'student',);
                    }

                }

                // admin
                if (rtrim($pathinfo, '/') === '/admin') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin');
                    }

                    return array (  '_controller' => 'StudentBundle\\Controller\\UserController::indexAction',  '_route' => 'admin',);
                }

                if (0 === strpos($pathinfo, '/admin/log')) {
                    if (0 === strpos($pathinfo, '/admin/login')) {
                        // admin_login
                        if ($pathinfo === '/admin/login') {
                            return array (  '_controller' => 'StudentBundle\\Controller\\SecuredController::loginAction',  '_route' => 'admin_login',);
                        }

                        // admin_security_check
                        if ($pathinfo === '/admin/login_check') {
                            return array (  '_controller' => 'StudentBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => 'admin_security_check',);
                        }

                    }

                    // admin_logout
                    if ($pathinfo === '/admin/logout') {
                        return array (  '_controller' => 'StudentBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => 'admin_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/user')) {
                    // admin_user
                    if (rtrim($pathinfo, '/') === '/admin/user') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'admin_user');
                        }

                        return array (  '_controller' => 'StudentBundle\\Controller\\UserController::indexAction',  '_route' => 'admin_user',);
                    }

                    // admin_user_show
                    if (preg_match('#^/admin/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_show')), array (  '_controller' => 'StudentBundle\\Controller\\UserController::showAction',));
                    }

                    // admin_user_new
                    if ($pathinfo === '/admin/user/new') {
                        return array (  '_controller' => 'StudentBundle\\Controller\\UserController::newAction',  '_route' => 'admin_user_new',);
                    }

                    // admin_user_create
                    if ($pathinfo === '/admin/user/create') {
                        return array (  '_controller' => 'StudentBundle\\Controller\\UserController::createAction',  '_route' => 'admin_user_create',);
                    }

                    // admin_user_edit
                    if (preg_match('#^/admin/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_edit')), array (  '_controller' => 'StudentBundle\\Controller\\UserController::editAction',));
                    }

                    // admin_user_update
                    if (preg_match('#^/admin/user/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_admin_user_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_update')), array (  '_controller' => 'StudentBundle\\Controller\\UserController::updateAction',));
                    }
                    not_admin_user_update:

                    // admin_user_delete
                    if (preg_match('#^/admin/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_admin_user_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_delete')), array (  '_controller' => 'StudentBundle\\Controller\\UserController::deleteAction',));
                    }
                    not_admin_user_delete:

                }

                if (0 === strpos($pathinfo, '/admin/subject')) {
                    // subject
                    if (rtrim($pathinfo, '/') === '/admin/subject') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'subject');
                        }

                        return array (  '_controller' => 'StudentBundle\\Controller\\SubjectController::indexAction',  '_route' => 'subject',);
                    }

                    // subject_show
                    if (preg_match('#^/admin/subject/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'subject_show')), array (  '_controller' => 'StudentBundle\\Controller\\SubjectController::showAction',));
                    }

                    // subject_new
                    if ($pathinfo === '/admin/subject/new') {
                        return array (  '_controller' => 'StudentBundle\\Controller\\SubjectController::newAction',  '_route' => 'subject_new',);
                    }

                    // subject_create
                    if ($pathinfo === '/admin/subject/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_subject_create;
                        }

                        return array (  '_controller' => 'StudentBundle\\Controller\\SubjectController::createAction',  '_route' => 'subject_create',);
                    }
                    not_subject_create:

                    // subject_edit
                    if (preg_match('#^/admin/subject/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'subject_edit')), array (  '_controller' => 'StudentBundle\\Controller\\SubjectController::editAction',));
                    }

                    // subject_update
                    if (preg_match('#^/admin/subject/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_subject_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'subject_update')), array (  '_controller' => 'StudentBundle\\Controller\\SubjectController::updateAction',));
                    }
                    not_subject_update:

                    // subject_delete
                    if (preg_match('#^/admin/subject/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_subject_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'subject_delete')), array (  '_controller' => 'StudentBundle\\Controller\\SubjectController::deleteAction',));
                    }
                    not_subject_delete:

                }

            }

            // nelmio_api_doc_index
            if (0 === strpos($pathinfo, '/api/doc') && preg_match('#^/api/doc(?:/(?P<view>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_nelmio_api_doc_index;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nelmio_api_doc_index')), array (  '_controller' => 'Nelmio\\ApiDocBundle\\Controller\\ApiDocController::indexAction',  'view' => 'default',));
            }
            not_nelmio_api_doc_index:

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
