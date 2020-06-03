<?php

use Modules\Reward\Controllers\RewardController;

$router->group(
    [
        'prefix' => config('modules.reward.route.prefix'),
        'as' => 'modules::',
        'middleware' => config('modules.reward.route.middleware'),
    ],
    function ($router) {
        $router->resource('reward', RewardController::class);
    }
);
