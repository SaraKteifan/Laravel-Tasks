<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\candy;
use Illuminate\Support\Facades\DB;
use App\Models\father;


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
    public function add() {
        return view('add');
    }
    public function insert(Request $request){
        $file= $request->file('candyImage');
        $filename=$file->getClientOriginalName();
        $file-> move(public_path('Images'), $filename);
        $file_store= $filename;
        // echo $file_store;
        // $newCandy= new candy();
        $candy_name=request('candyName');
        $candy_price=request('candyPrice');
        $candy_img=$file_store;
        // $newCandy->save();
        DB::insert('insert into candy (candy_name, candy_price, candy_img) values (?, ?, ?)', [$candy_name, $candy_price, $candy_img]);
        return redirect('candy');
    }
    public function delete($id){
        DB::delete('delete from candy where item_id='.$id.'');
        return redirect('candy');
    }
    public function show($id) {
        $info = DB::select('select * from candy where item_id = ?',[$id]);
        return view('update',['info'=>$info]);
    }
    
    public function edit(Request $request,$id) {
        $info = DB::select('select * from candy where item_id = ?',[$id]);
        $candy_name = $request->input('candyName');
        $candy_price = $request->input('candyPrice');
        if($request->file('candyImage')){
            $file= $request->file('candyImage');
            $filename=$file->getClientOriginalName();
            $file-> move(public_path('Images'), $filename);
            $candy_img= $filename;
        }else{
            $candy_img= $info[0]->candy_img;
        }
    
        DB::update('update candy set candy_name = ?,candy_price=?,candy_img=? where item_id = ?',[$candy_name,$candy_price,$candy_img,$id]);
        return redirect('candy');
        }
}
