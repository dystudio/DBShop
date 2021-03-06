<?php
/**
 * DBShop 电子商务系统
 *
 * ==========================================================================
 * @link      http://www.dbshop.net/
 * @copyright Copyright (c) 2012-2015 DBShop.net Inc. (http://www.dbshop.net)
 * @license   http://www.dbshop.net/license.html License
 * ==========================================================================
 *
 * @author    静静的风
 *
 */

return array(
        'type'    => 'Literal',
        'options' => array(
                // Change this to something specific to your module
                'route'    => '/mobile/home/favorites',
                'defaults' => array(
                        // Change this value to reflect the namespace in which
                        // the controllers for your module are found
                        '__NAMESPACE__' => 'Mobile\Controller',
                        'controller'    => 'Favorites',
                        'action'        => 'index',
                ),
        ),
        'may_terminate' => true,
        'child_routes' => array(
                // This route is a sane default when developing a module;
                // as you solidify the routes for your module, however,
                // you may want to remove it and replace it with more
                // specific routes.
                'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                                'route'    => '[/:action]',
                                'constraints' => array(
                                        'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                                ),
                                'defaults' => array(
                                ),
                        ),
                    'may_terminate' => true,
                    'child_routes' => array(
                            'favorites_page' => array(
                                    'type' => 'Segment',
                                    'options' => array(
                                            'route' => '[/:page]',
                                            'constraints' => array(
                                            ),
                                            'defaults' => array(
                                                    'page' => 1
                                            )
                                    )
                            ),
                        'favorites_id' => array(
                                'type' => 'Segment',
                                'options' => array(
                                        'route' => '/favorites_id[/:favorites_id]',
                                        'constraints' => array(
                                        )
                                )
                        )
                    )
                ),
        ),
);