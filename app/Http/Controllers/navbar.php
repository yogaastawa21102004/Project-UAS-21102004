<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Uas;

class navbar extends Controller
{
     function home(){
      $data = Uas::all();
      return view('home')->with([
         'data' => $data
     ]);
     }

     function daftar(){
      $data = Uas::komponens();
      return view('daftar')->with([
         'data' => $data
     ]);
     }
     

     function utama(){
      return view('/utama');
     }

     function code(){
      return view('/code');
     }

     function alat(){
        $data = Uas::komponens();
        return view('alat')->with([
           'data' => $data
]);
     }
}
