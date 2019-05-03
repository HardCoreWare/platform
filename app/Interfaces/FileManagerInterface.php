<?php

namespace App\Interfaces;

interface FileManagerInterface{

    public function getSchema($schema);
    public function getFiles($folder,$date);
    
}

?>