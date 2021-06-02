@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')
    <h1>Planos <a href="{{ route('plans.create') }}" class="btn btn-green">Criar</a></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">

        </div>
        <div class="card-body">
            <table-condensed>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Preco</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($plans as $plan)
                        <tr>
                            <td>
                                {{ $plan->name}}
                            </td>
                            <td>
                                {{ $plan->price}}
                            </td>
                            <td>
                                <a href="" class="btn btn-warning">ver</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table-condensed>
        </div>
        <div class="card-footer">
            {!! $plans->links() !!}
        </div>
    </div>
@stop

