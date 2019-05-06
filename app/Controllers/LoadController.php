<?php

namespace App\Controllers;

class LoadController extends Controller{

    public function loadLocal($request,$response,$args){

        $schema = $args['schema'];
        $date = $args['date'];
        $bigLoader=$this->c['loader'];
        $bigLoader->loadTable($schema,$date);
        $response->getBody()->write(json_encode(["status"=>"success"]));

    }

}

?>

