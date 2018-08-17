<?php
namespace App\Http\Controllers;

use App\Funcionario;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Teste extends Controller{
  public function testando(){
    //$produtos = DB::select('SELECT * FROM funcionario');
    $produtos = Funcionario::find(2);
    return $produtos;
  }
}