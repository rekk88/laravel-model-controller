<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MagicController extends Controller
{
    public function index(){
      return view('welcome');
    }

    public function show(){
      $comics = config('comics');
      // $data = ['fumetti' => $comics];
      return view('comics', ['fumetti' => $comics]);
    }
}
