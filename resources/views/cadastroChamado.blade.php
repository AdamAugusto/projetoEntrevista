@extends('layouts.app')

@section('titulo', 'cadastro item')

@section('conteudo')
    <form class="ms-3 me-3 mt-5" action="/chamado/store" method="POST">
        @csrf
        @if($errors->any())
                <div>
                    @foreach($errors->all() as $error)
                            <span>{{$error}}</span>
                            <br>
                     @endforeach
                </div>
         @endif
        <div class="form-floating mb-2">
            <input name="tituloChamado" type="text" class="form-control" id="floatingTitulo" placeholder="Título" >
            <label for="floatingTitulo" class="form-label ms-1">Titulo do Chamado</label>
        </div>
        <div class=" mb-2">
            <label for="validationTextarea" class="form-label ms-1">Descrição do chamado</label>
            <textarea name="descricaoChamado" class="form-control" id="validationTextarea" placeholder=""></textarea>
            <div class="invalid-feedback">
                Please enter a message in the textarea.
            </div>
        </div>
        <div class="mb-2">
            <select name="categoriaChamado" class="form-select"  aria-label="select example">
            <option value="">Categoria</option>
            @if(sizeof($categorias)==0)
                <option value="">Cadastre uma Categoria para Continuar</option>
            @else
                @foreach ($categorias as $categoria)
                    <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
                @endforeach
            @endif
            </select>
            <div class="invalid-feedback">Example invalid select feedback</div>
        </div>
        <div class="d-grid gap-2 justify-content-center mx-auto">
            <button class="btn btn-primary" style="min-width: 300px;" type="submit" >Cadastrar</button>
        </div>
    </form>
@endsection