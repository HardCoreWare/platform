<?php

namespace App\Modules;

use App\Interfaces\FinderInterface;

class Finder implements FinderInterface{

    public function getSettings($base){

        $jsonUris=file_get_contents('../app/files/urls.json');
        $uris=json_decode($jsonUris,true);
        $settings=$uris[$base]['settings'];

        return $settings;

    }
    
}

?>