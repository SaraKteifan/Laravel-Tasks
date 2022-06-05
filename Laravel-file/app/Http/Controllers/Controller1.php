<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\candy;
use Illuminate\Support\Facades\DB;

class Controller1 extends Controller
{
    public function onlyNum($id){
        echo "id= ".$id;
    }
    public function onlyString($name){
        echo "name= ".$name;
    }

    public function navbar() {
        return view('includeYield.navbar');
    }
    public function footer() {
        return view('includeYield.footer');
    }
    public function master() {
        return view('includeYield.master');
    }
    public function candy() {
        return view('includeYield.candy');
    }
    public function about() {
        $names=['Sara Kteifan', 'Aya Al-Sawa', 'Saja Al-Ghalayini'];
        return view('includeYield.about', ['names'=>$names]);
    }
    public function contact() {
        return view('includeYield.contact');
    }
    public function log() {
        return view('includeYield.login');
    }
    public function sign() {
        return view('includeYield.signup');
    }
    public function homePage() {
        $data= DB::select('select * from candy');
        return view('candy', compact('data'));
    }
    // public function add() {
        
    //     return view('candy');
    // }
}
