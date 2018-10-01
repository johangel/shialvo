<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\ProductDescription;

class ProductController extends Controller
{
    function show($id){

      $product = Product::find($id);

      $product_Description = DB::table('product_descriptions')->where('id_product',$product->id)->first();

      $data = [
        'product' => $product,
        'product_Description' => [
          'description' => $product_Description->description,
          'picture'     => $product_Description->picture,
          'title'       => $product_Description->title,
          'id'          => $product_Description->id,
        ],
      ];

      return $data;
    }

  function Administrate(){
    $data = [
      'products' => Product::all(),
      'category' => 'General'
    ];

    return view('Products.Partials.administrate')->with('data', $data);
  }
}
