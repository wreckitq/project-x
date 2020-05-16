<?php

return [
    'route' => [
        'enabled' => true,
        'middleware' => ['web', 'auth'],
        'prefix' => 'modules',
    ],
    'view' => [
        'layout' => 'laravolt::layouts.app',
    ],
    'menu' => [
        'enabled' => true,
    ],
    'permission' => [\Laravolt\Platform\Enums\Permission::MANAGE_MODULES],
];
