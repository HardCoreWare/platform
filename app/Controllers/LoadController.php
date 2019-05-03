<?php

namespace App\Controllers;

class LoadController extends Controller{

    public function loadFile(){

        $bigLoader=$this->c['loader'];

        $bigLoader->loadTable('bseg','2019-1-15');

        

    }

}

?>

