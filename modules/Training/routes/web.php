<?php

use Modules\Training\Controllers\TrainingController;

$router->group(
    [
        'prefix' => config('modules.training.route.prefix'),
        'as' => 'modules::',
        'middleware' => config('modules.training.route.middleware'),
    ],
    function ($router) {
        $router->resource('training', TrainingController::class);
    }
);
