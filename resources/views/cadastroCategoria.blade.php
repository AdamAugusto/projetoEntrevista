@extends('layouts.app')

@section('titulo', 'cadastro item')

@section('conteudo')
    <form class="ms-3 me-3 mt-5" action="/categoria/store" method="POST">
        @csrf
        @if($errors->any())
                <div>
                    @foreach($errors->all() as $error)
                            <span>{{$error}}</span>
                            <br>
                     @endforeach
                </div>
         @endif
         <div class="text-center mb-2">
            Cadastrar Categoria
        </div>
        <div class="form-floating mb-2">
            <input name="nomeCategoria" type="text" class="form-control" id="floatingTitulo" placeholder="Categoria" >
            <label for="floatingTitulo" class="form-label ms-1">Categoria</label>
        </div>
        <div class="d-grid gap-2 justify-content-center mx-auto">
            <button class="btn btn-primary" style="min-width: 300px;" type="submit" >Cadastrar</button>
        </div>
    </form>
@endsection