<?php

// Define app routes

use App\Infrastructure\Controller\ProjectController;
use Slim\App;

return function (App $app) {
    $app->post('/api/projects', [ProjectController::class, 'store']);

//    $app->group('/api', function (RouteCollectorProxy $group) {
//        $group->group('/projects', function (RouteCollectorProxy $group) {
//            $group->post('/add-project', [ProjectController::class, 'store']);
//        });
//    });
};
