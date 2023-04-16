<?php

namespace App\controllers;

class Controller{
    public function view($path, $data=[]){

        extract($data);
        include_once __DIR__ . "/../../resources/views/$path.php";
    }
}