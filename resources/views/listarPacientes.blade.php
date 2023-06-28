@extends('template')

@section('conteudo')
<div class="d-flex align-items-center gap-3">
    <h1>Pacientes</h1>
    <a class="btn btn-primary" href="novo">Cadastrar Novo</a>
</div>
@if (session('error'))
<div class="alert alert-danger d-flex">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
    </svg>
    <p class="m-0">{{session('error')}}</p>
</div>
@endif
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
                {{$paciente->data_nascimento}}
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