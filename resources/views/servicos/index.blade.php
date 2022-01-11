
@extends('adminlte::page')

@section('title', 'Lista de Serviços')

@section('content_header')
    <h1>Lista de Serviços</h1>
@stop

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Ações</th>

        </tr>
        </thead>
        <tbody>
       @forelse($servicos as $servico)
           <tr>
               <th>{{$servico->id}}</th>
               <td>{{$servico->nome}}</td>
               <td><a class="btn btn-primary" href="{{ route('servicos.edit', $servico) }}">Atualizar</a></td>
           </tr>
       @empty
        <tr>
            <th></th>
            <th>Nenhum registro foi encontrado</th>
        </tr>
       @endforelse

        </tbody>
    </table>

    <div class="d-flex justify-content-center">
        {{$servicos->links()}}
    </div>
    <div class="float-right">
        <a href="{{ route('servicos.create') }}" class="btn btn-success">Novo Serviço</a>
    </div>
@stop
