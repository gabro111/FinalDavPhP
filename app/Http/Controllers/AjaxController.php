<?php

namespace App\Http\Controllers;

use App\Models\productdescription;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function index(){
        $products = productdescription::all();
        
        return view("ajaxindex")->with('products',$products);

    }


    public function create(){
        return view('ajaxcreate');
    }
    public function store(Request $request){

        $proddesc = new productdescription();
        $proddesc->name = $request->name;
        $proddesc->description = $request->description;
        //$proddesc->save();
        return view('ajaxindex');
        
    }
}
