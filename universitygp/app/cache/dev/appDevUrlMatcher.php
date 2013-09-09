<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
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

        if (0 === strpos($pathinfo, '/assetic')) {
            if (0 === strpos($pathinfo, '/assetic/css/compiled/fmelfinder/main')) {
                // _assetic_2efd68d
                if ($pathinfo === '/assetic/css/compiled/fmelfinder/main.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '2efd68d',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_2efd68d',);
                }

                if (0 === strpos($pathinfo, '/assetic/css/compiled/fmelfinder/main_part_1_')) {
                    // _assetic_2efd68d_0
                    if ($pathinfo === '/assetic/css/compiled/fmelfinder/main_part_1_elfinder.min_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '2efd68d',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_2efd68d_0',);
                    }

                    // _assetic_2efd68d_1
                    if ($pathinfo === '/assetic/css/compiled/fmelfinder/main_part_1_jquery-ui-1.8.21.custom_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '2efd68d',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_2efd68d_1',);
                    }

                    // _assetic_2efd68d_2
                    if ($pathinfo === '/assetic/css/compiled/fmelfinder/main_part_1_theme_3.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '2efd68d',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_2efd68d_2',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/assetic/js/compiled/fmelfinder/main')) {
                // _assetic_a40686d
                if ($pathinfo === '/assetic/js/compiled/fmelfinder/main.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a40686d',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_a40686d',);
                }

                if (0 === strpos($pathinfo, '/assetic/js/compiled/fmelfinder/main_')) {
                    if (0 === strpos($pathinfo, '/assetic/js/compiled/fmelfinder/main_jquery-')) {
                        // _assetic_a40686d_0
                        if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_jquery-1.8.0.min_1.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'a40686d',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_a40686d_0',);
                        }

                        // _assetic_a40686d_1
                        if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_jquery-ui-1.8.23.custom.min_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'a40686d',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_a40686d_1',);
                        }

                    }

                    // _assetic_a40686d_2
                    if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_elfinder.min_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'a40686d',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_a40686d_2',);
                    }

                    if (0 === strpos($pathinfo, '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.')) {
                        // _assetic_a40686d_3
                        if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.LANG_1.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'a40686d',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_a40686d_3',);
                        }

                        // _assetic_a40686d_4
                        if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.ar_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'a40686d',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_a40686d_4',);
                        }

                        // _assetic_a40686d_5
                        if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.bg_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'a40686d',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_a40686d_5',);
                        }

                        if (0 === strpos($pathinfo, '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.c')) {
                            // _assetic_a40686d_6
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.ca_4.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'a40686d',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_a40686d_6',);
                            }

                            // _assetic_a40686d_7
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.cs_5.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'a40686d',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_a40686d_7',);
                            }

                        }

                        // _assetic_a40686d_8
                        if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.de_6.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'a40686d',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_a40686d_8',);
                        }

                        if (0 === strpos($pathinfo, '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.e')) {
                            // _assetic_a40686d_9
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.el_7.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'a40686d',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_a40686d_9',);
                            }

                            // _assetic_a40686d_10
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.es_8.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'a40686d',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_a40686d_10',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.f')) {
                            // _assetic_a40686d_11
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.fa_9.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'a40686d',  'pos' => 11,  '_format' => 'js',  '_route' => '_assetic_a40686d_11',);
                            }

                            // _assetic_a40686d_12
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.fr_10.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'a40686d',  'pos' => 12,  '_format' => 'js',  '_route' => '_assetic_a40686d_12',);
                            }

                        }

                        // _assetic_a40686d_13
                        if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.hu_11.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'a40686d',  'pos' => 13,  '_format' => 'js',  '_route' => '_assetic_a40686d_13',);
                        }

                        // _assetic_a40686d_14
                        if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.it_12.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'a40686d',  'pos' => 14,  '_format' => 'js',  '_route' => '_assetic_a40686d_14',);
                        }

                        // _assetic_a40686d_15
                        if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.jp_13.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'a40686d',  'pos' => 15,  '_format' => 'js',  '_route' => '_assetic_a40686d_15',);
                        }

                        // _assetic_a40686d_16
                        if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.ko_14.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'a40686d',  'pos' => 16,  '_format' => 'js',  '_route' => '_assetic_a40686d_16',);
                        }

                        if (0 === strpos($pathinfo, '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.n')) {
                            // _assetic_a40686d_17
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.nl_15.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'a40686d',  'pos' => 17,  '_format' => 'js',  '_route' => '_assetic_a40686d_17',);
                            }

                            // _assetic_a40686d_18
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.no_16.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'a40686d',  'pos' => 18,  '_format' => 'js',  '_route' => '_assetic_a40686d_18',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.p')) {
                            // _assetic_a40686d_19
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.pl_17.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'a40686d',  'pos' => 19,  '_format' => 'js',  '_route' => '_assetic_a40686d_19',);
                            }

                            // _assetic_a40686d_20
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.pt_BR_18.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'a40686d',  'pos' => 20,  '_format' => 'js',  '_route' => '_assetic_a40686d_20',);
                            }

                        }

                        // _assetic_a40686d_21
                        if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.ru_19.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'a40686d',  'pos' => 21,  '_format' => 'js',  '_route' => '_assetic_a40686d_21',);
                        }

                        // _assetic_a40686d_22
                        if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.tr_20.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'a40686d',  'pos' => 22,  '_format' => 'js',  '_route' => '_assetic_a40686d_22',);
                        }

                        // _assetic_a40686d_23
                        if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.vi_21.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'a40686d',  'pos' => 23,  '_format' => 'js',  '_route' => '_assetic_a40686d_23',);
                        }

                        // _assetic_a40686d_24
                        if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.zh_CN_22.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'a40686d',  'pos' => 24,  '_format' => 'js',  '_route' => '_assetic_a40686d_24',);
                        }

                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/bundles/fmelfinder/js/main')) {
            // _assetic_e8dfe19
            if ($pathinfo === '/bundles/fmelfinder/js/main.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'e8dfe19',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_e8dfe19',);
            }

            if (0 === strpos($pathinfo, '/bundles/fmelfinder/js/main_')) {
                if (0 === strpos($pathinfo, '/bundles/fmelfinder/js/main_jquery-')) {
                    // _assetic_e8dfe19_0
                    if ($pathinfo === '/bundles/fmelfinder/js/main_jquery-1.8.0.min_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'e8dfe19',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_e8dfe19_0',);
                    }

                    // _assetic_e8dfe19_1
                    if ($pathinfo === '/bundles/fmelfinder/js/main_jquery-ui-1.8.23.custom.min_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'e8dfe19',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_e8dfe19_1',);
                    }

                }

                // _assetic_e8dfe19_2
                if ($pathinfo === '/bundles/fmelfinder/js/main_elfinder.min_3.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'e8dfe19',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_e8dfe19_2',);
                }

                if (0 === strpos($pathinfo, '/bundles/fmelfinder/js/main_part_4_elfinder.')) {
                    // _assetic_e8dfe19_3
                    if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.LANG_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'e8dfe19',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_e8dfe19_3',);
                    }

                    // _assetic_e8dfe19_4
                    if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.ar_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'e8dfe19',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_e8dfe19_4',);
                    }

                    // _assetic_e8dfe19_5
                    if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.bg_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'e8dfe19',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_e8dfe19_5',);
                    }

                    if (0 === strpos($pathinfo, '/bundles/fmelfinder/js/main_part_4_elfinder.c')) {
                        // _assetic_e8dfe19_6
                        if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.ca_4.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'e8dfe19',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_e8dfe19_6',);
                        }

                        // _assetic_e8dfe19_7
                        if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.cs_5.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'e8dfe19',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_e8dfe19_7',);
                        }

                    }

                    // _assetic_e8dfe19_8
                    if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.de_6.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'e8dfe19',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_e8dfe19_8',);
                    }

                    if (0 === strpos($pathinfo, '/bundles/fmelfinder/js/main_part_4_elfinder.e')) {
                        // _assetic_e8dfe19_9
                        if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.el_7.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'e8dfe19',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_e8dfe19_9',);
                        }

                        // _assetic_e8dfe19_10
                        if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.es_8.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'e8dfe19',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_e8dfe19_10',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/bundles/fmelfinder/js/main_part_4_elfinder.f')) {
                        // _assetic_e8dfe19_11
                        if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.fa_9.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'e8dfe19',  'pos' => 11,  '_format' => 'js',  '_route' => '_assetic_e8dfe19_11',);
                        }

                        // _assetic_e8dfe19_12
                        if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.fr_10.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'e8dfe19',  'pos' => 12,  '_format' => 'js',  '_route' => '_assetic_e8dfe19_12',);
                        }

                    }

                    // _assetic_e8dfe19_13
                    if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.hu_11.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'e8dfe19',  'pos' => 13,  '_format' => 'js',  '_route' => '_assetic_e8dfe19_13',);
                    }

                    // _assetic_e8dfe19_14
                    if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.it_12.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'e8dfe19',  'pos' => 14,  '_format' => 'js',  '_route' => '_assetic_e8dfe19_14',);
                    }

                    // _assetic_e8dfe19_15
                    if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.jp_13.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'e8dfe19',  'pos' => 15,  '_format' => 'js',  '_route' => '_assetic_e8dfe19_15',);
                    }

                    // _assetic_e8dfe19_16
                    if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.ko_14.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'e8dfe19',  'pos' => 16,  '_format' => 'js',  '_route' => '_assetic_e8dfe19_16',);
                    }

                    if (0 === strpos($pathinfo, '/bundles/fmelfinder/js/main_part_4_elfinder.n')) {
                        // _assetic_e8dfe19_17
                        if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.nl_15.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'e8dfe19',  'pos' => 17,  '_format' => 'js',  '_route' => '_assetic_e8dfe19_17',);
                        }

                        // _assetic_e8dfe19_18
                        if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.no_16.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'e8dfe19',  'pos' => 18,  '_format' => 'js',  '_route' => '_assetic_e8dfe19_18',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/bundles/fmelfinder/js/main_part_4_elfinder.p')) {
                        // _assetic_e8dfe19_19
                        if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.pl_17.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'e8dfe19',  'pos' => 19,  '_format' => 'js',  '_route' => '_assetic_e8dfe19_19',);
                        }

                        // _assetic_e8dfe19_20
                        if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.pt_BR_18.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'e8dfe19',  'pos' => 20,  '_format' => 'js',  '_route' => '_assetic_e8dfe19_20',);
                        }

                    }

                    // _assetic_e8dfe19_21
                    if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.ru_19.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'e8dfe19',  'pos' => 21,  '_format' => 'js',  '_route' => '_assetic_e8dfe19_21',);
                    }

                    // _assetic_e8dfe19_22
                    if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.tr_20.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'e8dfe19',  'pos' => 22,  '_format' => 'js',  '_route' => '_assetic_e8dfe19_22',);
                    }

                    // _assetic_e8dfe19_23
                    if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.vi_21.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'e8dfe19',  'pos' => 23,  '_format' => 'js',  '_route' => '_assetic_e8dfe19_23',);
                    }

                    // _assetic_e8dfe19_24
                    if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.zh_CN_22.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'e8dfe19',  'pos' => 24,  '_format' => 'js',  '_route' => '_assetic_e8dfe19_24',);
                    }

                }

            }

        }

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

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
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

        // gestion_absence_note_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gestion_absence_note_homepage')), array (  '_controller' => 'Gestion\\AbsenceNoteBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/absence')) {
            // absence
            if (rtrim($pathinfo, '/') === '/absence') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'absence');
                }

                return array (  '_controller' => 'Gestion\\AbsenceNoteBundle\\Controller\\AbsenceController::accueilAction',  '_route' => 'absence',);
            }

            // absence_gestion
            if ($pathinfo === '/absence/gestionAbsence') {
                return array (  '_controller' => 'Gestion\\AbsenceNoteBundle\\Controller\\AbsenceController::indexAction',  '_route' => 'absence_gestion',);
            }

            // absence_show
            if (preg_match('#^/absence/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'absence_show')), array (  '_controller' => 'Gestion\\AbsenceNoteBundle\\Controller\\AbsenceController::showAction',));
            }

            // absence_new
            if ($pathinfo === '/absence/new') {
                return array (  '_controller' => 'Gestion\\AbsenceNoteBundle\\Controller\\AbsenceController::newAction',  '_route' => 'absence_new',);
            }

            // absence_create
            if ($pathinfo === '/absence/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_absence_create;
                }

                return array (  '_controller' => 'Gestion\\AbsenceNoteBundle\\Controller\\AbsenceController::createAction',  '_route' => 'absence_create',);
            }
            not_absence_create:

            // absence_edit
            if (preg_match('#^/absence/(?P<id>[^/]++)/(?P<dat>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'absence_edit')), array (  '_controller' => 'Gestion\\AbsenceNoteBundle\\Controller\\AbsenceController::modifierAction',));
            }

            // absence_update
            if (preg_match('#^/absence/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_absence_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'absence_update')), array (  '_controller' => 'Gestion\\AbsenceNoteBundle\\Controller\\AbsenceController::updateAction',));
            }
            not_absence_update:

            // absence_delete
            if (preg_match('#^/absence/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_absence_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'absence_delete')), array (  '_controller' => 'Gestion\\AbsenceNoteBundle\\Controller\\AbsenceController::deleteAction',));
            }
            not_absence_delete:

            // abcense_valider
            if ($pathinfo === '/absence/validerAbsence') {
                return array (  '_controller' => 'Gestion\\AbsenceNoteBundle\\Controller\\AbsenceController::validerAction',  '_route' => 'abcense_valider',);
            }

            // abcense_modifierAbsence
            if ($pathinfo === '/absence/modifierAbsence') {
                return array (  '_controller' => 'Gestion\\AbsenceNoteBundle\\Controller\\AbsenceController::modifierAbsenceAction',  '_route' => 'abcense_modifierAbsence',);
            }

        }

        // user_news_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_news_homepage')), array (  '_controller' => 'User\\NewsBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/nouvelle')) {
            // nouvelle
            if (rtrim($pathinfo, '/') === '/nouvelle') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'nouvelle');
                }

                return array (  '_controller' => 'User\\NewsBundle\\Controller\\NouvelleController::affichListeNouvelleAction',  '_route' => 'nouvelle',);
            }

            // nouvelle_add
            if ($pathinfo === '/nouvelle/add') {
                return array (  '_controller' => 'User\\NewsBundle\\Controller\\NouvelleController::addAction',  '_route' => 'nouvelle_add',);
            }

            // nouvelle_delete
            if (0 === strpos($pathinfo, '/nouvelle/delete') && preg_match('#^/nouvelle/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nouvelle_delete')), array (  '_controller' => 'User\\NewsBundle\\Controller\\NouvelleController::deleteAction',));
            }

            // nouvelle_show
            if (0 === strpos($pathinfo, '/nouvelle/show') && preg_match('#^/nouvelle/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nouvelle_show')), array (  '_controller' => 'User\\NewsBundle\\Controller\\NouvelleController::showAction',));
            }

            // nouvelle_edit
            if (0 === strpos($pathinfo, '/nouvelle/edit') && preg_match('#^/nouvelle/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nouvelle_edit')), array (  '_controller' => 'User\\NewsBundle\\Controller\\NouvelleController::editAction',));
            }

            // nouvelle_valider
            if (0 === strpos($pathinfo, '/nouvelle/valider') && preg_match('#^/nouvelle/valider/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nouvelle_valider')), array (  '_controller' => 'User\\NewsBundle\\Controller\\NouvelleController::validerAction',));
            }

        }

        if (0 === strpos($pathinfo, '/infoNouvelle')) {
            // infoNouvelle
            if (rtrim($pathinfo, '/') === '/infoNouvelle') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'infoNouvelle');
                }

                return array (  '_controller' => 'User\\NewsBundle\\Controller\\InfoNouvelleController::affichListeNouvelleAction',  '_route' => 'infoNouvelle',);
            }

            // infoNouvelle_show
            if (0 === strpos($pathinfo, '/infoNouvelle/show') && preg_match('#^/infoNouvelle/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'infoNouvelle_show')), array (  '_controller' => 'User\\NewsBundle\\Controller\\InfoNouvelleController::showAction',));
            }

        }

        // Partage_document_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'Partage_document_homepage')), array (  '_controller' => 'User\\PartageBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/document')) {
            // document
            if (rtrim($pathinfo, '/') === '/document') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'document');
                }

                return array (  '_controller' => 'User\\PartageBundle\\Controller\\RecuperationDocumentController::indexAction',  '_route' => 'document',);
            }

            // document_recherche
            if ($pathinfo === '/document/recherche') {
                return array (  '_controller' => 'User\\PartageBundle\\Controller\\RecuperationDocumentController::rechercheAction',  '_route' => 'document_recherche',);
            }

            // document_show
            if (0 === strpos($pathinfo, '/document/show') && preg_match('#^/document/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'document_show')), array (  '_controller' => 'User\\PartageBundle\\Controller\\RecuperationDocumentController::showAction',));
            }

            // document_download
            if (0 === strpos($pathinfo, '/document/download') && preg_match('#^/document/download/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'document_download')), array (  '_controller' => 'User\\PartageBundle\\Controller\\RecuperationDocumentController::downloadAction',));
            }

            if (0 === strpos($pathinfo, '/documentPersonnel')) {
                // document_personnel
                if (rtrim($pathinfo, '/') === '/documentPersonnel') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'document_personnel');
                    }

                    return array (  '_controller' => 'User\\PartageBundle\\Controller\\PartageDocumentController::affichListeDocAction',  '_route' => 'document_personnel',);
                }

                // document_personnel_homepage
                if (0 === strpos($pathinfo, '/documentPersonnel/hello') && preg_match('#^/documentPersonnel/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'document_personnel_homepage')), array (  '_controller' => 'User\\PartageBundle\\Controller\\DefaultController::indexAction',));
                }

                // document_personnel_add
                if ($pathinfo === '/documentPersonnel/add') {
                    return array (  '_controller' => 'User\\PartageBundle\\Controller\\PartageDocumentController::addAction',  '_route' => 'document_personnel_add',);
                }

                // voir_doc
                if ($pathinfo === '/documentPersonnel/voir') {
                    return array (  '_controller' => 'User\\PartageBundle\\Controller\\PartageDocumentController::voirAction',  '_route' => 'voir_doc',);
                }

                // document_personnel_delete
                if (0 === strpos($pathinfo, '/documentPersonnel/delete') && preg_match('#^/documentPersonnel/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'document_personnel_delete')), array (  '_controller' => 'User\\PartageBundle\\Controller\\PartageDocumentController::deleteAction',));
                }

                // document_personnel_show
                if (0 === strpos($pathinfo, '/documentPersonnel/show') && preg_match('#^/documentPersonnel/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'document_personnel_show')), array (  '_controller' => 'User\\PartageBundle\\Controller\\PartageDocumentController::showAction',));
                }

                // document_personnel_edit
                if (0 === strpos($pathinfo, '/documentPersonnel/edit') && preg_match('#^/documentPersonnel/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'document_personnel_edit')), array (  '_controller' => 'User\\PartageBundle\\Controller\\PartageDocumentController::editAction',));
                }

                // document_personnel_moteurDeRecherche
                if ($pathinfo === '/documentPersonnel/recherche') {
                    return array (  '_controller' => 'User\\PartageBundle\\Controller\\PartageDocumentController::rechercheAction',  '_route' => 'document_personnel_moteurDeRecherche',);
                }

            }

        }

        // gestion_offre_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gestion_offre_homepage')), array (  '_controller' => 'Gestion\\OffreBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/emploie')) {
            // emploie
            if (rtrim($pathinfo, '/') === '/emploie') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'emploie');
                }

                return array (  '_controller' => 'Gestion\\OffreBundle\\Controller\\EmploieController::indexAction',  '_route' => 'emploie',);
            }

            // emploie_show
            if (preg_match('#^/emploie/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'emploie_show')), array (  '_controller' => 'Gestion\\OffreBundle\\Controller\\EmploieController::showAction',));
            }

            // emploie_new
            if ($pathinfo === '/emploie/new') {
                return array (  '_controller' => 'Gestion\\OffreBundle\\Controller\\EmploieController::newAction',  '_route' => 'emploie_new',);
            }

            // emploie_create
            if ($pathinfo === '/emploie/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_emploie_create;
                }

                return array (  '_controller' => 'Gestion\\OffreBundle\\Controller\\EmploieController::createAction',  '_route' => 'emploie_create',);
            }
            not_emploie_create:

            // emploie_edit
            if (preg_match('#^/emploie/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'emploie_edit')), array (  '_controller' => 'Gestion\\OffreBundle\\Controller\\EmploieController::editAction',));
            }

            // emploie_update
            if (preg_match('#^/emploie/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_emploie_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'emploie_update')), array (  '_controller' => 'Gestion\\OffreBundle\\Controller\\EmploieController::updateAction',));
            }
            not_emploie_update:

            // emploie_delete
            if (preg_match('#^/emploie/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_emploie_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'emploie_delete')), array (  '_controller' => 'Gestion\\OffreBundle\\Controller\\EmploieController::deleteAction',));
            }
            not_emploie_delete:

        }

        if (0 === strpos($pathinfo, '/stage')) {
            // stage
            if (rtrim($pathinfo, '/') === '/stage') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'stage');
                }

                return array (  '_controller' => 'Gestion\\OffreBundle\\Controller\\StageController::indexAction',  '_route' => 'stage',);
            }

            // stage_show
            if (preg_match('#^/stage/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'stage_show')), array (  '_controller' => 'Gestion\\OffreBundle\\Controller\\StageController::showAction',));
            }

            // stage_new
            if ($pathinfo === '/stage/new') {
                return array (  '_controller' => 'Gestion\\OffreBundle\\Controller\\StageController::newAction',  '_route' => 'stage_new',);
            }

            // stage_create
            if ($pathinfo === '/stage/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_stage_create;
                }

                return array (  '_controller' => 'Gestion\\OffreBundle\\Controller\\StageController::createAction',  '_route' => 'stage_create',);
            }
            not_stage_create:

            // stage_edit
            if (preg_match('#^/stage/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'stage_edit')), array (  '_controller' => 'Gestion\\OffreBundle\\Controller\\StageController::editAction',));
            }

            // stage_update
            if (preg_match('#^/stage/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_stage_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'stage_update')), array (  '_controller' => 'Gestion\\OffreBundle\\Controller\\StageController::updateAction',));
            }
            not_stage_update:

            // stage_delete
            if (preg_match('#^/stage/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_stage_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'stage_delete')), array (  '_controller' => 'Gestion\\OffreBundle\\Controller\\StageController::deleteAction',));
            }
            not_stage_delete:

        }

        // gestion_calendrier_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gestion_calendrier_homepage')), array (  '_controller' => 'Gestion\\CalendrierBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/evenement')) {
            // evenement
            if (rtrim($pathinfo, '/') === '/evenement') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'evenement');
                }

                return array (  '_controller' => 'Gestion\\CalendrierBundle\\Controller\\EvenementController::indexAction',  '_route' => 'evenement',);
            }

            // evenementnotif
            if ($pathinfo === '/evenement/evenementnotif') {
                return array (  '_controller' => 'Gestion\\CalendrierBundle\\Controller\\EvenementController::indexnotifAction',  '_route' => 'evenementnotif',);
            }

            // evenement_show
            if (preg_match('#^/evenement/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'evenement_show')), array (  '_controller' => 'Gestion\\CalendrierBundle\\Controller\\EvenementController::showAction',));
            }

            // evenement_shownotif
            if (preg_match('#^/evenement/(?P<id>[^/]++)/shownotif$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'evenement_shownotif')), array (  '_controller' => 'Gestion\\CalendrierBundle\\Controller\\EvenementController::shownotifAction',));
            }

            // evenement_new
            if ($pathinfo === '/evenement/new') {
                return array (  '_controller' => 'Gestion\\CalendrierBundle\\Controller\\EvenementController::newAction',  '_route' => 'evenement_new',);
            }

            if (0 === strpos($pathinfo, '/evenement/c')) {
                // evenement_calendrier
                if ($pathinfo === '/evenement/calendrier') {
                    return array (  '_controller' => 'Gestion\\CalendrierBundle\\Controller\\EvenementController::calendrierAction',  '_route' => 'evenement_calendrier',);
                }

                // evenement_create
                if ($pathinfo === '/evenement/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_evenement_create;
                    }

                    return array (  '_controller' => 'Gestion\\CalendrierBundle\\Controller\\EvenementController::createAction',  '_route' => 'evenement_create',);
                }
                not_evenement_create:

            }

            // evenement_edit
            if (preg_match('#^/evenement/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'evenement_edit')), array (  '_controller' => 'Gestion\\CalendrierBundle\\Controller\\EvenementController::editAction',));
            }

            // evenement_update
            if (preg_match('#^/evenement/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_evenement_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'evenement_update')), array (  '_controller' => 'Gestion\\CalendrierBundle\\Controller\\EvenementController::updateAction',));
            }
            not_evenement_update:

            // evenement_delete
            if (preg_match('#^/evenement/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_evenement_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'evenement_delete')), array (  '_controller' => 'Gestion\\CalendrierBundle\\Controller\\EvenementController::deleteAction',));
            }
            not_evenement_delete:

        }

        // gestion_emplois_homepage
        if ($pathinfo === '/gestemploi') {
            return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\DefaultController::indexAction',  '_route' => 'gestion_emplois_homepage',);
        }

        if (0 === strpos($pathinfo, '/matiere')) {
            // matiere
            if (rtrim($pathinfo, '/') === '/matiere') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'matiere');
                }

                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\MatiereController::indexAction',  '_route' => 'matiere',);
            }

            // matiere_show
            if (preg_match('#^/matiere/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'matiere_show')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\MatiereController::showAction',));
            }

            // matiere_new
            if ($pathinfo === '/matiere/new') {
                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\MatiereController::newAction',  '_route' => 'matiere_new',);
            }

            // matiere_create
            if ($pathinfo === '/matiere/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_matiere_create;
                }

                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\MatiereController::createAction',  '_route' => 'matiere_create',);
            }
            not_matiere_create:

            // matiere_edit
            if (preg_match('#^/matiere/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'matiere_edit')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\MatiereController::editAction',));
            }

            // matiere_update
            if (preg_match('#^/matiere/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_matiere_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'matiere_update')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\MatiereController::updateAction',));
            }
            not_matiere_update:

            // matiere_delete
            if (preg_match('#^/matiere/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'matiere_delete')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\MatiereController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/p')) {
            if (0 === strpos($pathinfo, '/panier')) {
                // panier
                if (rtrim($pathinfo, '/') === '/panier') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'panier');
                    }

                    return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\PanierController::indexAction',  '_route' => 'panier',);
                }

                // panier_show
                if (preg_match('#^/panier/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'panier_show')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\PanierController::showAction',));
                }

                // panier_new
                if ($pathinfo === '/panier/formAjoutPanier') {
                    return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\PanierController::formAjoutPanierAction',  '_route' => 'panier_new',);
                }

                // panier_create
                if ($pathinfo === '/panier/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_panier_create;
                    }

                    return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\PanierController::createAction',  '_route' => 'panier_create',);
                }
                not_panier_create:

                // panier_edit
                if (preg_match('#^/panier/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'panier_edit')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\PanierController::editAction',));
                }

                // panier_update
                if (preg_match('#^/panier/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_panier_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'panier_update')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\PanierController::updateAction',));
                }
                not_panier_update:

                // panier_delete
                if (preg_match('#^/panier/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_panier_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'panier_delete')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\PanierController::deleteAction',));
                }
                not_panier_delete:

                // panier_ajout
                if ($pathinfo === '/panier/ajouterPanier') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_panier_ajout;
                    }

                    return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\PanierController::ajouterPanierAction',  '_route' => 'panier_ajout',);
                }
                not_panier_ajout:

                // get_matierepanier
                if ($pathinfo === '/panier/getMatiere') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_get_matierepanier;
                    }

                    return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\PanierController::getMatiereAction',  '_route' => 'get_matierepanier',);
                }
                not_get_matierepanier:

            }

            if (0 === strpos($pathinfo, '/profilclasse')) {
                // profilclasse
                if (rtrim($pathinfo, '/') === '/profilclasse') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'profilclasse');
                    }

                    return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\ProfilClasseController::indexAction',  '_route' => 'profilclasse',);
                }

                // profilclasse_show
                if (preg_match('#^/profilclasse/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'profilclasse_show')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\ProfilClasseController::showAction',));
                }

                // profilclasse_new
                if ($pathinfo === '/profilclasse/new') {
                    return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\ProfilClasseController::newAction',  '_route' => 'profilclasse_new',);
                }

                // profilclasse_create
                if ($pathinfo === '/profilclasse/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_profilclasse_create;
                    }

                    return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\ProfilClasseController::createAction',  '_route' => 'profilclasse_create',);
                }
                not_profilclasse_create:

                // profilclasse_edit
                if (preg_match('#^/profilclasse/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'profilclasse_edit')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\ProfilClasseController::editAction',));
                }

                // profilclasse_update
                if (preg_match('#^/profilclasse/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_profilclasse_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'profilclasse_update')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\ProfilClasseController::updateAction',));
                }
                not_profilclasse_update:

                // profilclasse_delete
                if (preg_match('#^/profilclasse/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'profilclasse_delete')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\ProfilClasseController::deleteAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/classe')) {
            // classe
            if (rtrim($pathinfo, '/') === '/classe') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'classe');
                }

                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\ClasseController::indexAction',  '_route' => 'classe',);
            }

            // classe_show
            if (preg_match('#^/classe/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classe_show')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\ClasseController::showAction',));
            }

            // classe_new
            if ($pathinfo === '/classe/new') {
                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\ClasseController::newAction',  '_route' => 'classe_new',);
            }

            // classe_create
            if ($pathinfo === '/classe/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_classe_create;
                }

                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\ClasseController::createAction',  '_route' => 'classe_create',);
            }
            not_classe_create:

            // classe_edit
            if (preg_match('#^/classe/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classe_edit')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\ClasseController::editAction',));
            }

            // classe_update
            if (preg_match('#^/classe/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_classe_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classe_update')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\ClasseController::updateAction',));
            }
            not_classe_update:

            // classe_delete
            if (preg_match('#^/classe/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classe_delete')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\ClasseController::deleteAction',));
            }

            // classe_getniveau
            if ($pathinfo === '/classe/getNiveau') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_classe_getniveau;
                }

                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\ClasseController::getNiveauAction',  '_route' => 'classe_getniveau',);
            }
            not_classe_getniveau:

            // classe_ajouterclasse
            if ($pathinfo === '/classe/ajouterClasse') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_classe_ajouterclasse;
                }

                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\ClasseController::ajouterClasseAction',  '_route' => 'classe_ajouterclasse',);
            }
            not_classe_ajouterclasse:

            // classe_getNiveauModif
            if (preg_match('#^/classe/(?P<id>[^/]++)/getNiveauModif$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_classe_getNiveauModif;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classe_getNiveauModif')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\ClasseController::getNiveauModifAction',));
            }
            not_classe_getNiveauModif:

            // classe_modifierclasse
            if (preg_match('#^/classe/(?P<id>[^/]++)/modifierClasse$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_classe_modifierclasse;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classe_modifierclasse')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\ClasseController::modifierClasseAction',));
            }
            not_classe_modifierclasse:

        }

        if (0 === strpos($pathinfo, '/formatione')) {
            // formationE
            if (rtrim($pathinfo, '/') === '/formatione') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'formationE');
                }

                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\FormationController::indexAction',  '_route' => 'formationE',);
            }

            // formationE_show
            if (preg_match('#^/formatione/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'formationE_show')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\FormationController::showAction',));
            }

            // formationE_new
            if ($pathinfo === '/formatione/new') {
                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\FormationController::newAction',  '_route' => 'formationE_new',);
            }

            // formationE_create
            if ($pathinfo === '/formatione/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_formationE_create;
                }

                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\FormationController::createAction',  '_route' => 'formationE_create',);
            }
            not_formationE_create:

            // formationE_edit
            if (preg_match('#^/formatione/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'formationE_edit')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\FormationController::editAction',));
            }

            // formationE_update
            if (preg_match('#^/formatione/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_formationE_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'formationE_update')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\FormationController::updateAction',));
            }
            not_formationE_update:

            // formationE_delete
            if (preg_match('#^/formatione/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'formationE_delete')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\FormationController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/diplome')) {
            // diplome
            if (rtrim($pathinfo, '/') === '/diplome') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'diplome');
                }

                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\DiplomeController::indexAction',  '_route' => 'diplome',);
            }

            // diplome_show
            if (preg_match('#^/diplome/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'diplome_show')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\DiplomeController::showAction',));
            }

            // diplome_new
            if ($pathinfo === '/diplome/new') {
                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\DiplomeController::newAction',  '_route' => 'diplome_new',);
            }

            // diplome_create
            if ($pathinfo === '/diplome/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_diplome_create;
                }

                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\DiplomeController::createAction',  '_route' => 'diplome_create',);
            }
            not_diplome_create:

            // diplome_edit
            if (preg_match('#^/diplome/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'diplome_edit')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\DiplomeController::editAction',));
            }

            // diplome_update
            if (preg_match('#^/diplome/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_diplome_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'diplome_update')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\DiplomeController::updateAction',));
            }
            not_diplome_update:

            // diplome_delete
            if (preg_match('#^/diplome/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'diplome_delete')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\DiplomeController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/planetude')) {
            // planetude
            if (rtrim($pathinfo, '/') === '/planetude') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'planetude');
                }

                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\PlanEtudeController::indexAction',  '_route' => 'planetude',);
            }

            // planetude_show
            if (preg_match('#^/planetude/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'planetude_show')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\PlanEtudeController::showAction',));
            }

            // planetude_new
            if ($pathinfo === '/planetude/new') {
                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\PlanEtudeController::newAction',  '_route' => 'planetude_new',);
            }

            // planetude_create
            if ($pathinfo === '/planetude/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_planetude_create;
                }

                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\PlanEtudeController::createAction',  '_route' => 'planetude_create',);
            }
            not_planetude_create:

            // planetude_edit
            if (preg_match('#^/planetude/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'planetude_edit')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\PlanEtudeController::editAction',));
            }

            // planetude_update
            if (preg_match('#^/planetude/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_planetude_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'planetude_update')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\PlanEtudeController::updateAction',));
            }
            not_planetude_update:

            // planetude_delete
            if (preg_match('#^/planetude/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'planetude_delete')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\PlanEtudeController::deleteAction',));
            }

            // planetude_getniveau
            if ($pathinfo === '/planetude/getNiveau') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_planetude_getniveau;
                }

                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\PlanEtudeController::getNiveauAction',  '_route' => 'planetude_getniveau',);
            }
            not_planetude_getniveau:

            // planetude_ajouterplan
            if ($pathinfo === '/planetude/ajouterPlan') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_planetude_ajouterplan;
                }

                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\PlanEtudeController::ajouterPlanAction',  '_route' => 'planetude_ajouterplan',);
            }
            not_planetude_ajouterplan:

            // planetude_getNiveauModif
            if (preg_match('#^/planetude/(?P<id>[^/]++)/getNiveauModif$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_planetude_getNiveauModif;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'planetude_getNiveauModif')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\PlanEtudeController::getNiveauModifAction',));
            }
            not_planetude_getNiveauModif:

            // planetude_modifierplan
            if (preg_match('#^/planetude/(?P<id>[^/]++)/modifierPlan$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_planetude_modifierplan;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'planetude_modifierplan')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\PlanEtudeController::modifierPlanAction',));
            }
            not_planetude_modifierplan:

        }

        if (0 === strpos($pathinfo, '/affectationplan')) {
            // affectationplan
            if (rtrim($pathinfo, '/') === '/affectationplan') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'affectationplan');
                }

                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\AffectationPlanController::indexAction',  '_route' => 'affectationplan',);
            }

            // affectationplan_show
            if (preg_match('#^/affectationplan/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'affectationplan_show')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\AffectationPlanController::showAction',));
            }

            // affectationplan_new
            if ($pathinfo === '/affectationplan/new') {
                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\AffectationPlanController::newAction',  '_route' => 'affectationplan_new',);
            }

            // affectationplan_create
            if ($pathinfo === '/affectationplan/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_affectationplan_create;
                }

                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\AffectationPlanController::createAction',  '_route' => 'affectationplan_create',);
            }
            not_affectationplan_create:

            // affectationplan_edit
            if (preg_match('#^/affectationplan/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'affectationplan_edit')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\AffectationPlanController::editAction',));
            }

            // affectationplan_update
            if (preg_match('#^/affectationplan/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_affectationplan_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'affectationplan_update')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\AffectationPlanController::updateAction',));
            }
            not_affectationplan_update:

            // affectationplan_delete
            if (preg_match('#^/affectationplan/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'affectationplan_delete')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\AffectationPlanController::deleteAction',));
            }

            // affectationplan_getmatiere
            if ($pathinfo === '/affectationplan/getMatiere') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_affectationplan_getmatiere;
                }

                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\AffectationPlanController::getMatiereAction',  '_route' => 'affectationplan_getmatiere',);
            }
            not_affectationplan_getmatiere:

            // affectationplan_ajouterAffectation
            if ($pathinfo === '/affectationplan/ajouterAffectation') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_affectationplan_ajouterAffectation;
                }

                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\AffectationPlanController::ajouterAffectationAction',  '_route' => 'affectationplan_ajouterAffectation',);
            }
            not_affectationplan_ajouterAffectation:

            // affectation_getgroupemodif
            if (preg_match('#^/affectationplan/(?P<id>[^/]++)/getGroupeModif$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_affectation_getgroupemodif;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'affectation_getgroupemodif')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\AffectationPlanController::getGroupeModifAction',));
            }
            not_affectation_getgroupemodif:

            // affectation_modifieraffectation
            if (preg_match('#^/affectationplan/(?P<id>[^/]++)/modifierAffectation$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_affectation_modifieraffectation;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'affectation_modifieraffectation')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\AffectationPlanController::modifierAffectaionAction',));
            }
            not_affectation_modifieraffectation:

        }

        if (0 === strpos($pathinfo, '/salle')) {
            // salle
            if (rtrim($pathinfo, '/') === '/salle') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'salle');
                }

                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\SalleController::indexAction',  '_route' => 'salle',);
            }

            // salle_show
            if (preg_match('#^/salle/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'salle_show')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\SalleController::showAction',));
            }

            // salle_new
            if ($pathinfo === '/salle/new') {
                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\SalleController::newAction',  '_route' => 'salle_new',);
            }

            // salle_create
            if ($pathinfo === '/salle/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_salle_create;
                }

                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\SalleController::createAction',  '_route' => 'salle_create',);
            }
            not_salle_create:

            // salle_edit
            if (preg_match('#^/salle/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'salle_edit')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\SalleController::editAction',));
            }

            // salle_update
            if (preg_match('#^/salle/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_salle_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'salle_update')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\SalleController::updateAction',));
            }
            not_salle_update:

            // salle_delete
            if (preg_match('#^/salle/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'salle_delete')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\SalleController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/emploi')) {
            // emploi
            if (rtrim($pathinfo, '/') === '/emploi') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'emploi');
                }

                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\EmploiController::indexAction',  '_route' => 'emploi',);
            }

            // emploi_show
            if (preg_match('#^/emploi/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'emploi_show')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\EmploiController::showAction',));
            }

            // emploi_new
            if ($pathinfo === '/emploi/new') {
                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\EmploiController::newAction',  '_route' => 'emploi_new',);
            }

            // emploi_create
            if ($pathinfo === '/emploi/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_emploi_create;
                }

                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\EmploiController::createAction',  '_route' => 'emploi_create',);
            }
            not_emploi_create:

            // emploi_edit
            if (preg_match('#^/emploi/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'emploi_edit')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\EmploiController::editAction',));
            }

            // emploi_update
            if (preg_match('#^/emploi/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_emploi_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'emploi_update')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\EmploiController::updateAction',));
            }
            not_emploi_update:

            // emploi_delete
            if (preg_match('#^/emploi/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'emploi_delete')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\EmploiController::deleteAction',));
            }

            // emploi_getmatiere
            if ($pathinfo === '/emploi/getMatiere') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_emploi_getmatiere;
                }

                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\EmploiController::getMatiereAction',  '_route' => 'emploi_getmatiere',);
            }
            not_emploi_getmatiere:

            // emploi_ajouterSeance
            if ($pathinfo === '/emploi/ajouterSeance') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_emploi_ajouterSeance;
                }

                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\EmploiController::ajouterSeanceAction',  '_route' => 'emploi_ajouterSeance',);
            }
            not_emploi_ajouterSeance:

            // emploi_getgroupemodif
            if (preg_match('#^/emploi/(?P<id>[^/]++)/getGroupeModif$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_emploi_getgroupemodif;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'emploi_getgroupemodif')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\EmploiController::getGroupeModifAction',));
            }
            not_emploi_getgroupemodif:

            // emploi_modifierSeance
            if (preg_match('#^/emploi/(?P<id>[^/]++)/modifierSeance$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_emploi_modifierSeance;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'emploi_modifierSeance')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\EmploiController::modifierSeanceAction',));
            }
            not_emploi_modifierSeance:

            // emploi_voirEmplois
            if ($pathinfo === '/emploi/voirEmplois') {
                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\EmploiController::voirEmploisAction',  '_route' => 'emploi_voirEmplois',);
            }

            // emploi_emploiClasse
            if ($pathinfo === '/emploi/emploiClasse') {
                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\EmploiController::emploiClasseAction',  '_route' => 'emploi_emploiClasse',);
            }

        }

        if (0 === strpos($pathinfo, '/affectationetudiant')) {
            // affectationetudiant
            if (rtrim($pathinfo, '/') === '/affectationetudiant') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'affectationetudiant');
                }

                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\AffectationEtudiantController::indexAction',  '_route' => 'affectationetudiant',);
            }

            // affectationetudiant_show
            if (preg_match('#^/affectationetudiant/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'affectationetudiant_show')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\AffectationEtudiantController::showAction',));
            }

            // affectationetudiant_new
            if ($pathinfo === '/affectationetudiant/new') {
                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\AffectationEtudiantController::newAction',  '_route' => 'affectationetudiant_new',);
            }

            // affectationetudiant_create
            if ($pathinfo === '/affectationetudiant/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_affectationetudiant_create;
                }

                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\AffectationEtudiantController::createAction',  '_route' => 'affectationetudiant_create',);
            }
            not_affectationetudiant_create:

            // affectationetudiant_edit
            if (preg_match('#^/affectationetudiant/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'affectationetudiant_edit')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\AffectationEtudiantController::editAction',));
            }

            // affectationetudiant_update
            if (preg_match('#^/affectationetudiant/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_affectationetudiant_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'affectationetudiant_update')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\AffectationEtudiantController::updateAction',));
            }
            not_affectationetudiant_update:

            // affectationetudiant_delete
            if (preg_match('#^/affectationetudiant/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'affectationetudiant_delete')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\AffectationEtudiantController::deleteAction',));
            }

            // affectationetudiant_ajouterAffectation
            if ($pathinfo === '/affectationetudiant/ajouterAffectation') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_affectationetudiant_ajouterAffectation;
                }

                return array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\AffectationEtudiantController::ajouterAffectationAction',  '_route' => 'affectationetudiant_ajouterAffectation',);
            }
            not_affectationetudiant_ajouterAffectation:

            // affectationetudiant_getgroupemodif
            if (preg_match('#^/affectationetudiant/(?P<id>[^/]++)/getGroupeModif$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_affectationetudiant_getgroupemodif;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'affectationetudiant_getgroupemodif')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\AffectationEtudiantController::getGroupeModifAction',));
            }
            not_affectationetudiant_getgroupemodif:

            // affectationetudiant_modifierAffectation
            if (preg_match('#^/affectationetudiant/(?P<id>[^/]++)/modifierAffectation$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_affectationetudiant_modifierAffectation;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'affectationetudiant_modifierAffectation')), array (  '_controller' => 'Gestion\\EmploisBundle\\Controller\\AffectationEtudiantController::modifierAffectationAction',));
            }
            not_affectationetudiant_modifierAffectation:

        }

        // gestion_user_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gestion_user_homepage')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/etudiant')) {
            // etudiant
            if (rtrim($pathinfo, '/') === '/etudiant') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'etudiant');
                }

                return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\EtudiantController::indexAction',  '_route' => 'etudiant',);
            }

            // etudiant_username
            if ($pathinfo === '/etudiant/etudiantusername') {
                return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\EtudiantController::usernameAction',  '_route' => 'etudiant_username',);
            }

            // etudiant_show
            if (preg_match('#^/etudiant/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'etudiant_show')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\EtudiantController::showAction',));
            }

            if (0 === strpos($pathinfo, '/etudiant/editp')) {
                // etudiant_editperso
                if ($pathinfo === '/etudiant/editperso') {
                    return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\EtudiantController::editpersoAction',  '_route' => 'etudiant_editperso',);
                }

                // etudiant_editpwd
                if ($pathinfo === '/etudiant/editpwd') {
                    return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\EtudiantController::editpwdAction',  '_route' => 'etudiant_editpwd',);
                }

            }

            if (0 === strpos($pathinfo, '/etudiant/updatep')) {
                // etudiant_updatepwd
                if ($pathinfo === '/etudiant/updatepwd') {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_etudiant_updatepwd;
                    }

                    return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\EtudiantController::updatepwdAction',  '_route' => 'etudiant_updatepwd',);
                }
                not_etudiant_updatepwd:

                // etudiant_updateperso
                if ($pathinfo === '/etudiant/updateperso') {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_etudiant_updateperso;
                    }

                    return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\EtudiantController::updatepersoAction',  '_route' => 'etudiant_updateperso',);
                }
                not_etudiant_updateperso:

            }

            // etudiant_new
            if ($pathinfo === '/etudiant/new') {
                return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\EtudiantController::newAction',  '_route' => 'etudiant_new',);
            }

            // etudiant_create
            if ($pathinfo === '/etudiant/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_etudiant_create;
                }

                return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\EtudiantController::createAction',  '_route' => 'etudiant_create',);
            }
            not_etudiant_create:

            // etudiant_edit
            if (preg_match('#^/etudiant/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'etudiant_edit')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\EtudiantController::editAction',));
            }

            // etudiant_update
            if (preg_match('#^/etudiant/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_etudiant_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'etudiant_update')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\EtudiantController::updateAction',));
            }
            not_etudiant_update:

            // etudiant_delete
            if (preg_match('#^/etudiant/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_etudiant_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'etudiant_delete')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\EtudiantController::deleteAction',));
            }
            not_etudiant_delete:

        }

        if (0 === strpos($pathinfo, '/prof')) {
            // prof
            if (rtrim($pathinfo, '/') === '/prof') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'prof');
                }

                return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\ProfController::indexAction',  '_route' => 'prof',);
            }

            // prof_username
            if ($pathinfo === '/prof/profusername') {
                return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\ProfController::usernameAction',  '_route' => 'prof_username',);
            }

            // prof_show
            if (preg_match('#^/prof/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'prof_show')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\ProfController::showAction',));
            }

            // prof_new
            if ($pathinfo === '/prof/new') {
                return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\ProfController::newAction',  '_route' => 'prof_new',);
            }

            // prof_editpwd
            if ($pathinfo === '/prof/editpwd') {
                return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\ProfController::editpwdAction',  '_route' => 'prof_editpwd',);
            }

            // prof_updatepwd
            if ($pathinfo === '/prof/updatepwd') {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_prof_updatepwd;
                }

                return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\ProfController::updatepwdAction',  '_route' => 'prof_updatepwd',);
            }
            not_prof_updatepwd:

            // prof_editperso
            if ($pathinfo === '/prof/editperso') {
                return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\ProfController::editpersoAction',  '_route' => 'prof_editperso',);
            }

            // prof_updateperso
            if ($pathinfo === '/prof/updateperso') {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_prof_updateperso;
                }

                return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\ProfController::updatepersoAction',  '_route' => 'prof_updateperso',);
            }
            not_prof_updateperso:

            // prof_create
            if ($pathinfo === '/prof/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_prof_create;
                }

                return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\ProfController::createAction',  '_route' => 'prof_create',);
            }
            not_prof_create:

            // prof_edit
            if (preg_match('#^/prof/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'prof_edit')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\ProfController::editAction',));
            }

            // prof_update
            if (preg_match('#^/prof/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_prof_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'prof_update')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\ProfController::updateAction',));
            }
            not_prof_update:

            // prof_delete
            if (preg_match('#^/prof/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_prof_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'prof_delete')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\ProfController::deleteAction',));
            }
            not_prof_delete:

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // admin
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin');
                }

                return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\AdminController::indexAction',  '_route' => 'admin',);
            }

            if (0 === strpos($pathinfo, '/admin/user')) {
                // user
                if ($pathinfo === '/admin/user') {
                    return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\AdminController::indexuserAction',  '_route' => 'user',);
                }

                // username
                if ($pathinfo === '/admin/username') {
                    return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\AdminController::usernameAction',  '_route' => 'username',);
                }

            }

            // admin_show
            if (preg_match('#^/admin/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_show')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\AdminController::showAction',));
            }

            // admin_new
            if ($pathinfo === '/admin/new') {
                return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\AdminController::newAction',  '_route' => 'admin_new',);
            }

            // admin_create
            if ($pathinfo === '/admin/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_create;
                }

                return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\AdminController::createAction',  '_route' => 'admin_create',);
            }
            not_admin_create:

            // admin_edit
            if (preg_match('#^/admin/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_edit')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\AdminController::editAction',));
            }

            // admin_editperso
            if ($pathinfo === '/admin/editperso') {
                return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\AdminController::editpersoAction',  '_route' => 'admin_editperso',);
            }

            // admin_updateperso
            if ($pathinfo === '/admin/updateperso') {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_admin_updateperso;
                }

                return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\AdminController::updatepersoAction',  '_route' => 'admin_updateperso',);
            }
            not_admin_updateperso:

            // admin_update
            if (preg_match('#^/admin/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_admin_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_update')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\AdminController::updateAction',));
            }
            not_admin_update:

            // admin_delete
            if (preg_match('#^/admin/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_admin_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_delete')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\AdminController::deleteAction',));
            }
            not_admin_delete:

        }

        if (0 === strpos($pathinfo, '/entreprise')) {
            // entreprise
            if (rtrim($pathinfo, '/') === '/entreprise') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'entreprise');
                }

                return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\EntrepriseController::indexAction',  '_route' => 'entreprise',);
            }

            // entreprise_show
            if (preg_match('#^/entreprise/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'entreprise_show')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\EntrepriseController::showAction',));
            }

            // entreprise_new
            if ($pathinfo === '/entreprise/new') {
                return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\EntrepriseController::newAction',  '_route' => 'entreprise_new',);
            }

            // entreprise_create
            if ($pathinfo === '/entreprise/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_entreprise_create;
                }

                return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\EntrepriseController::createAction',  '_route' => 'entreprise_create',);
            }
            not_entreprise_create:

            // entreprise_edit
            if (preg_match('#^/entreprise/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'entreprise_edit')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\EntrepriseController::editAction',));
            }

            // entreprise_update
            if (preg_match('#^/entreprise/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_entreprise_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'entreprise_update')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\EntrepriseController::updateAction',));
            }
            not_entreprise_update:

            // entreprise_editactiver
            if (preg_match('#^/entreprise/(?P<id>[^/]++)/editactiver$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'entreprise_editactiver')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\EntrepriseController::editactiverAction',));
            }

            // entreprise_updateactiver
            if (preg_match('#^/entreprise/(?P<id>[^/]++)/updateactiver$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'entreprise_updateactiver')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\EntrepriseController::updateactiverAction',));
            }

            // entreprise_editdesactiver
            if (preg_match('#^/entreprise/(?P<id>[^/]++)/editdesactiver$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'entreprise_editdesactiver')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\EntrepriseController::editdesactiverAction',));
            }

            // entreprise_updatedesactiver
            if (preg_match('#^/entreprise/(?P<id>[^/]++)/updatedesactiver$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'entreprise_updatedesactiver')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\EntrepriseController::updatedesactiverAction',));
            }

            // entreprise_delete
            if (preg_match('#^/entreprise/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_entreprise_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'entreprise_delete')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\EntrepriseController::deleteAction',));
            }
            not_entreprise_delete:

            // entreprise_editperso
            if ($pathinfo === '/entreprise/editperso') {
                return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\EntrepriseController::editpersoAction',  '_route' => 'entreprise_editperso',);
            }

            // entreprise_updateperso
            if ($pathinfo === '/entreprise/updateperso') {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_entreprise_updateperso;
                }

                return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\EntrepriseController::updatepersoAction',  '_route' => 'entreprise_updateperso',);
            }
            not_entreprise_updateperso:

        }

        if (0 === strpos($pathinfo, '/register')) {
            if (0 === strpos($pathinfo, '/register/e')) {
                // etudiant_registration
                if ($pathinfo === '/register/etudiant') {
                    return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\RegistrationEtudiantController::registerAction',  '_route' => 'etudiant_registration',);
                }

                // entreprise_registration
                if ($pathinfo === '/register/entreprise') {
                    return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\RegistrationEntrepriseController::registerAction',  '_route' => 'entreprise_registration',);
                }

            }

            // prof_registration
            if ($pathinfo === '/register/prof') {
                return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\RegistrationProfController::registerAction',  '_route' => 'prof_registration',);
            }

            // admin_registration
            if ($pathinfo === '/register/admin') {
                return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\RegistrationAdminController::registerAction',  '_route' => 'admin_registration',);
            }

        }

        // tableau_board
        if ($pathinfo === '/TableauBoard') {
            return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\DefaultController::DashboardAction',  '_route' => 'tableau_board',);
        }

        if (0 === strpos($pathinfo, '/formation')) {
            // formation
            if (preg_match('#^/formation/(?P<idcursus>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'formation');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'formation')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\FormationController::indexAction',));
            }

            // formation_show
            if (preg_match('#^/formation/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'formation_show')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\FormationController::showAction',));
            }

            // formation_new
            if (0 === strpos($pathinfo, '/formation/new') && preg_match('#^/formation/new/(?P<idcursus>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'formation_new');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'formation_new')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\FormationController::newAction',));
            }

            // formation_create
            if (0 === strpos($pathinfo, '/formation/create') && preg_match('#^/formation/create/(?P<idcursus>[^/]++)/$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_formation_create;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'formation_create')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\FormationController::createAction',));
            }
            not_formation_create:

            // formation_edit
            if (preg_match('#^/formation/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'formation_edit')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\FormationController::editAction',));
            }

            // formation_update
            if (preg_match('#^/formation/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_formation_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'formation_update')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\FormationController::updateAction',));
            }
            not_formation_update:

            // formation_delete
            if (preg_match('#^/formation/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_formation_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'formation_delete')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\FormationController::deleteAction',));
            }
            not_formation_delete:

        }

        if (0 === strpos($pathinfo, '/experience')) {
            // experience
            if (preg_match('#^/experience/(?P<idcursus>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'experience');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'experience')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\ExperienceController::indexAction',));
            }

            // experience_show
            if (preg_match('#^/experience/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'experience_show')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\ExperienceController::showAction',));
            }

            // experience_new
            if (0 === strpos($pathinfo, '/experience/new') && preg_match('#^/experience/new/(?P<idcursus>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'experience_new');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'experience_new')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\ExperienceController::newAction',));
            }

            // experience_create
            if (0 === strpos($pathinfo, '/experience/create') && preg_match('#^/experience/create/(?P<idcursus>[^/]++)/$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_experience_create;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'experience_create')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\ExperienceController::createAction',));
            }
            not_experience_create:

            // experience_edit
            if (preg_match('#^/experience/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'experience_edit')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\ExperienceController::editAction',));
            }

            // experience_update
            if (preg_match('#^/experience/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_experience_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'experience_update')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\ExperienceController::updateAction',));
            }
            not_experience_update:

            // experience_delete
            if (preg_match('#^/experience/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_experience_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'experience_delete')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\ExperienceController::deleteAction',));
            }
            not_experience_delete:

        }

        if (0 === strpos($pathinfo, '/langue')) {
            // langue
            if (preg_match('#^/langue/(?P<idcursus>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'langue');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'langue')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\LangueController::indexAction',));
            }

            // langue_show
            if (preg_match('#^/langue/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'langue_show')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\LangueController::showAction',));
            }

            // langue_new
            if (0 === strpos($pathinfo, '/langue/new') && preg_match('#^/langue/new/(?P<idcursus>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'langue_new');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'langue_new')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\LangueController::newAction',));
            }

            // langue_create
            if (0 === strpos($pathinfo, '/langue/create') && preg_match('#^/langue/create/(?P<idcursus>[^/]++)/$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_langue_create;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'langue_create')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\LangueController::createAction',));
            }
            not_langue_create:

            // langue_edit
            if (preg_match('#^/langue/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'langue_edit')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\LangueController::editAction',));
            }

            // langue_update
            if (preg_match('#^/langue/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_langue_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'langue_update')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\LangueController::updateAction',));
            }
            not_langue_update:

            // langue_delete
            if (preg_match('#^/langue/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_langue_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'langue_delete')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\LangueController::deleteAction',));
            }
            not_langue_delete:

        }

        if (0 === strpos($pathinfo, '/cursus')) {
            // cursus
            if (rtrim($pathinfo, '/') === '/cursus') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'cursus');
                }

                return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\CursusController::indexAction',  '_route' => 'cursus',);
            }

            // cursususer
            if ($pathinfo === '/cursus/cursususer') {
                return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\CursusController::indexuserAction',  '_route' => 'cursususer',);
            }

            // cursus_show
            if (preg_match('#^/cursus/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cursus_show')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\CursusController::showAction',));
            }

            // cursus_showuser
            if (preg_match('#^/cursus/(?P<id>[^/]++)/showuser$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cursus_showuser')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\CursusController::showuserAction',));
            }

            if (0 === strpos($pathinfo, '/cursus/new')) {
                // cursus_new
                if (preg_match('#^/cursus/new/(?P<iduser>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'cursus_new');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cursus_new')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\CursusController::newAction',));
                }

                // cursus_newuser
                if (0 === strpos($pathinfo, '/cursus/newuser') && preg_match('#^/cursus/newuser/(?P<iduser>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'cursus_newuser');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cursus_newuser')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\CursusController::newuserAction',));
                }

            }

            if (0 === strpos($pathinfo, '/cursus/create')) {
                // cursus_createuser
                if (0 === strpos($pathinfo, '/cursus/createuser') && preg_match('#^/cursus/createuser/(?P<iduser>[^/]++)/$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_cursus_createuser;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cursus_createuser')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\CursusController::createuserAction',));
                }
                not_cursus_createuser:

                // cursus_create
                if (preg_match('#^/cursus/create/(?P<iduser>[^/]++)/$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_cursus_create;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cursus_create')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\CursusController::createAction',));
                }
                not_cursus_create:

            }

            // cursus_edit
            if (preg_match('#^/cursus/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cursus_edit')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\CursusController::editAction',));
            }

            // layout_cursus
            if (preg_match('#^/cursus/(?P<id>[^/]++)/layout$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'layout_cursus')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\CursusController::layoutAction',));
            }

            // cursus_edituser
            if (preg_match('#^/cursus/(?P<id>[^/]++)/edituser$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cursus_edituser')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\CursusController::edituserAction',));
            }

            // cursus_updateuser
            if (preg_match('#^/cursus/(?P<id>[^/]++)/updateuser$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_cursus_updateuser;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cursus_updateuser')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\CursusController::updateuserAction',));
            }
            not_cursus_updateuser:

            // cursus_update
            if (preg_match('#^/cursus/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_cursus_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cursus_update')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\CursusController::updateAction',));
            }
            not_cursus_update:

            // cursus_delete
            if (preg_match('#^/cursus/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_cursus_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cursus_delete')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\CursusController::deleteAction',));
            }
            not_cursus_delete:

            // cursus_deleteuser
            if (preg_match('#^/cursus/(?P<id>[^/]++)/deleteuser$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_cursus_deleteuser;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cursus_deleteuser')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\CursusController::deleteuserAction',));
            }
            not_cursus_deleteuser:

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

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

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

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

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/communication')) {
            // user_communication_homepage
            if (0 === strpos($pathinfo, '/communication/hello') && preg_match('#^/communication/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_communication_homepage')), array (  '_controller' => 'User\\CommunicationBundle\\Controller\\DefaultController::indexAction',));
            }

            // accueil
            if ($pathinfo === '/communication/accueil') {
                return array (  '_controller' => 'User\\CommunicationBundle\\Controller\\MessageController::accueilAction',  '_route' => 'accueil',);
            }

            // nouveau_message
            if ($pathinfo === '/communication/nouveau') {
                return array (  '_controller' => 'User\\CommunicationBundle\\Controller\\MessageController::indexAction',  '_route' => 'nouveau_message',);
            }

            // voir_msg
            if ($pathinfo === '/communication/message') {
                return array (  '_controller' => 'User\\CommunicationBundle\\Controller\\MessageController::voirAction',  '_route' => 'voir_msg',);
            }

            if (0 === strpos($pathinfo, '/communication/d')) {
                // detail_msg
                if (0 === strpos($pathinfo, '/communication/detail') && preg_match('#^/communication/detail(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'detail_msg')), array (  '_controller' => 'User\\CommunicationBundle\\Controller\\MessageController::detailAction',  'id' => 1,));
                }

                // download
                if (0 === strpos($pathinfo, '/communication/download') && preg_match('#^/communication/download(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'download')), array (  '_controller' => 'User\\CommunicationBundle\\Controller\\MessageController::detailAction',  'id' => 1,));
                }

                // delete_msg
                if (0 === strpos($pathinfo, '/communication/delete') && preg_match('#^/communication/delete(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_msg')), array (  '_controller' => 'User\\CommunicationBundle\\Controller\\MessageController::deleteAction',  'id' => 1,));
                }

            }

            // msg_envoi
            if ($pathinfo === '/communication/envoi') {
                return array (  '_controller' => 'User\\CommunicationBundle\\Controller\\MessageController::msgenvoiAction',  '_route' => 'msg_envoi',);
            }

            // chat_home
            if (rtrim($pathinfo, '/') === '/communication/chat') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'chat_home');
                }

                return array (  '_controller' => 'User\\CommunicationBundle\\Controller\\ChatController::indexAction',  '_route' => 'chat_home',);
            }

            // chat_add
            if ($pathinfo === '/communication/add') {
                return array (  '_controller' => 'User\\CommunicationBundle\\Controller\\ChatController::addAction',  '_route' => 'chat_add',);
            }

            if (0 === strpos($pathinfo, '/communication/m')) {
                if (0 === strpos($pathinfo, '/communication/mail')) {
                    // chat_amail
                    if ($pathinfo === '/communication/mail') {
                        return array (  '_controller' => 'User\\CommunicationBundle\\Controller\\ChatController::envoimailAction',  '_route' => 'chat_amail',);
                    }

                    // detail_mail
                    if (0 === strpos($pathinfo, '/communication/mail/detail') && preg_match('#^/communication/mail/detail/(?P<id>[^/]++)/(?P<num>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'detail_mail')), array (  '_controller' => 'User\\CommunicationBundle\\Controller\\ChatController::detailmailAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/communication/message')) {
                    // reponse_msg
                    if (preg_match('#^/communication/message/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'reponse_msg')), array (  '_controller' => 'User\\CommunicationBundle\\Controller\\MessageController::reponseAction',));
                    }

                    // reponsetransf_msg
                    if (0 === strpos($pathinfo, '/communication/message/transfer') && preg_match('#^/communication/message/transfer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'reponsetransf_msg')), array (  '_controller' => 'User\\CommunicationBundle\\Controller\\MessageController::reponseTransAction',));
                    }

                    // detail_envoi
                    if (0 === strpos($pathinfo, '/communication/messageenvoi') && preg_match('#^/communication/messageenvoi/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'detail_envoi')), array (  '_controller' => 'User\\CommunicationBundle\\Controller\\MessageController::detailenvoiAction',));
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/question_reponse')) {
            if (0 === strpos($pathinfo, '/question_reponse/notification')) {
                // question_reponse_question_reponse_homepage
                if ($pathinfo === '/question_reponse/notification/questions') {
                    return array (  '_controller' => 'Question\\Reponse\\QuestionReponseBundle\\Controller\\QuestionController::indexAction',  '_route' => 'question_reponse_question_reponse_homepage',);
                }

                // reponse_homepage
                if ($pathinfo === '/question_reponse/notification/reponse') {
                    return array (  '_controller' => 'Question\\Reponse\\QuestionReponseBundle\\Controller\\ReponseController::indexAction',  '_route' => 'reponse_homepage',);
                }

                if (0 === strpos($pathinfo, '/question_reponse/notification/question')) {
                    // ajout_question
                    if ($pathinfo === '/question_reponse/notification/question') {
                        return array (  '_controller' => 'Question\\Reponse\\QuestionReponseBundle\\Controller\\QuestionController::createAction',  '_route' => 'ajout_question',);
                    }

                    if (0 === strpos($pathinfo, '/question_reponse/notification/question/de')) {
                        // delete_question
                        if (0 === strpos($pathinfo, '/question_reponse/notification/question/delete') && preg_match('#^/question_reponse/notification/question/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_question')), array (  '_controller' => 'Question\\Reponse\\QuestionReponseBundle\\Controller\\QuestionController::deleteAction',));
                        }

                        // detail_question
                        if (0 === strpos($pathinfo, '/question_reponse/notification/question/detail') && preg_match('#^/question_reponse/notification/question/detail/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'detail_question')), array (  '_controller' => 'Question\\Reponse\\QuestionReponseBundle\\Controller\\QuestionController::detailAction',));
                        }

                    }

                }

            }

            // reponse_question
            if (0 === strpos($pathinfo, '/question_reponse/reponse') && preg_match('#^/question_reponse/reponse/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reponse_question')), array (  '_controller' => 'Question\\Reponse\\QuestionReponseBundle\\Controller\\ReponseController::createAction',));
            }

            if (0 === strpos($pathinfo, '/question_reponse/notification/reponse/de')) {
                // delete_reponse
                if (0 === strpos($pathinfo, '/question_reponse/notification/reponse/delete') && preg_match('#^/question_reponse/notification/reponse/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_reponse')), array (  '_controller' => 'Question\\Reponse\\QuestionReponseBundle\\Controller\\ReponseController::deleteAction',));
                }

                // detail_reponse
                if (0 === strpos($pathinfo, '/question_reponse/notification/reponse/detail') && preg_match('#^/question_reponse/notification/reponse/detail/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'detail_reponse')), array (  '_controller' => 'Question\\Reponse\\QuestionReponseBundle\\Controller\\ReponseController::detailAction',));
                }

            }

            if (0 === strpos($pathinfo, '/question_reponse/re')) {
                // moteur_di_recherche
                if ($pathinfo === '/question_reponse/recherche') {
                    return array (  '_controller' => 'Question\\Reponse\\QuestionReponseBundle\\Controller\\QuestionController::rechercheAction',  '_route' => 'moteur_di_recherche',);
                }

                if (0 === strpos($pathinfo, '/question_reponse/resultat')) {
                    // resultat
                    if (preg_match('#^/question_reponse/resultat/(?P<search>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'resultat')), array (  '_controller' => 'Question\\Reponse\\QuestionReponseBundle\\Controller\\QuestionController::resultatAction',));
                    }

                    // detail_recherche
                    if (0 === strpos($pathinfo, '/question_reponse/resultat/detail') && preg_match('#^/question_reponse/resultat/detail/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'detail_recherche')), array (  '_controller' => 'Question\\Reponse\\QuestionReponseBundle\\Controller\\QuestionController::detailrechercheAction',));
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/ws')) {
            // _webservice_call
            if (preg_match('#^/ws/(?P<webservice>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not__webservice_call;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => '_webservice_call')), array (  '_controller' => 'BeSimple\\SoapBundle\\Controller\\SoapWebServiceController::CallAction',  '_format' => 'xml',));
            }
            not__webservice_call:

            // _webservice_definition
            if (preg_match('#^/ws/(?P<webservice>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not__webservice_definition;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => '_webservice_definition')), array (  '_controller' => 'BeSimple\\SoapBundle\\Controller\\SoapWebServiceController::DefinitionAction',  '_format' => 'xml',));
            }
            not__webservice_definition:

            if (0 === strpos($pathinfo, '/ws/DemoApi/1.0')) {
                // demo_api_10_webservice_call
                if ($pathinfo === '/ws/DemoApi/1.0') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_demo_api_10_webservice_call;
                    }

                    return array (  '_controller' => 'BeSimple\\SoapBundle\\Controller\\SoapWebServiceController::CallAction',  '_format' => 'xml',  'webservice' => 'DemoApi',  '_route' => 'demo_api_10_webservice_call',);
                }
                not_demo_api_10_webservice_call:

                // demo_api_10_webservice_definition
                if ($pathinfo === '/ws/DemoApi/1.0') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_demo_api_10_webservice_definition;
                    }

                    return array (  '_controller' => 'BeSimple\\SoapBundle\\Controller\\SoapWebServiceController::DefinitionAction',  '_format' => 'xml',  'webservice' => 'DemoApi',  '_route' => 'demo_api_10_webservice_definition',);
                }
                not_demo_api_10_webservice_definition:

            }

        }

        if (0 === strpos($pathinfo, '/b')) {
            if (0 === strpos($pathinfo, '/blog')) {
                // blog_homepage
                if (rtrim($pathinfo, '/') === '/blog') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_blog_homepage;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'blog_homepage');
                    }

                    return array (  '_controller' => 'Mv\\BlogBundle\\Controller\\DefaultController::homepageAction',  '_route' => 'blog_homepage',);
                }
                not_blog_homepage:

                // blog_rss
                if ($pathinfo === '/blog/flux.rss') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_blog_rss;
                    }

                    return array (  '_controller' => 'Mv\\BlogBundle\\Controller\\DefaultController::rssAction',  '_route' => 'blog_rss',);
                }
                not_blog_rss:

                // blog_category_list
                if (preg_match('#^/blog/(?P<id>\\d+)\\-(?P<slug>[a-z0-9\\-]+)/?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_blog_category_list;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'blog_category_list');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_category_list')), array (  '_controller' => 'Mv\\BlogBundle\\Controller\\DefaultController::categoryAction',));
                }
                not_blog_category_list:

                // blog_post_show
                if (preg_match('#^/blog/(?P<category_id>\\d+)\\-(?P<category>[a-z0-9\\-]+)/(?P<id>\\d+)\\-(?P<slug>[a-z0-9\\-]+)\\.html$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_blog_post_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_post_show')), array (  '_controller' => 'Mv\\BlogBundle\\Controller\\DefaultController::showArticleAction',));
                }
                not_blog_post_show:

                if (0 === strpos($pathinfo, '/blog/com-')) {
                    // blog_post_comment
                    if (0 === strpos($pathinfo, '/blog/com-article') && preg_match('#^/blog/com\\-article/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_blog_post_comment;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_post_comment')), array (  '_controller' => 'Mv\\BlogBundle\\Controller\\DefaultController::addCommentAction',));
                    }
                    not_blog_post_comment:

                    // blog_post_comment_confirm
                    if (0 === strpos($pathinfo, '/blog/com-confirm') && preg_match('#^/blog/com\\-confirm/(?P<email>[^/]++)/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_blog_post_comment_confirm;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_post_comment_confirm')), array (  '_controller' => 'Mv\\BlogBundle\\Controller\\DefaultController::commentConfirmAction',));
                    }
                    not_blog_post_comment_confirm:

                }

            }

            if (0 === strpos($pathinfo, '/badp')) {
                // badp_home
                if (rtrim($pathinfo, '/') === '/badp') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_badp_home;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'badp_home');
                    }

                    return array (  '_controller' => 'Mv\\BlogBundle\\Controller\\AdminBlog\\SecuredController::indexAction',  '_route' => 'badp_home',);
                }
                not_badp_home:

                if (0 === strpos($pathinfo, '/badp/c')) {
                    if (0 === strpos($pathinfo, '/badp/category')) {
                        // badp_category
                        if (rtrim($pathinfo, '/') === '/badp/category') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_badp_category;
                            }

                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'badp_category');
                            }

                            return array (  '_controller' => 'Mv\\BlogBundle\\Controller\\AdminBlog\\CategoryController::indexAction',  '_route' => 'badp_category',);
                        }
                        not_badp_category:

                        // badp_category_create
                        if ($pathinfo === '/badp/category/') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_badp_category_create;
                            }

                            return array (  '_controller' => 'Mv\\BlogBundle\\Controller\\AdminBlog\\CategoryController::createAction',  '_route' => 'badp_category_create',);
                        }
                        not_badp_category_create:

                        // badp_category_new
                        if ($pathinfo === '/badp/category/new') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_badp_category_new;
                            }

                            return array (  '_controller' => 'Mv\\BlogBundle\\Controller\\AdminBlog\\CategoryController::newAction',  '_route' => 'badp_category_new',);
                        }
                        not_badp_category_new:

                        // badp_category_edit
                        if (preg_match('#^/badp/category/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_badp_category_edit;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'badp_category_edit')), array (  '_controller' => 'Mv\\BlogBundle\\Controller\\AdminBlog\\CategoryController::editAction',));
                        }
                        not_badp_category_edit:

                        // badp_category_update
                        if (preg_match('#^/badp/category/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'PUT') {
                                $allow[] = 'PUT';
                                goto not_badp_category_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'badp_category_update')), array (  '_controller' => 'Mv\\BlogBundle\\Controller\\AdminBlog\\CategoryController::updateAction',));
                        }
                        not_badp_category_update:

                        // badp_category_delete
                        if (preg_match('#^/badp/category/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'DELETE') {
                                $allow[] = 'DELETE';
                                goto not_badp_category_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'badp_category_delete')), array (  '_controller' => 'Mv\\BlogBundle\\Controller\\AdminBlog\\CategoryController::deleteAction',));
                        }
                        not_badp_category_delete:

                    }

                    if (0 === strpos($pathinfo, '/badp/comment')) {
                        // badp_comment
                        if (rtrim($pathinfo, '/') === '/badp/comment') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_badp_comment;
                            }

                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'badp_comment');
                            }

                            return array (  '_controller' => 'Mv\\BlogBundle\\Controller\\AdminBlog\\CommentController::indexAction',  '_route' => 'badp_comment',);
                        }
                        not_badp_comment:

                        // badp_comment_edit
                        if (preg_match('#^/badp/comment/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_badp_comment_edit;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'badp_comment_edit')), array (  '_controller' => 'Mv\\BlogBundle\\Controller\\AdminBlog\\CommentController::editAction',));
                        }
                        not_badp_comment_edit:

                        // badp_comment_update
                        if (preg_match('#^/badp/comment/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'PUT') {
                                $allow[] = 'PUT';
                                goto not_badp_comment_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'badp_comment_update')), array (  '_controller' => 'Mv\\BlogBundle\\Controller\\AdminBlog\\CommentController::updateAction',));
                        }
                        not_badp_comment_update:

                        // badp_comment_delete
                        if (preg_match('#^/badp/comment/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'DELETE') {
                                $allow[] = 'DELETE';
                                goto not_badp_comment_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'badp_comment_delete')), array (  '_controller' => 'Mv\\BlogBundle\\Controller\\AdminBlog\\CommentController::deleteAction',));
                        }
                        not_badp_comment_delete:

                    }

                }

                if (0 === strpos($pathinfo, '/badp/post')) {
                    // badp_post
                    if (rtrim($pathinfo, '/') === '/badp/post') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_badp_post;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'badp_post');
                        }

                        return array (  '_controller' => 'Mv\\BlogBundle\\Controller\\AdminBlog\\PostController::indexAction',  '_route' => 'badp_post',);
                    }
                    not_badp_post:

                    // badp_post_show
                    if (preg_match('#^/badp/post/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_badp_post_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'badp_post_show')), array (  '_controller' => 'Mv\\BlogBundle\\Controller\\AdminBlog\\PostController::showAction',));
                    }
                    not_badp_post_show:

                    // badp_post_create
                    if ($pathinfo === '/badp/post/') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_badp_post_create;
                        }

                        return array (  '_controller' => 'Mv\\BlogBundle\\Controller\\AdminBlog\\PostController::createAction',  '_route' => 'badp_post_create',);
                    }
                    not_badp_post_create:

                    // badp_post_new
                    if ($pathinfo === '/badp/post/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_badp_post_new;
                        }

                        return array (  '_controller' => 'Mv\\BlogBundle\\Controller\\AdminBlog\\PostController::newAction',  '_route' => 'badp_post_new',);
                    }
                    not_badp_post_new:

                    // badp_post_edit
                    if (preg_match('#^/badp/post/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_badp_post_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'badp_post_edit')), array (  '_controller' => 'Mv\\BlogBundle\\Controller\\AdminBlog\\PostController::editAction',));
                    }
                    not_badp_post_edit:

                    // badp_post_update
                    if (preg_match('#^/badp/post/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_badp_post_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'badp_post_update')), array (  '_controller' => 'Mv\\BlogBundle\\Controller\\AdminBlog\\PostController::updateAction',));
                    }
                    not_badp_post_update:

                    // badp_post_delete
                    if (preg_match('#^/badp/post/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_badp_post_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'badp_post_delete')), array (  '_controller' => 'Mv\\BlogBundle\\Controller\\AdminBlog\\PostController::deleteAction',));
                    }
                    not_badp_post_delete:

                }

            }

        }

        if (0 === strpos($pathinfo, '/forum')) {
            // forum_homepage
            if (rtrim($pathinfo, '/') === '/forum') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_forum_homepage;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'forum_homepage');
                }

                return array (  '_controller' => 'Mv\\BlogBundle\\Controller\\AdminForum\\DefaultController::homepageAction',  '_route' => 'forum_homepage',);
            }
            not_forum_homepage:

            // _badp_logout
            if ($pathinfo === '/forum/logout') {
                return array (  '_controller' => 'Mv\\BlogBundle\\Controller\\AdminBlog\\SecuredController::logoutAction',  '_route' => '_badp_logout',);
            }

            // forum_rss
            if ($pathinfo === '/forum/flux.rss') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_forum_rss;
                }

                return array (  '_controller' => 'Mv\\BlogBundle\\Controller\\AdminForum\\DefaultController::rssAction',  '_route' => 'forum_rss',);
            }
            not_forum_rss:

            // forum_category_list
            if (preg_match('#^/forum/(?P<id>\\d+)\\-(?P<slug>[a-z0-9\\-]+)/?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_forum_category_list;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'forum_category_list');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'forum_category_list')), array (  '_controller' => 'Mv\\BlogBundle\\Controller\\AdminForum\\DefaultController::categoryAction',));
            }
            not_forum_category_list:

            // forum_post_show
            if (preg_match('#^/forum/(?P<category_id>\\d+)\\-(?P<category>[a-z0-9\\-]+)/(?P<id>\\d+)\\-(?P<slug>[a-z0-9\\-]+)\\.html$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_forum_post_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'forum_post_show')), array (  '_controller' => 'Mv\\BlogBundle\\Controller\\AdminForum\\DefaultController::showArticleAction',));
            }
            not_forum_post_show:

            if (0 === strpos($pathinfo, '/forum/com-')) {
                // forum_post_comment
                if (0 === strpos($pathinfo, '/forum/com-article') && preg_match('#^/forum/com\\-article/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_forum_post_comment;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'forum_post_comment')), array (  '_controller' => 'Mv\\BlogBundle\\Controller\\AdminForum\\DefaultController::addCommentAction',));
                }
                not_forum_post_comment:

                // forum_post_comment_confirm
                if (0 === strpos($pathinfo, '/forum/com-confirm') && preg_match('#^/forum/com\\-confirm/(?P<email>[^/]++)/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_forum_post_comment_confirm;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'forum_post_comment_confirm')), array (  '_controller' => 'Mv\\BlogBundle\\Controller\\AdminForum\\DefaultController::commentConfirmAction',));
                }
                not_forum_post_comment_confirm:

            }

            if (0 === strpos($pathinfo, '/forum/e')) {
                // ef_connect
                if ($pathinfo === '/forum/efconnect') {
                    return array (  '_controller' => 'FM\\ElfinderBundle\\Controller\\ElfinderController::loadAction',  '_route' => 'ef_connect',);
                }

                // elfinder
                if ($pathinfo === '/forum/elfinder') {
                    return array (  '_controller' => 'FM\\ElfinderBundle\\Controller\\ElfinderController::showAction',  '_route' => 'elfinder',);
                }

            }

            if (0 === strpos($pathinfo, '/forum/badp')) {
                // badp_forumhome
                if (rtrim($pathinfo, '/') === '/forum/badp') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_badp_forumhome;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'badp_forumhome');
                    }

                    return array (  '_controller' => 'Mv\\BlogBundle\\Controller\\AdminForum\\SecuredController::indexAction',  '_route' => 'badp_forumhome',);
                }
                not_badp_forumhome:

                if (0 === strpos($pathinfo, '/forum/badp/c')) {
                    if (0 === strpos($pathinfo, '/forum/badp/category')) {
                        // badp_forumcategory
                        if (rtrim($pathinfo, '/') === '/forum/badp/category') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_badp_forumcategory;
                            }

                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'badp_forumcategory');
                            }

                            return array (  '_controller' => 'Mv\\BlogBundle\\Controller\\AdminForum\\CategoryController::indexAction',  '_route' => 'badp_forumcategory',);
                        }
                        not_badp_forumcategory:

                        // badp_forumcategory_create
                        if ($pathinfo === '/forum/badp/category/') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_badp_forumcategory_create;
                            }

                            return array (  '_controller' => 'Mv\\BlogBundle\\Controller\\AdminForum\\CategoryController::createAction',  '_route' => 'badp_forumcategory_create',);
                        }
                        not_badp_forumcategory_create:

                        // badp_forumcategory_new
                        if ($pathinfo === '/forum/badp/category/new') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_badp_forumcategory_new;
                            }

                            return array (  '_controller' => 'Mv\\BlogBundle\\Controller\\AdminForum\\CategoryController::newAction',  '_route' => 'badp_forumcategory_new',);
                        }
                        not_badp_forumcategory_new:

                        // badp_forumcategory_edit
                        if (preg_match('#^/forum/badp/category/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_badp_forumcategory_edit;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'badp_forumcategory_edit')), array (  '_controller' => 'Mv\\BlogBundle\\Controller\\AdminForum\\CategoryController::editAction',));
                        }
                        not_badp_forumcategory_edit:

                        // badp_forumcategory_update
                        if (preg_match('#^/forum/badp/category/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'PUT') {
                                $allow[] = 'PUT';
                                goto not_badp_forumcategory_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'badp_forumcategory_update')), array (  '_controller' => 'Mv\\BlogBundle\\Controller\\AdminForum\\CategoryController::updateAction',));
                        }
                        not_badp_forumcategory_update:

                        // badp_forumcategory_delete
                        if (preg_match('#^/forum/badp/category/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'DELETE') {
                                $allow[] = 'DELETE';
                                goto not_badp_forumcategory_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'badp_forumcategory_delete')), array (  '_controller' => 'Mv\\BlogBundle\\Controller\\AdminForum\\CategoryController::deleteAction',));
                        }
                        not_badp_forumcategory_delete:

                    }

                    if (0 === strpos($pathinfo, '/forum/badp/comment')) {
                        // badp_forumcomment
                        if (rtrim($pathinfo, '/') === '/forum/badp/comment') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_badp_forumcomment;
                            }

                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'badp_forumcomment');
                            }

                            return array (  '_controller' => 'Mv\\BlogBundle\\Controller\\AdminForum\\CommentController::indexAction',  '_route' => 'badp_forumcomment',);
                        }
                        not_badp_forumcomment:

                        // badp_forumcomment_edit
                        if (preg_match('#^/forum/badp/comment/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_badp_forumcomment_edit;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'badp_forumcomment_edit')), array (  '_controller' => 'Mv\\BlogBundle\\Controller\\AdminForum\\CommentController::editAction',));
                        }
                        not_badp_forumcomment_edit:

                        // badp_forumcomment_update
                        if (preg_match('#^/forum/badp/comment/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'PUT') {
                                $allow[] = 'PUT';
                                goto not_badp_forumcomment_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'badp_forumcomment_update')), array (  '_controller' => 'Mv\\BlogBundle\\Controller\\AdminForum\\CommentController::updateAction',));
                        }
                        not_badp_forumcomment_update:

                        // badp_forumcomment_delete
                        if (preg_match('#^/forum/badp/comment/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'DELETE') {
                                $allow[] = 'DELETE';
                                goto not_badp_forumcomment_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'badp_forumcomment_delete')), array (  '_controller' => 'Mv\\BlogBundle\\Controller\\AdminForum\\CommentController::deleteAction',));
                        }
                        not_badp_forumcomment_delete:

                    }

                }

                if (0 === strpos($pathinfo, '/forum/badp/post')) {
                    // badp_forumpost
                    if (rtrim($pathinfo, '/') === '/forum/badp/post') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_badp_forumpost;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'badp_forumpost');
                        }

                        return array (  '_controller' => 'Mv\\BlogBundle\\Controller\\AdminForum\\PostController::indexAction',  '_route' => 'badp_forumpost',);
                    }
                    not_badp_forumpost:

                    // badp_forumpost_show
                    if (preg_match('#^/forum/badp/post/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_badp_forumpost_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'badp_forumpost_show')), array (  '_controller' => 'Mv\\BlogBundle\\Controller\\AdminForum\\PostController::showAction',));
                    }
                    not_badp_forumpost_show:

                    // badp_forumpost_create
                    if ($pathinfo === '/forum/badp/post/') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_badp_forumpost_create;
                        }

                        return array (  '_controller' => 'Mv\\BlogBundle\\Controller\\AdminForum\\PostController::createAction',  '_route' => 'badp_forumpost_create',);
                    }
                    not_badp_forumpost_create:

                    // badp_forumpost_new
                    if ($pathinfo === '/forum/badp/post/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_badp_forumpost_new;
                        }

                        return array (  '_controller' => 'Mv\\BlogBundle\\Controller\\AdminForum\\PostController::newAction',  '_route' => 'badp_forumpost_new',);
                    }
                    not_badp_forumpost_new:

                    // badp_forumpost_edit
                    if (preg_match('#^/forum/badp/post/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_badp_forumpost_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'badp_forumpost_edit')), array (  '_controller' => 'Mv\\BlogBundle\\Controller\\AdminForum\\PostController::editAction',));
                    }
                    not_badp_forumpost_edit:

                    // badp_forumpost_update
                    if (preg_match('#^/forum/badp/post/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_badp_forumpost_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'badp_forumpost_update')), array (  '_controller' => 'Mv\\BlogBundle\\Controller\\AdminForum\\PostController::updateAction',));
                    }
                    not_badp_forumpost_update:

                    // badp_forumpost_delete
                    if (preg_match('#^/forum/badp/post/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_badp_forumpost_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'badp_forumpost_delete')), array (  '_controller' => 'Mv\\BlogBundle\\Controller\\AdminForum\\PostController::deleteAction',));
                    }
                    not_badp_forumpost_delete:

                }

            }

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

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        // soap_soap
        if ($pathinfo === '/soap') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\HelloServiceController::indexAction',  '_route' => 'soap_soap',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
