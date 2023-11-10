<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainService extends Controller
{
    public static function getAllProduct(){
        return Product :: all();
    }

    public static function addProduct (Request $request){
    $product = new Product();
    $product ->product_name = $request ->name;
    $product-> product_supply =$request ->spply;
    $product ->order=$request->order;
    
    $product->save();
  
    return Product::all();


}
 
    public static function updateProduct (Request $request){
        $product = Product::find($request->id);
        $product ->product_name = $request ->name;
        $product-> product_supply =$request ->spply;
        $product ->order=$request->order;
        
        $product->save();
      
        return Product::all();
     
} 
     public static function deleteProduct (Request $request){
     $product = Product::find($request->id);
     $product ->delete();

     return Product::all();

}
}
