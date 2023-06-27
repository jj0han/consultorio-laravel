@extends('template')

@section('conteudo')
<div class="d-flex align-items-center gap-3">
    <h1>Área de atuação</h1>
    <a class="btn btn-primary" href="novo">Cadastrar Novo</a>
</div>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Funcionalidades</th>
        </tr>
    </thead>
    <tbody>
        @foreach($areas as $area)
        <tr scope="row">
            <td>{{$area->id}}</td>
            <td>{{$area->nome}}</td>
            <td>
                <div class="btns">
                    <a href='editar/{{$area->id}}'><button class="btn btn-outline-success">Alterar</button></a>
                    <a href='excluir/{{$area->id}}'><button class="btn btn-outline-danger">Excluir</button></a>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection