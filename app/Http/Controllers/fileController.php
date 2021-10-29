<?php

namespace App\http\Controllers;

class fileController extends Controller{

    public function metadata(){
        return file('/public/js/myModel/metadata.json');
    }

    public function model(){
        return file('/public/js/myModel/model.json');
    }
}
