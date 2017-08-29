<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class BrandController extends Controller
{
    //
    public function indexAction(){
        $brands = Brand::get();
        return view('brand.list',['brands'=>$brands]);
    }
    public function apiIndexAction(){
        $brands = Brand::get();
        return $brands;
    }
    public function newAction(){
        return view('brand.formulario');
    }
    public function saveAction(Request $request){
        $brand = new Brand();
        \Session::flash('mensagem_sucesso', 'Sucesso');
        $brand= $brand->create($request->all());
        // return $brand;
        return Redirect::to('brand/new');
    }
    public function editAction(Request $request){
        $brand = new Brand();

        $brand= $brand->create($request->all());
        return $brand;
    }
}
