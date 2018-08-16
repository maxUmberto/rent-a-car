<?php
namespace App\Http\Controllers;

class Teste extends Controller{
  public function olaMundo(){
    return view('teste')->with('texto', 'Olá mundo');
  }
}