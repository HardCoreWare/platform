<?php

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

$app = new \Slim\App(
    [
        'settings' => [
            'displayErrorDetails' => true,
            'responseChunkSize' => 8096
        ]
    ]
);

$container=$app->getContainer();

$container['loader']=function ($container) {

    return new App\Composites\Loader(App\Modules\BigLoader::INSTANCIATE('informe-211921'), App\Modules\FileManager::INSTANCIATE());

};

$app->get('/load/local/schema/{schema}/date/{date}', '\App\Controllers\LoadController:loadLocal');
$app->run();