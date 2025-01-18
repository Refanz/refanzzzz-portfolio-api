<?php

// Define app routes

use App\Infrastructure\Controller\BlogController;
use App\Infrastructure\Controller\ProjectController;
use Slim\App;
use Slim\Routing\RouteCollectorProxy;

return function (App $app) {
    $app->group('/api', function (RouteCollectorProxy $group) {
        $group->group('/projects', function (RouteCollectorProxy $route) {
            $route->post('', [ProjectController::class, 'store']);
        });

        $group->group('/blogs', function (RouteCollectorProxy $route) {
            $route->post('', [BlogController::class, 'store']);
        });
    });
};
