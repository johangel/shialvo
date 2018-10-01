<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use Illuminate\Support\Facades\Input;

class Excelcontroller extends Controller
{
    public function importProducts(){
      ini_set('memory_limit', '256M');
      $file = Input::file('file');
      $date = date('d_m_Y_H_i_s');
      $file_name = $date.'_'.$file->getClientOriginalName();

      $file->move('files', $file_name);
      $results = Excel::load('files/'. $file_name, function($reader){
        $reader->all();
      })->get();
      $finalArray = [];

      // for ($i = 0; $i <= count($results); $i++) {
      //   array_push($finalArray, $results[$i]);
      // }

      return redirect()->route('products.administrate')->with('info', 'Se agregaron '. count($results) .' productos nuevos y se reemplazaron los anteriores en la base de datos');

    }
}
