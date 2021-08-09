<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productsIndex(){
        return view('products.productsIndex');
    }

    public function productsCreate(){
        return 'Aquí va el formulario para crear un nuevo producto';
    }
    public function productsStore(){

    }
    public function productsShow($product){
        return view('products.productsShow');
    }
    public function productsEdit($product){
        return "Muestra el formulario para editar el producto por su ID {$product}";
    }
    public function productsUpdate(){

    }
    public function productsDestroy(){

    }
    
}
