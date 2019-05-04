<?php

namespace App\Controllers;

class LoadController extends Controller{

    public function loadFile($request,$response,$args){

        $bigLoader=$this->c['loader'];

        $bigLoader->loadTable('bseg','2019-10-15');

        

    }

}

?>

