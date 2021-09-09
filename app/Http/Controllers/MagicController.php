<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class MagicController extends Controller
{
    public function index(){
      return view('welcome');
    }

    // public function show(){
    //   $comics = config('comics'); 
    //   // $data = ['fumetti' => $comics];
    //   return view('comics', ['fumetti' => $comics]);
    // }
    public function show(){
      $comics = Comic::all(); //converte in un 
      //array di oggetti tutte le righe presenti nella tabella selezionata 
      //in questo caso la tabella comics

      return view('comics', ['fumetti' => $comics]);
    }
    public function showComic($id){
      $index = $id+1; //perchè id nel db parte da 1 mentre $id viene preso 
      //dalla chiave del foreach che parte da 0
      $comic = Comic::where('id',$index)->get();
      return view('comic' , ['roba' => $comic]);
    }
}
