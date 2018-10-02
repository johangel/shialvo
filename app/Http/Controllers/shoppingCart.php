<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cookie;
use Response;

class shoppingCart extends Controller
{

  public function store(Request $request){


    $allItemInShopChart = json_decode(Cookie::get('itemsShopCart'));
    if(!isset($allItemInShopChart)){
      $allItemInShopChart = [];
    }

    $item = [
      'itemId'     => $request->itemId,
      'itemAmount' => $request->itemAmount,
      'itemAttr'   => $request->itemAttr,
      'unitPrice'  => $request->unitPrice,
      'mayorPrice' => $request->mayorPrice,
      'itemName'   => $request->itemName,
    ];
    //
    array_push($allItemInShopChart, $item);

    return response('grabando cookie')->cookie('itemsShopCart', json_encode($allItemInShopChart), 60);

  }

  public function index(Request $request){

    $items = json_decode($request->cookie('itemsShopCart'));
    // dd($items);
    return view('Products.Partials.shopCart')->with('items', $items);

  }
}
