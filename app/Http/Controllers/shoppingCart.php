<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cookie;
use Response;

class shoppingCart extends Controller
{
  public function store(Request $request){


    $allItemInShopChart = json_decode(Cookie::get('nombre'));

    if(!isset($allItemInShopChart)){
      $allItemInShopChart = [];
    }

    $item = [
      'itemId' => $request->itemId,
      'itemAmount' => $request->itemAmount,
      'itemAttr' => $request->itemAttr,
      'unitPrice' => $request->unitPrice,
      'mayorPrice' => $request->mayorPrice,
    ];
    //
    array_push($allItemInShopChart, $item);

    return response('grabando cookie')->cookie('nombre', json_encode($allItemInShopChart), 60);

  }
}
