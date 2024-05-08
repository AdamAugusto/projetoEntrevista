<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Chamado;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ChamadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function show()
    {
        return view('cadastroChamado', ['categorias'=>Categoria::all()]);
    }

    public function atender($id){
        $chamado = Chamado::find($id);
        $chamado->situacao_id = 2;
        $chamado->save();
        return redirect('/list');
    }

    public function finalizar($id){
        $chamado = Chamado::find($id);
        $chamado->situacao_id = 3;
        $data = Carbon::now();
        $data = $data->format('d-m-Y, H:i:s');
        $chamado->data_solucao = $data;
        $chamado->save();
        return redirect('/list');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tituloChamado' => 'required',
            'descricaoChamado' => 'required',
            'categoriaChamado' => 'required'
        ]);

        $chamado = new Chamado();
        $chamado->titulo = $request->input('tituloChamado');
        $chamado->descricao = $request->input('descricaoChamado');
        $chamado->categoria_id = $request->input('categoriaChamado');
        $chamado->situacao_id = 1;
        $data = Carbon::now();
        $data->addDays(3);
        $data = $data->format('d-m-Y, H:i:s');
        $chamado->prazo = $data;
        $chamado->save();
        return redirect('/list');
    }

    public function relatorio(){
        $chamados = Chamado::all();
        $i=0;
        $j=0;
        foreach($chamados as $chamado){
            if($chamado->data_solucao){
                $dataInicio = Carbon::parse($chamado->prazo);
                $dataFim = Carbon::parse($chamado->data_solucao);
                if($dataFim->diffInDays($dataInicio)>=0){
                    $i++;
                }else{
                    $j++; 
                }  
            }                    
        }
        return view('home', ['dentroPrazo'=> $i, 'foraPrazo'=>$j]);
    }
    public function delete($id){
        $chamado = Chamado::find($id);
        $chamado->delete();
        return redirect('/list');
    }
}
