@extends('template')

@section('conteudo')
<div class="d-flex align-items-center gap-3">
    <h1>Pacientes</h1>
    <a class="btn btn-primary" href="novo">Cadastrar Novo</a>
</div>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Foto</th>
            <th scope="col">Nome</th>
            <th scope="col">CPF</th>
            <th scope="col">Data de Nascimento</th>
            <th scope="col">Funcionalidades</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pacientes as $paciente)
        <tr scope="row">
            <td>{{$paciente->id}}</td>
            <td>
                @if($paciente->figura != "")
                <img style="width:50px;height:50px;object-fit:cover" src="/storage/imagens/{{$paciente->figura}}">
                @endif
            </td>
            <td>{{$paciente->nome}}</td>
            <td>
                {{$paciente->cpf}}
            </td>
            <td>
                {{$paciente->data_nacimento}}
            </td>
            <td>
                <div class="btns">
                    <a href='visualizar/{{$paciente->id}}'><button class="btn btn-outline-primary">Visualizar</button></a>
                    <a href='editar/{{$paciente->id}}'><button class="btn btn-outline-success">Alterar</button></a>
                    <a href='excluir/{{$paciente->id}}'><button class="btn btn-outline-danger">Excluir</button></a>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection