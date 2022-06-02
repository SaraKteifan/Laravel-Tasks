<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller1 extends Controller
{
    public function onlyNum($id){
        echo "id= ".$id;
    }
    public function onlyString($name){
        echo "name= ".$name;
    }
}
