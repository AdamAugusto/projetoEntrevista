<?php

namespace App\Http\Controllers;

use App\Models\Situacao;
use App\Models\Categoria;
use App\Models\Chamado;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function list(){
        $chamados = Chamado::all();
        $array=[];
        $i=0;
        foreach($chamados as $chamado){
            $situacao = Situacao::where('id', $chamado->situacao_id)->first();
            $categoria = Categoria::where('id', $chamado->categoria_id)->first();
            $array[$i]= array(
                'chamado' => $chamado,
                'categoria' => $categoria,
                'situacao' => $situacao
            );
            $i++;
        }
        return view('listaChamados', ['chamados'=> $array]);
    }

}
