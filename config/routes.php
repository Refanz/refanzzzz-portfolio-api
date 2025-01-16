<?php

// Define app routes

use App\Action\Home\HomeAction;
use App\Action\Home\PingAction;
use Slim\App;

return function (App $app) {
    $app->get('/', HomeAction::class)->setName('home');
    $app->get('/ping', PingAction::class);
};
