@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')
    <h1>Planos <a href="{{ route('plans.create') }}" class="btn btn-green">Criar</a></h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('plans.store')}}" method="post" class="form-horizontal">
            @csrf
            <div class="form-group">
                <label>Nome do Plano:</label>
                <input type="text" class="form-control" name="name" placeholder="Nome">
            </div>
            <div class="form-group">
                <label>Preco do Plano:</label>
                <input type="number" class="form-control" name="price" placeholder="Preco">
            </div>
            <div class="form-group">
                <label>Descricao do Plano:</label>
                <input type="text" class="form-control" name="description" placeholder="Descricao">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-green">Cadastrar</button>
            </div>
        </form>
    </div>
</div>
@stop
