<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/book' => [[['_route' => 'app_book_index', '_controller' => 'App\\Controller\\BookController::index'], null, ['GET' => 0], null, true, false, null]],
        '/book/new' => [[['_route' => 'app_book_new', '_controller' => 'App\\Controller\\BookController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/calendar' => [[['_route' => 'app_calendar_index', '_controller' => 'App\\Controller\\CalendarController::index'], null, ['GET' => 0], null, true, false, null]],
        '/calendar/new' => [[['_route' => 'app_calendar_new', '_controller' => 'App\\Controller\\CalendarController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/conseils' => [[['_route' => 'app_conseils', '_controller' => 'App\\Controller\\ConseilsController::index'], null, null, null, false, false, null]],
        '/contacts' => [[['_route' => 'app_contacts', '_controller' => 'App\\Controller\\ContactsController::index'], null, null, null, false, false, null]],
        '/data' => [[['_route' => 'app_data_roles', '_controller' => 'App\\Controller\\DataRolesController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/library' => [[['_route' => 'app_library', '_controller' => 'App\\Controller\\LibraryController::index'], null, null, null, false, false, null]],
        '/meeting' => [[['_route' => 'app_meeting', '_controller' => 'App\\Controller\\MeetingController::index'], null, null, null, false, false, null]],
        '/newsletters' => [[['_route' => 'newslettershomeNewsletters', '_controller' => 'App\\Controller\\NewslettersController::index'], null, null, null, true, false, null]],
        '/reading/tips' => [[['_route' => 'app_reading_tips', '_controller' => 'App\\Controller\\ReadingTipsController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/book/([^/]++)(?'
                    .'|(*:24)'
                    .'|/edit(*:36)'
                    .'|(*:43)'
                .')'
                .'|/calendar/([^/]++)(?'
                    .'|(*:72)'
                    .'|/edit(*:84)'
                    .'|(*:91)'
                .')'
                .'|/([^/]++)/details(*:116)'
                .'|/newsletters/confirm/([^/]++)/([^/]++)(*:162)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:201)'
                    .'|wdt/([^/]++)(*:221)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:267)'
                            .'|router(*:281)'
                            .'|exception(?'
                                .'|(*:301)'
                                .'|\\.css(*:314)'
                            .')'
                        .')'
                        .'|(*:324)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => 'app_book_show', '_controller' => 'App\\Controller\\BookController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        36 => [[['_route' => 'app_book_edit', '_controller' => 'App\\Controller\\BookController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        43 => [[['_route' => 'app_book_delete', '_controller' => 'App\\Controller\\BookController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        72 => [[['_route' => 'app_calendar_show', '_controller' => 'App\\Controller\\CalendarController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        84 => [[['_route' => 'app_calendar_edit', '_controller' => 'App\\Controller\\CalendarController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        91 => [[['_route' => 'app_calendar_delete', '_controller' => 'App\\Controller\\CalendarController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        116 => [[['_route' => 'app_details_book', '_controller' => 'App\\Controller\\DetailsBookController::showBook'], ['id'], ['GET' => 0], null, false, false, null]],
        162 => [[['_route' => 'newsletterscomfirm', '_controller' => 'App\\Controller\\NewslettersController::confirm'], ['id', 'token'], null, null, false, true, null]],
        201 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        221 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        267 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        281 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        301 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        314 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        324 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
