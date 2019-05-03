<?php

namespace App\Modules;

use App\Interfaces\FileManagerInterface;

class FileManager{

    //escaneamos archivo
    public function getFiles($folder,$date){

        //obtenemos archivos crudos
        $files=scandir('../files/'.$folder);
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