<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\http\Controllers\Service\MainService;

class MainController extends Controller
{
    public function getProduct(){
        return MainService::getAllProduct();
    }
    public function  addProduct(Request $request){
        return MainService::addProduct($request);
        
    }
    public function updateProduct(Request $request) {
        return MainService::updateProduct($request);
        
    }
    public function deleteProduct(Request $request) {
        return MainService::deleteProduct($request);
        
    }

}
