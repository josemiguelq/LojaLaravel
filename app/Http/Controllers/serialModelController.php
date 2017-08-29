<?php

namespace App\Http\Controllers;

use App\serialModel;
use App\Brand;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class serialModelController extends Controller
{
    //
    public function indexAction(){
        return view('serialmodel.list');
    }
    public function newAction(){
        $brands = Brand::get();
        return view('serialmodel.formulario',['brands'=>$brands]);
    }
    public function savebrand(Request $request){
        // $brand = new serialModel();

        // $brand= $brand->create($request->all());
        // return $brand;

    }
}
