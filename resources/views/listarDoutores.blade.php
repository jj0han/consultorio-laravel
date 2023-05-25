@extends('template')

@section('conteudo')
<div class="d-flex align-items-center gap-3">
    <h1>Doutores</h1>
    <a class="btn btn-primary" href="novo">Cadastrar Novo</a>
</div>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Foto</th>
            <th scope="col">Nome</th>
            <th scope="col">CPF</th>
            <th scope="col">Funcionalidades</th>
        </tr>
    </thead>
    <tbody>
        @foreach($doutores as $doutor)
        <tr scope="row">
            <td>{{$doutor->id}}</td>
            <td>
                @if($doutor->figura != "")
                <img style="width:50px;height:50px;object-fit:cover" src="/storage/imagens/{{$doutor->figura}}">
                @endif
            </td>
            <td>{{$doutor->nome}}</td>
            <td>
            {{$doutor->cpf}}
            </td>
            <td>
                <div class="btns">
                    <a href='visualizar/{{$doutor->id}}'><button class="btn btn-outline-primary">Visualizar</button></a>
                    <a href='editar/{{$doutor->id}}'><button class="btn btn-outline-success">Alterar</button></a>
                    <a href='excluir/{{$doutor->id}}'><button class="btn btn-outline-danger">Excluir</button></a>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection