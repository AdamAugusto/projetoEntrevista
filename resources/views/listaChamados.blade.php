@extends('layouts.app')

@section('titulo', 'lista pedidos')

@section('conteudo')
        <div class="row ms-3">
            <div class="col mb-2" style="padding-left: 0;">
                <img src="../imagens/carrinho.png" class="" alt="..."  height="30" width="30">
                Pedidos
            </div>
        </div>
        <div class="row ms-3 me-3 d-flex flex-fill">
            @if(sizeof($chamados)==0)
                <div class="text-center">Nenhum chamado cadastrado ainda</div>
            @else
                <div class="col" style="background-color: lightgray; padding:10px">
                        @foreach ($chamados as $chamado)
                                <div class="list-group d-flex flex-sm-fill align-items-center " >
                                    <ul class="list-group list-group-horizontal-sm">
                                        <li class="list-group-item align-middle" style="width: 260px;">
                                            <div class="fw-bold">Título Chamado</div>
                                                {{$chamado['chamado']->titulo}}
                                        </li>
                                        <li class="list-group-item" style="width: 260px;">
                                            <div class="ms-2 me-auto">
                                            <div class="fw-bold">Categoria</div>
                                            {{$chamado['categoria']->nome}}
                                            </div>
                                        </li>
                                        <li class="list-group-item" style="width: 260px;">
                                            <div class="ms-2 me-auto">
                                                <div class="fw-bold">Prazo</div>
                                                   {{$chamado['chamado']->prazo}}
                                            </div>
                                        </li>
                                        <li class="list-group-item" style="width: 260px;">
                                            <div class="ms-2 me-auto">
                                                <div class="fw-bold">Descricao</div>
                                                {{$chamado['chamado']->descricao}}
                                            </div>
                                        </li>
                                        <li class="list-group-item" style="width: 260px;">
                                            <div class="ms-2 me-auto">
                                                <div class="fw-bold">Situação</div>
                                                {{$chamado['situacao']->nome}}
                                            </div>
                                        </li>
                                        @switch($chamado['situacao']->nome)
                                            @case('Novo')
                                                <li class="list-group-item d-flex justify-content-center" style="width: 90px; ">
                                                    <form action='/chamado/atender/{{$chamado['chamado']->id}}' method='POST'>
                                                        @csrf
                                                        <button 
                                                        type="submit" class="btn btn-outline d-flex flex-sm-fill justify-content-center" 
                                                        style="background-color:white; border-color:orange; color:orange; width: 80px;">
                                                            Atender Chamado
                                                        </button>
                                                    </form>
                                                </li>
                                                @break
                                            @case('Pendente')
                                                <li class="list-group-item d-flex justify-content-center" style="width: 90px; ">
                                                    <form action='/chamado/finalizar/{{$chamado['chamado']->id}}' method='POST'>
                                                        @csrf
                                                        <button 
                                                        type="submit" class="btn btn-outline d-flex flex-sm-fill justify-content-center" 
                                                        style="background-color:white; border-color:orange; color:orange; width: 80px;">
                                                            Finalizar Chamado
                                                        </button>
                                                    </form>
                                                </li>
                                                @break
                                            @case('Resolvido')
                                                <li class="list-group-item d-flex justify-content-center" style="width: 90px; ">
                                                    <button 
                                                    type="submit" class="btn btn-outline d-flex flex-sm-fill justify-content-center" 
                                                    style="background-color:white; border-color:green; color:green; width: 80px;" disabled>
                                                        Finalizado
                                                    </button>
                                                </li>
                                                @break
                                            @default
                                                @break   
                                        @endswitch
                                        <li class="list-group-item d-flex justify-content-center" style="width: 40px; ">
                                            <form action='/chamado/delete/{{$chamado['chamado']->id}}' method='POST'>
                                                @csrf
                                                <button 
                                                type="submit" class="btn btn-outline d-flex flex-sm-fill justify-content-center align-center" 
                                                style="background-color:white; border-color:red; color:red; width: 20px; height: 46px">
                                                    x
                                                </button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                        @endforeach
                </div>
            @endif
        </div>
@endsection