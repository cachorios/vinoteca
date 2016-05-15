<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
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

        if (0 === strpos($pathinfo, '/assetic')) {
            // _assetic_stylesheets
            if ($pathinfo === '/assetic/stylesheets.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'stylesheets',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_stylesheets',);
            }

            if (0 === strpos($pathinfo, '/assetic/javascripts_')) {
                // _assetic_javascripts_header
                if ($pathinfo === '/assetic/javascripts_header.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'javascripts_header',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_javascripts_header',);
                }

                // _assetic_javascripts_footer
                if ($pathinfo === '/assetic/javascripts_footer.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'javascripts_footer',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_javascripts_footer',);
                }

            }

            // _assetic_stylesheets_frontend
            if ($pathinfo === '/assetic/stylesheets_frontend.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'stylesheets_frontend',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_stylesheets_frontend',);
            }

            // _assetic_javascripts_footer_frontend
            if ($pathinfo === '/assetic/javascripts_footer_frontend.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'javascripts_footer_frontend',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_javascripts_footer_frontend',);
            }

            // _assetic_lesses
            if ($pathinfo === '/assetic/lesses') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'lesses',  'pos' => NULL,  '_route' => '_assetic_lesses',);
            }

        }

        // _assetic_a30bb4e
        if ($pathinfo === '/css/a30bb4e.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'a30bb4e',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_a30bb4e',);
        }

        if (0 === strpos($pathinfo, '/js')) {
            // _assetic_1e643b1
            if ($pathinfo === '/js/1e643b1.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '1e643b1',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_1e643b1',);
            }

            // _assetic_f10a762
            if ($pathinfo === '/js/f10a762.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'f10a762',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_f10a762',);
            }

        }

        // _assetic_929f201
        if ($pathinfo === '/css/929f201.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '929f201',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_929f201',);
        }

        // _assetic_57ea7aa
        if ($pathinfo === '/js/57ea7aa.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '57ea7aa',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_57ea7aa',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\frontend\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // menu_frontend
        if ($pathinfo === '/getmenu') {
            return array (  '_controller' => 'AppBundle\\Controller\\frontend\\DefaultController::menufrontendAction',  '_route' => 'menu_frontend',);
        }

        // ultimosproductos
        if ($pathinfo === '/ultimosproductos') {
            return array (  '_controller' => 'AppBundle\\Controller\\frontend\\DefaultController::ultimosProductosAction',  '_route' => 'ultimosproductos',);
        }

        // slideproducto
        if (0 === strpos($pathinfo, '/slideproducto') && preg_match('#^/slideproducto/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'slideproducto')), array (  '_controller' => 'AppBundle\\Controller\\frontend\\DefaultController::filtroProducto',));
        }

        if (0 === strpos($pathinfo, '/producto')) {
            // productos
            if (0 === strpos($pathinfo, '/productos') && preg_match('#^/productos/(?P<id>\\d+)/vista/(?P<vista>[^/]++)/orden/(?P<orden>[^/]++)/ver(?:/(?P<ver>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'productos')), array (  'vista' => 'lista',  'orden' => '0',  'ver' => 3,  '_controller' => 'AppBundle\\Controller\\frontend\\ProductoController::getProductosAction',));
            }

            // productofull
            if (0 === strpos($pathinfo, '/productofull') && preg_match('#^/productofull/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'productofull')), array (  '_controller' => 'AppBundle\\Controller\\frontend\\ProductoController::productofullAction',));
            }

        }

        if (0 === strpos($pathinfo, '/ad')) {
            if (0 === strpos($pathinfo, '/admin')) {
                if (0 === strpos($pathinfo, '/admin/c')) {
                    if (0 === strpos($pathinfo, '/admin/categoria')) {
                        // categoria
                        if (rtrim($pathinfo, '/') === '/admin/categoria') {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_categoria;
                            }

                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'categoria');
                            }

                            return array (  '_controller' => 'AppBundle\\Controller\\admin\\CategoriaController::indexAction',  '_route' => 'categoria',);
                        }
                        not_categoria:

                        if (0 === strpos($pathinfo, '/admin/categoria/new')) {
                            // categoria_create
                            if ($pathinfo === '/admin/categoria/new') {
                                if ($this->context->getMethod() != 'POST') {
                                    $allow[] = 'POST';
                                    goto not_categoria_create;
                                }

                                return array (  '_controller' => 'AppBundle\\Controller\\admin\\CategoriaController::createAction',  '_route' => 'categoria_create',);
                            }
                            not_categoria_create:

                            // categoria_new
                            if ($pathinfo === '/admin/categoria/new') {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_categoria_new;
                                }

                                return array (  '_controller' => 'AppBundle\\Controller\\admin\\CategoriaController::newAction',  '_route' => 'categoria_new',);
                            }
                            not_categoria_new:

                        }

                        // categoria_show
                        if (preg_match('#^/admin/categoria/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_categoria_show;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'categoria_show')), array (  '_controller' => 'AppBundle\\Controller\\admin\\CategoriaController::showAction',));
                        }
                        not_categoria_show:

                        // categoria_edit
                        if (preg_match('#^/admin/categoria/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_categoria_edit;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'categoria_edit')), array (  '_controller' => 'AppBundle\\Controller\\admin\\CategoriaController::editAction',));
                        }
                        not_categoria_edit:

                        // categoria_update
                        if (preg_match('#^/admin/categoria/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                                $allow = array_merge($allow, array('POST', 'PUT'));
                                goto not_categoria_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'categoria_update')), array (  '_controller' => 'AppBundle\\Controller\\admin\\CategoriaController::updateAction',));
                        }
                        not_categoria_update:

                        // categoria_delete
                        if (preg_match('#^/admin/categoria/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'DELETE') {
                                $allow[] = 'DELETE';
                                goto not_categoria_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'categoria_delete')), array (  '_controller' => 'AppBundle\\Controller\\admin\\CategoriaController::deleteAction',));
                        }
                        not_categoria_delete:

                    }

                    if (0 === strpos($pathinfo, '/admin/contenido')) {
                        // contenido
                        if (rtrim($pathinfo, '/') === '/admin/contenido') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_contenido;
                            }

                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'contenido');
                            }

                            return array (  '_controller' => 'AppBundle\\Controller\\admin\\ContenidoController::indexAction',  '_route' => 'contenido',);
                        }
                        not_contenido:

                        if (0 === strpos($pathinfo, '/admin/contenido/new')) {
                            // contenido_create
                            if ($pathinfo === '/admin/contenido/new') {
                                if ($this->context->getMethod() != 'POST') {
                                    $allow[] = 'POST';
                                    goto not_contenido_create;
                                }

                                return array (  '_controller' => 'AppBundle\\Controller\\admin\\ContenidoController::createAction',  '_route' => 'contenido_create',);
                            }
                            not_contenido_create:

                            // contenido_new
                            if (preg_match('#^/admin/contenido/new(?:/(?P<tipo>[^/]++))?$#s', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_contenido_new;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'contenido_new')), array (  'tipo' => 'carrusel',  '_controller' => 'AppBundle\\Controller\\admin\\ContenidoController::newAction',));
                            }
                            not_contenido_new:

                        }

                        // contenido_show
                        if (preg_match('#^/admin/contenido/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_contenido_show;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'contenido_show')), array (  '_controller' => 'AppBundle\\Controller\\admin\\ContenidoController::showAction',));
                        }
                        not_contenido_show:

                        // contenido_edit
                        if (preg_match('#^/admin/contenido/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_contenido_edit;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'contenido_edit')), array (  '_controller' => 'AppBundle\\Controller\\admin\\ContenidoController::editAction',));
                        }
                        not_contenido_edit:

                        // contenido_update
                        if (preg_match('#^/admin/contenido/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('PUT', 'POST'))) {
                                $allow = array_merge($allow, array('PUT', 'POST'));
                                goto not_contenido_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'contenido_update')), array (  '_controller' => 'AppBundle\\Controller\\admin\\ContenidoController::updateAction',));
                        }
                        not_contenido_update:

                        // contenido_delete
                        if (preg_match('#^/admin/contenido/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'DELETE') {
                                $allow[] = 'DELETE';
                                goto not_contenido_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'contenido_delete')), array (  '_controller' => 'AppBundle\\Controller\\admin\\ContenidoController::deleteAction',));
                        }
                        not_contenido_delete:

                    }

                }

                // homepage_admin
                if (rtrim($pathinfo, '/') === '/admin') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_homepage_admin;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'homepage_admin');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\admin\\InicioController::indexAction',  '_route' => 'homepage_admin',);
                }
                not_homepage_admin:

                if (0 === strpos($pathinfo, '/admin/pro')) {
                    if (0 === strpos($pathinfo, '/admin/producto')) {
                        // producto
                        if (rtrim($pathinfo, '/') === '/admin/producto') {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_producto;
                            }

                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'producto');
                            }

                            return array (  '_controller' => 'AppBundle\\Controller\\admin\\ProductoController::indexAction',  '_route' => 'producto',);
                        }
                        not_producto:

                        if (0 === strpos($pathinfo, '/admin/producto/new')) {
                            // producto_create
                            if ($pathinfo === '/admin/producto/new') {
                                if ($this->context->getMethod() != 'POST') {
                                    $allow[] = 'POST';
                                    goto not_producto_create;
                                }

                                return array (  '_controller' => 'AppBundle\\Controller\\admin\\ProductoController::createAction',  '_route' => 'producto_create',);
                            }
                            not_producto_create:

                            // producto_new
                            if ($pathinfo === '/admin/producto/new') {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_producto_new;
                                }

                                return array (  '_controller' => 'AppBundle\\Controller\\admin\\ProductoController::newAction',  '_route' => 'producto_new',);
                            }
                            not_producto_new:

                        }

                        // producto_show
                        if (preg_match('#^/admin/producto/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_producto_show;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'producto_show')), array (  '_controller' => 'AppBundle\\Controller\\admin\\ProductoController::showAction',));
                        }
                        not_producto_show:

                        // producto_edit
                        if (preg_match('#^/admin/producto/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_producto_edit;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'producto_edit')), array (  '_controller' => 'AppBundle\\Controller\\admin\\ProductoController::editAction',));
                        }
                        not_producto_edit:

                        // producto_update
                        if (preg_match('#^/admin/producto/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                                $allow = array_merge($allow, array('POST', 'PUT'));
                                goto not_producto_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'producto_update')), array (  '_controller' => 'AppBundle\\Controller\\admin\\ProductoController::updateAction',));
                        }
                        not_producto_update:

                        // producto_delete
                        if (preg_match('#^/admin/producto/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'DELETE') {
                                $allow[] = 'DELETE';
                                goto not_producto_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'producto_delete')), array (  '_controller' => 'AppBundle\\Controller\\admin\\ProductoController::deleteAction',));
                        }
                        not_producto_delete:

                        if (0 === strpos($pathinfo, '/admin/producto/api')) {
                            // producto_extencion
                            if ($pathinfo === '/admin/producto/api/form') {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_producto_extencion;
                                }

                                return array (  '_controller' => 'AppBundle\\Controller\\admin\\ProductoController::formExtencionAction',  '_route' => 'producto_extencion',);
                            }
                            not_producto_extencion:

                            // producto_ajax_list
                            if ($pathinfo === '/admin/producto/api/list') {
                                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                    goto not_producto_ajax_list;
                                }

                                return array (  '_controller' => 'AppBundle\\Controller\\admin\\ProductoController::listAjaxAction',  '_route' => 'producto_ajax_list',);
                            }
                            not_producto_ajax_list:

                            // producto_imagen_ajax
                            if ($pathinfo === '/admin/producto/api/imagen/upload') {
                                return array (  '_controller' => 'AppBundle\\Controller\\admin\\ProductoController::apiImagenUpdateAction',  '_route' => 'producto_imagen_ajax',);
                            }

                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/proveedor')) {
                        // proveedor
                        if (rtrim($pathinfo, '/') === '/admin/proveedor') {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_proveedor;
                            }

                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'proveedor');
                            }

                            return array (  '_controller' => 'AppBundle\\Controller\\admin\\ProveedorController::indexAction',  '_route' => 'proveedor',);
                        }
                        not_proveedor:

                        if (0 === strpos($pathinfo, '/admin/proveedor/new')) {
                            // proveedor_create
                            if ($pathinfo === '/admin/proveedor/new') {
                                if ($this->context->getMethod() != 'POST') {
                                    $allow[] = 'POST';
                                    goto not_proveedor_create;
                                }

                                return array (  '_controller' => 'AppBundle\\Controller\\admin\\ProveedorController::createAction',  '_route' => 'proveedor_create',);
                            }
                            not_proveedor_create:

                            // proveedor_new
                            if ($pathinfo === '/admin/proveedor/new') {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_proveedor_new;
                                }

                                return array (  '_controller' => 'AppBundle\\Controller\\admin\\ProveedorController::newAction',  '_route' => 'proveedor_new',);
                            }
                            not_proveedor_new:

                        }

                        // proveedor_show
                        if (preg_match('#^/admin/proveedor/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_proveedor_show;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'proveedor_show')), array (  '_controller' => 'AppBundle\\Controller\\admin\\ProveedorController::showAction',));
                        }
                        not_proveedor_show:

                        // proveedor_edit
                        if (preg_match('#^/admin/proveedor/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_proveedor_edit;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'proveedor_edit')), array (  '_controller' => 'AppBundle\\Controller\\admin\\ProveedorController::editAction',));
                        }
                        not_proveedor_edit:

                        // proveedor_update
                        if (preg_match('#^/admin/proveedor/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('PUT', 'POST'))) {
                                $allow = array_merge($allow, array('PUT', 'POST'));
                                goto not_proveedor_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'proveedor_update')), array (  '_controller' => 'AppBundle\\Controller\\admin\\ProveedorController::updateAction',));
                        }
                        not_proveedor_update:

                        // proveedor_delete
                        if (preg_match('#^/admin/proveedor/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'DELETE') {
                                $allow[] = 'DELETE';
                                goto not_proveedor_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'proveedor_delete')), array (  '_controller' => 'AppBundle\\Controller\\admin\\ProveedorController::deleteAction',));
                        }
                        not_proveedor_delete:

                        if (0 === strpos($pathinfo, '/admin/proveedor/api/p')) {
                            // select_provincias
                            if ($pathinfo === '/admin/proveedor/api/provincia') {
                                return array (  '_controller' => 'AppBundle\\Controller\\admin\\ProveedorController::provinciasAction',  '_route' => 'select_provincias',);
                            }

                            // select_pais
                            if ($pathinfo === '/admin/proveedor/api/pais') {
                                return array (  '_controller' => 'AppBundle\\Controller\\admin\\ProveedorController::paisAction',  '_route' => 'select_pais',);
                            }

                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/reposicion')) {
                    // reposicion
                    if (rtrim($pathinfo, '/') === '/admin/reposicion') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_reposicion;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'reposicion');
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\admin\\ReposicionController::indexAction',  '_route' => 'reposicion',);
                    }
                    not_reposicion:

                    if (0 === strpos($pathinfo, '/admin/reposicion/new')) {
                        // reposicion_create
                        if ($pathinfo === '/admin/reposicion/new') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_reposicion_create;
                            }

                            return array (  '_controller' => 'AppBundle\\Controller\\admin\\ReposicionController::createAction',  '_route' => 'reposicion_create',);
                        }
                        not_reposicion_create:

                        // reposicion_new
                        if ($pathinfo === '/admin/reposicion/new') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_reposicion_new;
                            }

                            return array (  '_controller' => 'AppBundle\\Controller\\admin\\ReposicionController::newAction',  '_route' => 'reposicion_new',);
                        }
                        not_reposicion_new:

                    }

                    // reposicion_show
                    if (preg_match('#^/admin/reposicion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_reposicion_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'reposicion_show')), array (  '_controller' => 'AppBundle\\Controller\\admin\\ReposicionController::showAction',));
                    }
                    not_reposicion_show:

                }

            }

            // addtocart
            if (0 === strpos($pathinfo, '/addcart') && preg_match('#^/addcart/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'addtocart')), array (  '_controller' => 'RBSoft\\CartBundle\\Controller\\CartController::addToCartAction',));
            }

        }

        if (0 === strpos($pathinfo, '/cart')) {
            // cartdisplay
            if (0 === strpos($pathinfo, '/cartdisplay') && preg_match('#^/cartdisplay(?:/(?P<size>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cartdisplay')), array (  'size' => 'big',  'toHtml' => false,  '_controller' => 'RBSoft\\CartBundle\\Controller\\CartController::displayCartAction',));
            }

            // cartremoveitem
            if (0 === strpos($pathinfo, '/cartremoveitem') && preg_match('#^/cartremoveitem/(?P<lineId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cartremoveitem')), array (  '_controller' => 'RBSoft\\CartBundle\\Controller\\CartController::deleteLineAction',));
            }

            // cartupdateitem
            if (0 === strpos($pathinfo, '/cartupdateitem') && preg_match('#^/cartupdateitem/(?P<lineId>[^/]++)(?:/(?P<cantidad>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cartupdateitem')), array (  'cantidad' => 0,  '_controller' => 'RBSoft\\CartBundle\\Controller\\CartController::UpdateLineAction',));
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // usuario_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'RBSoft\\UsuarioBundle\\Controller\\SecurityController::loginAction',  '_route' => 'usuario_login',);
                }

                // usuario_login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'usuario_login_check');
                }

            }

            // usuario_logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'usuario_logout');
            }

            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'RBSoft\\UsuarioBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'RBSoft\\UsuarioBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'RBSoft\\UsuarioBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'RBSoft\\UsuarioBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'RBSoft\\UsuarioBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'RBSoft\\UsuarioBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
