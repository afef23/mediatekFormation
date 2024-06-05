<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null]],
        '/cgu' => [[['_route' => 'cgu', '_controller' => 'App\\Controller\\AccueilController::cgu'], null, null, null, false, false, null]],
        '/admin/categories' => [[['_route' => 'admin.categories', '_controller' => 'App\\Controller\\Admin\\AdminCategoriesController::index'], null, null, null, false, false, null]],
        '/admin/categorie/ajout' => [[['_route' => 'admin.categorie.ajout', '_controller' => 'App\\Controller\\Admin\\AdminCategoriesController::ajout'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin.formations', '_controller' => 'App\\Controller\\Admin\\AdminFormationController::index'], null, null, null, false, false, null]],
        '/admin/formation/ajout' => [[['_route' => 'admin.formation.ajout', '_controller' => 'App\\Controller\\Admin\\AdminFormationController::ajout'], null, null, null, false, false, null]],
        '/admin/playlists' => [[['_route' => 'admin.playlists', '_controller' => 'App\\Controller\\Admin\\AdminPlaylistsController::index'], null, null, null, false, false, null]],
        '/admin/playlist/ajout' => [[['_route' => 'admin.playlist.ajout', '_controller' => 'App\\Controller\\Admin\\AdminPlaylistsController::ajout'], null, null, null, false, false, null]],
        '/formations' => [[['_route' => 'formations', '_controller' => 'App\\Controller\\FormationsController::index'], null, null, null, false, false, null]],
        '/oauth/login' => [[['_route' => 'oauth_login', '_controller' => 'App\\Controller\\OAuthController::index'], null, null, null, false, false, null]],
        '/oauth/callback' => [[['_route' => 'oauth_check', '_controller' => 'App\\Controller\\OAuthController::connectCheckAction'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\OAuthController::logout'], null, null, null, false, false, null]],
        '/playlists' => [[['_route' => 'playlists', '_controller' => 'App\\Controller\\PlaylistsController::index'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/(?'
                    .'|categorie(?'
                        .'|s/(?'
                            .'|tri/([^/]++)/([^/]++)(*:55)'
                            .'|recherche/([^/]++)(?:/([^/]++))?(*:94)'
                        .')'
                        .'|/(?'
                            .'|suppr/([^/]++)(*:120)'
                            .'|edit/([^/]++)(*:141)'
                        .')'
                    .')'
                    .'|formation(?'
                        .'|s/(?'
                            .'|tri/([^/]++)/([^/]++)(?:/([^/]++))?(*:203)'
                            .'|recherche/([^/]++)(?:/([^/]++))?(*:243)'
                            .'|formation/([^/]++)(*:269)'
                            .'|suppr/([^/]++)(*:291)'
                        .')'
                        .'|/edit/([^/]++)(*:314)'
                    .')'
                    .'|playlist(?'
                        .'|s/(?'
                            .'|tri/([^/]++)/([^/]++)(*:360)'
                            .'|recherche/([^/]++)(?:/([^/]++))?(*:400)'
                        .')'
                        .'|/(?'
                            .'|suppr/([^/]++)(*:427)'
                            .'|edit/([^/]++)(*:448)'
                        .')'
                    .')'
                .')'
                .'|/formations/(?'
                    .'|tri/([^/]++)/([^/]++)(?:/([^/]++))?(*:509)'
                    .'|recherche/([^/]++)(?:/([^/]++))?(*:549)'
                    .'|formation/([^/]++)(*:575)'
                .')'
                .'|/playlists/(?'
                    .'|tri/([^/]++)/([^/]++)(*:619)'
                    .'|recherche/([^/]++)(?:/([^/]++))?(*:659)'
                    .'|playlist/([^/]++)(*:684)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:724)'
                    .'|wdt/([^/]++)(*:744)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:790)'
                            .'|router(*:804)'
                            .'|exception(?'
                                .'|(*:824)'
                                .'|\\.css(*:837)'
                            .')'
                        .')'
                        .'|(*:847)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        55 => [[['_route' => 'admin.categories.sort', '_controller' => 'App\\Controller\\Admin\\AdminCategoriesController::sort'], ['champ', 'ordre'], null, null, false, true, null]],
        94 => [[['_route' => 'admin.categories.findallcontain', 'table' => '', '_controller' => 'App\\Controller\\Admin\\AdminCategoriesController::findAllContain'], ['champ', 'table'], null, null, false, true, null]],
        120 => [[['_route' => 'admin.categorie.suppr', '_controller' => 'App\\Controller\\Admin\\AdminCategoriesController::suppr'], ['id'], null, null, false, true, null]],
        141 => [[['_route' => 'admin.categorie.edit', '_controller' => 'App\\Controller\\Admin\\AdminCategoriesController::edit'], ['id'], null, null, false, true, null]],
        203 => [[['_route' => 'admin.formations.sort', 'table' => '', '_controller' => 'App\\Controller\\Admin\\AdminFormationController::sort'], ['champ', 'ordre', 'table'], null, null, false, true, null]],
        243 => [[['_route' => 'admin.formations.findallcontain', 'table' => '', '_controller' => 'App\\Controller\\Admin\\AdminFormationController::findAllContain'], ['champ', 'table'], null, null, false, true, null]],
        269 => [[['_route' => 'admin.showone', '_controller' => 'App\\Controller\\Admin\\AdminFormationController::showOne'], ['id'], null, null, false, true, null]],
        291 => [[['_route' => 'admin.formation.suppr', '_controller' => 'App\\Controller\\Admin\\AdminFormationController::suppr'], ['id'], null, null, false, true, null]],
        314 => [[['_route' => 'admin.formation.edit', '_controller' => 'App\\Controller\\Admin\\AdminFormationController::edit'], ['id'], null, null, false, true, null]],
        360 => [[['_route' => 'admin.playlists.sort', '_controller' => 'App\\Controller\\Admin\\AdminPlaylistsController::sort'], ['champ', 'ordre'], null, null, false, true, null]],
        400 => [[['_route' => 'admin.playlists.findallcontain', 'table' => '', '_controller' => 'App\\Controller\\Admin\\AdminPlaylistsController::findAllContain'], ['champ', 'table'], null, null, false, true, null]],
        427 => [[['_route' => 'admin.playlist.suppr', '_controller' => 'App\\Controller\\Admin\\AdminPlaylistsController::suppr'], ['id'], null, null, false, true, null]],
        448 => [[['_route' => 'admin.playlist.edit', '_controller' => 'App\\Controller\\Admin\\AdminPlaylistsController::edit'], ['id'], null, null, false, true, null]],
        509 => [[['_route' => 'formations.sort', 'table' => '', '_controller' => 'App\\Controller\\FormationsController::sort'], ['champ', 'ordre', 'table'], null, null, false, true, null]],
        549 => [[['_route' => 'formations.findallcontain', 'table' => '', '_controller' => 'App\\Controller\\FormationsController::findAllContain'], ['champ', 'table'], null, null, false, true, null]],
        575 => [[['_route' => 'formations.showone', '_controller' => 'App\\Controller\\FormationsController::showOne'], ['id'], null, null, false, true, null]],
        619 => [[['_route' => 'playlists.sort', '_controller' => 'App\\Controller\\PlaylistsController::sort'], ['champ', 'ordre'], null, null, false, true, null]],
        659 => [[['_route' => 'playlists.findallcontain', 'table' => '', '_controller' => 'App\\Controller\\PlaylistsController::findAllContain'], ['champ', 'table'], null, null, false, true, null]],
        684 => [[['_route' => 'playlists.showone', '_controller' => 'App\\Controller\\PlaylistsController::showOne'], ['id'], null, null, false, true, null]],
        724 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        744 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        790 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        804 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        824 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        837 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        847 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
