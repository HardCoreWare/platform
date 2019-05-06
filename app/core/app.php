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

//root
$app->get('/', function (Request $request, Response $response, array $args) {

    $response->getBody()->write("plataforma GCP");
    return $response;

});

//rutas de carga via bigquery
//requiere BigLoader
//requiere FileManager
//archivos esquema json
//pools de tablas .csv
$app->get('/load/local/schema/{schema}/date/{date}', '\App\Controllers\LoadController:loadLocal');
$app->run();