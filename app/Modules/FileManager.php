<?php

namespace App\Modules;

use App\Interfaces\FileManagerInterface;

class FileManager{

    private static $INSTANCE;

    //funcion estatica de istancia
    public static function INSTANCIATE(){

        if (!self::$INSTANCE instanceof self){

        self::$INSTANCE = new self();

        }

        return self::$INSTANCE;
        
    }

    //constructor privado
    private function __construct(){



    }

    //escaneamos archivo
    public function getFiles($folder,$date){

        //obtenemos archivos crudos
        $files=scandir('../files/schemas/'.$folder);
        $filesNames=[];

        foreach ($files as $file) {

            $fileComponents=explode(".",$file);
            $extension=$fileComponents[count($fileComponents)-1];
            $name=$fileComponents[0];

            if($extension==='csv'){

                $files1[]=$file;

            }
            
        }

        return $files1;

    }

    //obtenemos esquema
    public function getSchema($schemaFile){

        $jsonFile=file_get_contents('../schema/'.$schemaFile.".json");
        $schema=json_decode($jsonFile,true);
        return $schema;

    }
    
}

?>