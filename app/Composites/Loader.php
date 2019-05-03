<?php

namespace App\Composites;

class Loader{

    private $files;
    private $schema;
    private $location=['dataset'=>'MULTIVA','table'=>'BSEGAIO'];
    private $disposition=['create'=>'CREATE_NEVER','write'=>'WRITE_APPEND'];
    private $settings=['delimiter'=>'|','quote'=>'"','ignoreUnknowValues'=>true,'allowQuotedNewLines'=>false,'allowJaggedRows'=>false,'nullMarker'=>'\N'];
    private $file=['format'=>'CSV'];

    private $societies=['5200','5300','5500'];

    //dependencias modulares
    private $bigLoader;
    private $fileManager;

    //inyectamos dependencia de BigQuery Loader
    public function __construct( $bigLoader, $fileManager){

        $this->bigLoader=$bigLoader;
        $this->fileManager=$fileManager;

    }

    public function loadTable($type,$date){

        //obtenemos el esquema de tabla
        $this->schema=$this->fileManager->getSchema($type);
        print_r($this->schema);

        //obtenemos los archivos
        //$files=$this->fileManager->getFiles($type,$date);

    }

}


?>