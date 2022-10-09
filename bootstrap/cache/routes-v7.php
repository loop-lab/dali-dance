<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Xyb0cVUknahE1y2s',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/systems/files' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.systems.files.upload',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/systems/media' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.systems.files.media',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/systems/files/sort' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.systems.files.sort',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/systems/relation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.systems.relation',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/notifications' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.api.notifications',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'platform.login.auth',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/lock' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.login.lock',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/switch-logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'platform.switch.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::maWVwqQGCcNfUt0k',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/s(?|earch/([^/]++)(?:/(changeSearchType|compact))?(*:58)|ystems/files/(?|([^/]++)(*:89)|post/([^/]++)(*:109))|tyles(?|/(?|([^/]++)/edit(?:/(save|remove))?(*:162)|create(?:/(save|remove))?(*:195))|(?:/(0))?(*:213)))|/async/([^/]++)(?:/([^/]++)(?:/([^/]++))?)?(*:266)|/notifications(?:/([^/]++)(?:/(maskNotification|markAllAsRead|removeAll|unreadNotification))?)?(*:369)|/main(?:/(0))?(*:391)|/profile(?:/(save|changePassword))?(*:434)|/users(?|/(?|([^/]++)/edit(?:/(save|remove|loginAs))?(*:495)|create(?:/(save|remove|loginAs))?(*:536))|(?:/(asyncGetUser|saveUser|remove))?(*:581))|/roles(?|/(?|([^/]++)/edit(?:/(save|remove))?(*:635)|create(?:/(save|remove))?(*:668))|(?:/(0))?(*:686))|/customers(?|/(?|([^/]++)/edit(?:/(save|remove))?(*:744)|create(?:/(save|remove))?(*:777))|(?:/(0))?(*:795)|/([^/]++)/show(?:/(0))?(*:826))|/t(?|eachers(?|/(?|([^/]++)/edit(?:/(save|remove))?(*:886)|create(?:/(save|remove))?(*:919))|(?:/(0))?(*:937))|icket_types(?|/(?|([^/]++)/edit(?:/(save|remove))?(*:996)|create(?:/(save|remove))?(*:1029))|(?:/(0))?(*:1048)))|/lessons(?:/(0))?(*:1076)|/(.*)(*:1090))/?$}sDu',
    ),
    3 => 
    array (
      58 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.search',
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'query',
            1 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      89 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.systems.files.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      109 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.systems.files.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      162 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.styles.edit',
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'style',
            1 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      195 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.styles.create',
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      213 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.styles',
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      266 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.async',
            'method' => NULL,
            'template' => NULL,
          ),
          1 => 
          array (
            0 => 'screen',
            1 => 'method',
            2 => 'template',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      369 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.notifications',
            'id' => NULL,
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      391 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.main',
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      434 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.profile',
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      495 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.systems.users.edit',
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'user',
            1 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      536 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.systems.users.create',
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      581 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.systems.users',
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      635 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.systems.roles.edit',
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'role',
            1 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      668 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.systems.roles.create',
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      686 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.systems.roles',
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      744 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.customers.edit',
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'customer',
            1 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      777 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.customers.create',
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      795 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.customers',
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      826 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customers.show',
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'customer',
            1 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      886 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.teachers.edit',
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'teacher',
            1 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      919 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.teachers.create',
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      937 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.teachers',
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      996 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.ticket_types.edit',
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'ticket_type',
            1 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1029 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.ticket_types.create',
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1048 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.ticket_types',
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1076 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.lessons',
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1090 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.generated::U259UthmOLXBBaEN',
          ),
          1 => 
          array (
            0 => 'fallbackPlaceholder',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'generated::Xyb0cVUknahE1y2s' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'generated::Xyb0cVUknahE1y2s',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'breadcrumbs',
        ),
        'uses' => 'Orchid\\Platform\\Http\\Controllers\\IndexController@index',
        'controller' => 'Orchid\\Platform\\Http\\Controllers\\IndexController@index',
        'as' => 'platform.index',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'Tabuna\\Breadcrumbs\\BreadcrumbsMiddleware' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:338:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:119:"function (\\Tabuna\\Breadcrumbs\\Trail $trail) {
        return $trail->push(\\__(\'Home\'), \\route(\'platform.index\'));
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005490000000000000000";}";s:4:"hash";s:44:"dB6zYZSp2yNUUvQWo7AgU1jGcXixutk9w4pyoKafCYI=";}}',
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'search/{query}/{method?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'breadcrumbs',
        ),
        'uses' => 'Orchid\\Platform\\Http\\Screens\\SearchScreen@handle',
        'controller' => 'Orchid\\Platform\\Http\\Screens\\SearchScreen@handle',
        'as' => 'platform.search',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'Tabuna\\Breadcrumbs\\BreadcrumbsMiddleware' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:395:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:176:"function (\\Tabuna\\Breadcrumbs\\Trail $trail, string $query) {
        return $trail->parent(\'platform.index\')
            ->push(\\__(\'Search\'))
            ->push($query);
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000054a0000000000000000";}";s:4:"hash";s:44:"mdPakZJ8RwOqDXkwGfTQHi093ysnbwHmMxvHw2fQUvQ=";}}',
      ),
      'wheres' => 
      array (
        'method' => 'changeSearchType|compact',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.async' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'async/{screen}/{method?}/{template?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
        ),
        'uses' => 'Orchid\\Platform\\Http\\Controllers\\AsyncController@load',
        'controller' => 'Orchid\\Platform\\Http\\Controllers\\AsyncController@load',
        'as' => 'platform.async',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.systems.files.upload' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'systems/files',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
        ),
        'uses' => 'Orchid\\Platform\\Http\\Controllers\\AttachmentController@upload',
        'controller' => 'Orchid\\Platform\\Http\\Controllers\\AttachmentController@upload',
        'as' => 'platform.systems.files.upload',
        'namespace' => NULL,
        'prefix' => '/systems',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.systems.files.media' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'systems/media',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
        ),
        'uses' => 'Orchid\\Platform\\Http\\Controllers\\AttachmentController@media',
        'controller' => 'Orchid\\Platform\\Http\\Controllers\\AttachmentController@media',
        'as' => 'platform.systems.files.media',
        'namespace' => NULL,
        'prefix' => '/systems',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.systems.files.sort' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'systems/files/sort',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
        ),
        'uses' => 'Orchid\\Platform\\Http\\Controllers\\AttachmentController@sort',
        'controller' => 'Orchid\\Platform\\Http\\Controllers\\AttachmentController@sort',
        'as' => 'platform.systems.files.sort',
        'namespace' => NULL,
        'prefix' => '/systems',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.systems.files.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'systems/files/{id}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
        ),
        'uses' => 'Orchid\\Platform\\Http\\Controllers\\AttachmentController@destroy',
        'controller' => 'Orchid\\Platform\\Http\\Controllers\\AttachmentController@destroy',
        'as' => 'platform.systems.files.destroy',
        'namespace' => NULL,
        'prefix' => '/systems',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.systems.files.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'systems/files/post/{id}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
        ),
        'uses' => 'Orchid\\Platform\\Http\\Controllers\\AttachmentController@update',
        'controller' => 'Orchid\\Platform\\Http\\Controllers\\AttachmentController@update',
        'as' => 'platform.systems.files.update',
        'namespace' => NULL,
        'prefix' => '/systems',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.systems.relation' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'systems/relation',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
        ),
        'uses' => 'Orchid\\Platform\\Http\\Controllers\\RelationController@view',
        'controller' => 'Orchid\\Platform\\Http\\Controllers\\RelationController@view',
        'as' => 'platform.systems.relation',
        'namespace' => NULL,
        'prefix' => '/systems',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.notifications' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'notifications/{id?}/{method?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'breadcrumbs',
        ),
        'uses' => 'Orchid\\Platform\\Http\\Screens\\NotificationScreen@handle',
        'controller' => 'Orchid\\Platform\\Http\\Screens\\NotificationScreen@handle',
        'as' => 'platform.notifications',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'Tabuna\\Breadcrumbs\\BreadcrumbsMiddleware' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:372:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:153:"function (\\Tabuna\\Breadcrumbs\\Trail $trail) {
            return $trail->parent(\'platform.index\')
                ->push(\\__(\'Notifications\'));
        }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000054a0000000000000000";}";s:4:"hash";s:44:"uUjwvqz8O5k1HKiR1SZWYOwM0ZmirBgeNy6JyFws+gQ=";}}',
      ),
      'wheres' => 
      array (
        'method' => 'maskNotification|markAllAsRead|removeAll|unreadNotification',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.api.notifications' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/notifications',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
        ),
        'uses' => 'Orchid\\Platform\\Http\\Screens\\NotificationScreen@unreadNotification',
        'controller' => 'Orchid\\Platform\\Http\\Screens\\NotificationScreen@unreadNotification',
        'as' => 'platform.api.notifications',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.generated::U259UthmOLXBBaEN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{fallbackPlaceholder}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
        ),
        'uses' => 'Orchid\\Platform\\Http\\Controllers\\IndexController@fallback',
        'controller' => 'Orchid\\Platform\\Http\\Controllers\\IndexController@fallback',
        'as' => 'platform.generated::U259UthmOLXBBaEN',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => true,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'fallbackPlaceholder' => '.*',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Orchid\\Platform\\Http\\Controllers\\LoginController@showLoginForm',
        'controller' => 'Orchid\\Platform\\Http\\Controllers\\LoginController@showLoginForm',
        'as' => 'platform.login',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.login.auth' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'throttle:60,1',
        ),
        'uses' => '\\Orchid\\Platform\\Http\\Controllers\\LoginController@login',
        'controller' => '\\Orchid\\Platform\\Http\\Controllers\\LoginController@login',
        'as' => 'platform.login.auth',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.login.lock' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'lock',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Orchid\\Platform\\Http\\Controllers\\LoginController@resetCookieLockMe',
        'controller' => 'Orchid\\Platform\\Http\\Controllers\\LoginController@resetCookieLockMe',
        'as' => 'platform.login.lock',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'switch-logout',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Orchid\\Platform\\Http\\Controllers\\LoginController@switchLogout',
        'controller' => 'Orchid\\Platform\\Http\\Controllers\\LoginController@switchLogout',
        'as' => 'platform.',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.switch.logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'switch-logout',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Orchid\\Platform\\Http\\Controllers\\LoginController@switchLogout',
        'controller' => 'Orchid\\Platform\\Http\\Controllers\\LoginController@switchLogout',
        'as' => 'platform.switch.logout',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Orchid\\Platform\\Http\\Controllers\\LoginController@logout',
        'controller' => 'Orchid\\Platform\\Http\\Controllers\\LoginController@logout',
        'as' => 'platform.logout',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.main' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'main/{method?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
        ),
        'uses' => 'App\\Orchid\\Screens\\PlatformScreen@handle',
        'controller' => 'App\\Orchid\\Screens\\PlatformScreen@handle',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'platform.main',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'method' => '0',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.profile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'profile/{method?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'breadcrumbs',
        ),
        'uses' => 'App\\Orchid\\Screens\\User\\UserProfileScreen@handle',
        'controller' => 'App\\Orchid\\Screens\\User\\UserProfileScreen@handle',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'platform.profile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'Tabuna\\Breadcrumbs\\BreadcrumbsMiddleware' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:395:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:176:"function (\\Tabuna\\Breadcrumbs\\Trail $trail) {
        return $trail
            ->parent(\'platform.index\')
            ->push(\\__(\'Profile\'), \\route(\'platform.profile\'));
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005690000000000000000";}";s:4:"hash";s:44:"SmdIDaZhRm66jknCpk9qmi0nEwPgCuQbFdYgcpPAvrw=";}}',
      ),
      'wheres' => 
      array (
        'method' => 'save|changePassword',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.systems.users.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'users/{user}/edit/{method?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'breadcrumbs',
        ),
        'uses' => 'App\\Orchid\\Screens\\User\\UserEditScreen@handle',
        'controller' => 'App\\Orchid\\Screens\\User\\UserEditScreen@handle',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'platform.systems.users.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'Tabuna\\Breadcrumbs\\BreadcrumbsMiddleware' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:425:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:206:"function (\\Tabuna\\Breadcrumbs\\Trail $trail, $user) {
        return $trail
            ->parent(\'platform.systems.users\')
            ->push(\\__(\'User\'), \\route(\'platform.systems.users.edit\', $user));
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005740000000000000000";}";s:4:"hash";s:44:"2h+HCfy1T5ERlMf9/ipoQ9bWFA391Rqc+H5KgJUTo0Q=";}}',
      ),
      'wheres' => 
      array (
        'method' => 'save|remove|loginAs',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.systems.users.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'users/create/{method?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'breadcrumbs',
        ),
        'uses' => 'App\\Orchid\\Screens\\User\\UserEditScreen@handle',
        'controller' => 'App\\Orchid\\Screens\\User\\UserEditScreen@handle',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'platform.systems.users.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'Tabuna\\Breadcrumbs\\BreadcrumbsMiddleware' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:415:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:196:"function (\\Tabuna\\Breadcrumbs\\Trail $trail) {
        return $trail
            ->parent(\'platform.systems.users\')
            ->push(\\__(\'Create\'), \\route(\'platform.systems.users.create\'));
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005770000000000000000";}";s:4:"hash";s:44:"3OtUVAGLSwtahEVEGXiG70dSHJzPGIuq/pxbOnMiLJ0=";}}',
      ),
      'wheres' => 
      array (
        'method' => 'save|remove|loginAs',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.systems.users' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'users/{method?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'breadcrumbs',
        ),
        'uses' => 'App\\Orchid\\Screens\\User\\UserListScreen@handle',
        'controller' => 'App\\Orchid\\Screens\\User\\UserListScreen@handle',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'platform.systems.users',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'Tabuna\\Breadcrumbs\\BreadcrumbsMiddleware' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:399:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:180:"function (\\Tabuna\\Breadcrumbs\\Trail $trail) {
        return $trail
            ->parent(\'platform.index\')
            ->push(\\__(\'Users\'), \\route(\'platform.systems.users\'));
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005780000000000000000";}";s:4:"hash";s:44:"6nTGjzsJCE3shja1iXShVUaJ3Lz1hr1iQMnC0A8QeHE=";}}',
      ),
      'wheres' => 
      array (
        'method' => 'asyncGetUser|saveUser|remove',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.systems.roles.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'roles/{role}/edit/{method?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'breadcrumbs',
        ),
        'uses' => 'App\\Orchid\\Screens\\Role\\RoleEditScreen@handle',
        'controller' => 'App\\Orchid\\Screens\\Role\\RoleEditScreen@handle',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'platform.systems.roles.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'Tabuna\\Breadcrumbs\\BreadcrumbsMiddleware' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:425:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:206:"function (\\Tabuna\\Breadcrumbs\\Trail $trail, $role) {
        return $trail
            ->parent(\'platform.systems.roles\')
            ->push(\\__(\'Role\'), \\route(\'platform.systems.roles.edit\', $role));
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000057b0000000000000000";}";s:4:"hash";s:44:"8KxDMmgK2l3SMT+1ZC+hcFLZiNS4nN08X4QWu1x7dy4=";}}',
      ),
      'wheres' => 
      array (
        'method' => 'save|remove',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.systems.roles.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'roles/create/{method?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'breadcrumbs',
        ),
        'uses' => 'App\\Orchid\\Screens\\Role\\RoleEditScreen@handle',
        'controller' => 'App\\Orchid\\Screens\\Role\\RoleEditScreen@handle',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'platform.systems.roles.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'Tabuna\\Breadcrumbs\\BreadcrumbsMiddleware' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:415:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:196:"function (\\Tabuna\\Breadcrumbs\\Trail $trail) {
        return $trail
            ->parent(\'platform.systems.roles\')
            ->push(\\__(\'Create\'), \\route(\'platform.systems.roles.create\'));
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000057c0000000000000000";}";s:4:"hash";s:44:"VBTFOlrkMEtP45TIgF20s8K8NOB8uU25KqKA2KJfhz4=";}}',
      ),
      'wheres' => 
      array (
        'method' => 'save|remove',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.systems.roles' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'roles/{method?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'breadcrumbs',
        ),
        'uses' => 'App\\Orchid\\Screens\\Role\\RoleListScreen@handle',
        'controller' => 'App\\Orchid\\Screens\\Role\\RoleListScreen@handle',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'platform.systems.roles',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'Tabuna\\Breadcrumbs\\BreadcrumbsMiddleware' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:399:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:180:"function (\\Tabuna\\Breadcrumbs\\Trail $trail) {
        return $trail
            ->parent(\'platform.index\')
            ->push(\\__(\'Roles\'), \\route(\'platform.systems.roles\'));
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005660000000000000000";}";s:4:"hash";s:44:"i5bGTvGAV9p8n8AH2wlyFj28MSiM/FpFxemBBapxwsk=";}}',
      ),
      'wheres' => 
      array (
        'method' => '0',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.customers.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'customers/{customer}/edit/{method?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'breadcrumbs',
        ),
        'uses' => 'App\\Orchid\\Screens\\Customer\\CustomerEditScreen@handle',
        'controller' => 'App\\Orchid\\Screens\\Customer\\CustomerEditScreen@handle',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'platform.customers.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'Tabuna\\Breadcrumbs\\BreadcrumbsMiddleware' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:420:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:201:"function (\\Tabuna\\Breadcrumbs\\Trail $trail, $role) {
        return $trail
            ->parent(\'platform.customers\')
            ->push(\'Клиент\', \\route(\'platform.customers.edit\', $role));
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000057e0000000000000000";}";s:4:"hash";s:44:"x3+Vwo+qDKVbKjnqO97jO19L33CWmJxUt57oCvNSOcQ=";}}',
      ),
      'wheres' => 
      array (
        'method' => 'save|remove',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.customers.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'customers/create/{method?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'breadcrumbs',
        ),
        'uses' => 'App\\Orchid\\Screens\\Customer\\CustomerEditScreen@handle',
        'controller' => 'App\\Orchid\\Screens\\Customer\\CustomerEditScreen@handle',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'platform.customers.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'Tabuna\\Breadcrumbs\\BreadcrumbsMiddleware' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:407:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:188:"function (\\Tabuna\\Breadcrumbs\\Trail $trail) {
        return $trail
            ->parent(\'platform.customers\')
            ->push(\\__(\'Create\'), \\route(\'platform.customers.create\'));
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005670000000000000000";}";s:4:"hash";s:44:"w5yThzGWMudQAtWBJdKH5bJOJyQGdZzKu0Y0QDEXeBM=";}}',
      ),
      'wheres' => 
      array (
        'method' => 'save|remove',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.customers' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'customers/{method?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'breadcrumbs',
        ),
        'uses' => 'App\\Orchid\\Screens\\Customer\\CustomerListScreen@handle',
        'controller' => 'App\\Orchid\\Screens\\Customer\\CustomerListScreen@handle',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'platform.customers',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'Tabuna\\Breadcrumbs\\BreadcrumbsMiddleware' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:399:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:180:"function (\\Tabuna\\Breadcrumbs\\Trail $trail) {
        return $trail
            ->parent(\'platform.index\')
            ->push(\'Клиенты\', \\route(\'platform.customers\'));
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000057d0000000000000000";}";s:4:"hash";s:44:"CY+LCu3oxI6Hpga8eimEjPule61MuOkeuMUluF/P64M=";}}',
      ),
      'wheres' => 
      array (
        'method' => '0',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.teachers.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'teachers/{teacher}/edit/{method?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'breadcrumbs',
        ),
        'uses' => 'App\\Orchid\\Screens\\Teacher\\TeacherEditScreen@handle',
        'controller' => 'App\\Orchid\\Screens\\Teacher\\TeacherEditScreen@handle',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'platform.teachers.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'Tabuna\\Breadcrumbs\\BreadcrumbsMiddleware' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:432:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:213:"function (\\Tabuna\\Breadcrumbs\\Trail $trail, $role) {
        return $trail
            ->parent(\'platform.teachers\')
            ->push(\'Преподаватели\', \\route(\'platform.teachers.edit\', $role));
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005810000000000000000";}";s:4:"hash";s:44:"62QYA8G72lgtwM8XkFjfC3teq+yDNxVQ7bSaAATSGvI=";}}',
      ),
      'wheres' => 
      array (
        'method' => 'save|remove',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.teachers.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'teachers/create/{method?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'breadcrumbs',
        ),
        'uses' => 'App\\Orchid\\Screens\\Teacher\\TeacherEditScreen@handle',
        'controller' => 'App\\Orchid\\Screens\\Teacher\\TeacherEditScreen@handle',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'platform.teachers.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'Tabuna\\Breadcrumbs\\BreadcrumbsMiddleware' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:405:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:186:"function (\\Tabuna\\Breadcrumbs\\Trail $trail) {
        return $trail
            ->parent(\'platform.teachers\')
            ->push(\\__(\'Create\'), \\route(\'platform.teachers.create\'));
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005750000000000000000";}";s:4:"hash";s:44:"E2MA6rFrgu7JnvAqipygOgUQuGEBK08GGUbVfUiZWfA=";}}',
      ),
      'wheres' => 
      array (
        'method' => 'save|remove',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.teachers' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'teachers/{method?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'breadcrumbs',
        ),
        'uses' => 'App\\Orchid\\Screens\\Teacher\\TeacherListScreen@handle',
        'controller' => 'App\\Orchid\\Screens\\Teacher\\TeacherListScreen@handle',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'platform.teachers',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'Tabuna\\Breadcrumbs\\BreadcrumbsMiddleware' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:410:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:191:"function (\\Tabuna\\Breadcrumbs\\Trail $trail) {
        return $trail
            ->parent(\'platform.index\')
            ->push(\'Преподаватели\', \\route(\'platform.teachers\'));
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000057f0000000000000000";}";s:4:"hash";s:44:"iRCYXu3gX3c4AbKiUxkWt2d5vFlDLAiScPotXQKMY6w=";}}',
      ),
      'wheres' => 
      array (
        'method' => '0',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.styles.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'styles/{style}/edit/{method?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'breadcrumbs',
        ),
        'uses' => 'App\\Orchid\\Screens\\Style\\StyleEditScreen@handle',
        'controller' => 'App\\Orchid\\Screens\\Style\\StyleEditScreen@handle',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'platform.styles.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'Tabuna\\Breadcrumbs\\BreadcrumbsMiddleware' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:428:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:209:"function (\\Tabuna\\Breadcrumbs\\Trail $trail, $role) {
        return $trail
            ->parent(\'platform.styles\')
            ->push(\'Преподаватели\', \\route(\'platform.styles.edit\', $role));
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005840000000000000000";}";s:4:"hash";s:44:"KKOJeznaaWcvP8q2wVC8E/6s48AjGN10oMy1uc46sfc=";}}',
      ),
      'wheres' => 
      array (
        'method' => 'save|remove',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.styles.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'styles/create/{method?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'breadcrumbs',
        ),
        'uses' => 'App\\Orchid\\Screens\\Style\\StyleEditScreen@handle',
        'controller' => 'App\\Orchid\\Screens\\Style\\StyleEditScreen@handle',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'platform.styles.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'Tabuna\\Breadcrumbs\\BreadcrumbsMiddleware' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:401:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:182:"function (\\Tabuna\\Breadcrumbs\\Trail $trail) {
        return $trail
            ->parent(\'platform.styles\')
            ->push(\\__(\'Create\'), \\route(\'platform.styles.create\'));
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000057a0000000000000000";}";s:4:"hash";s:44:"qJG+8xIsppbM3Rud4W/GwluwaB0sKrzZOCzPJtPObSM=";}}',
      ),
      'wheres' => 
      array (
        'method' => 'save|remove',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.styles' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'styles/{method?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'breadcrumbs',
        ),
        'uses' => 'App\\Orchid\\Screens\\Style\\StyleListScreen@handle',
        'controller' => 'App\\Orchid\\Screens\\Style\\StyleListScreen@handle',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'platform.styles',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'Tabuna\\Breadcrumbs\\BreadcrumbsMiddleware' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:408:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:189:"function (\\Tabuna\\Breadcrumbs\\Trail $trail) {
        return $trail
            ->parent(\'platform.index\')
            ->push(\'Преподаватели\', \\route(\'platform.styles\'));
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005820000000000000000";}";s:4:"hash";s:44:"c7rnFmfJoO30n7Rl0D0wUQZ59swE7Q2mRkDSW4IPdbo=";}}',
      ),
      'wheres' => 
      array (
        'method' => '0',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.ticket_types.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'ticket_types/{ticket_type}/edit/{method?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'breadcrumbs',
        ),
        'uses' => 'App\\Orchid\\Screens\\TicketType\\TicketTypeEditScreen@handle',
        'controller' => 'App\\Orchid\\Screens\\TicketType\\TicketTypeEditScreen@handle',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'platform.ticket_types.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'Tabuna\\Breadcrumbs\\BreadcrumbsMiddleware' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:434:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:215:"function (\\Tabuna\\Breadcrumbs\\Trail $trail, $role) {
        return $trail
            ->parent(\'platform.ticket_types\')
            ->push(\'Абонементы\', \\route(\'platform.ticket_types.edit\', $role));
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005870000000000000000";}";s:4:"hash";s:44:"u2byXMYlNzRpxoKmcVbsvEnUusr94MOYnzlPrvr+Ld8=";}}',
      ),
      'wheres' => 
      array (
        'method' => 'save|remove',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.ticket_types.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'ticket_types/create/{method?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'breadcrumbs',
        ),
        'uses' => 'App\\Orchid\\Screens\\TicketType\\TicketTypeEditScreen@handle',
        'controller' => 'App\\Orchid\\Screens\\TicketType\\TicketTypeEditScreen@handle',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'platform.ticket_types.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'Tabuna\\Breadcrumbs\\BreadcrumbsMiddleware' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:413:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:194:"function (\\Tabuna\\Breadcrumbs\\Trail $trail) {
        return $trail
            ->parent(\'platform.ticket_types\')
            ->push(\\__(\'Create\'), \\route(\'platform.ticket_types.create\'));
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005800000000000000000";}";s:4:"hash";s:44:"rySV+P5x7nGfTIt5ZvcJLr3fuRLsqLE+RWqW9I2Y+NA=";}}',
      ),
      'wheres' => 
      array (
        'method' => 'save|remove',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.ticket_types' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'ticket_types/{method?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'breadcrumbs',
        ),
        'uses' => 'App\\Orchid\\Screens\\TicketType\\TicketTypeListScreen@handle',
        'controller' => 'App\\Orchid\\Screens\\TicketType\\TicketTypeListScreen@handle',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'platform.ticket_types',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'Tabuna\\Breadcrumbs\\BreadcrumbsMiddleware' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:408:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:189:"function (\\Tabuna\\Breadcrumbs\\Trail $trail) {
        return $trail
            ->parent(\'platform.index\')
            ->push(\'Абонементы\', \\route(\'platform.ticket_types\'));
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005850000000000000000";}";s:4:"hash";s:44:"NCv2u2uMQs9gM440ICmaWoHxcO9Gc8WqY5JyA+imMRk=";}}',
      ),
      'wheres' => 
      array (
        'method' => '0',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.lessons' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'lessons/{method?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'breadcrumbs',
        ),
        'uses' => 'App\\Orchid\\Screens\\Lesson\\LessonTableScreen@handle',
        'controller' => 'App\\Orchid\\Screens\\Lesson\\LessonTableScreen@handle',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'platform.lessons',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'Tabuna\\Breadcrumbs\\BreadcrumbsMiddleware' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:381:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:162:"function (\\Tabuna\\Breadcrumbs\\Trail $trail) {
    return $trail
        ->parent(\'platform.index\')
        ->push(\'Занятия\', \\route(\'platform.lessons\'));
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000058a0000000000000000";}";s:4:"hash";s:44:"xiJymAp+k4oAKdvFa7s7BDBZQ9P9zW2WoWmahe7MeCU=";}}',
      ),
      'wheres' => 
      array (
        'method' => '0',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::maWVwqQGCcNfUt0k' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:295:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005b40000000000000000";}";s:4:"hash";s:44:"CdTkww5pQSafy+dOwisCMqKNJhhcaCrO66SU/fEDfcI=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::maWVwqQGCcNfUt0k',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customers.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'customers/{customer}/show/{method?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Orchid\\Screens\\Customer\\CustomerShowScreen@handle',
        'controller' => 'App\\Orchid\\Screens\\Customer\\CustomerShowScreen@handle',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'customers.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'method' => '0',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
