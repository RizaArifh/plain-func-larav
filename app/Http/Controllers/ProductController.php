<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProducts(){
     $products=[
         ["name"=>"phone"],
         ["name"=>"laptop"],
         ["name"=>"tablet"],
         ["name"=>"watch"],
         ["name"=>"tv"],
         ["name"=>"freeze"],
     ];
     Product::insert($products);
     return "product has been inserted successfully";
    }

    public function search(){
        return view('search');
    }
    public function autocomplete(Request $request){
        $data=Product::select('name')->where("name","like","%{$request->terms}%")->get();
        return response()->json($data);

    }
}
