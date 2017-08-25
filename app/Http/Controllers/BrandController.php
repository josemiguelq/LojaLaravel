<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandController extends Controller
{
    //
    public function index(){
        return view('brand.list');
    }
    public function newbrand(){
        return view('brand.formulario');
    }
    public function savebrand(Request $request){
        var_dump($request);
    }
}
