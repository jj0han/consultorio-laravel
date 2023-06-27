@extends('template')

@section('conteudo')
<div class="d-flex align-items-center gap-3">
    <h1>Agendamento Médico</h1>
    <a class="btn btn-primary" href="novo">Cadastrar Novo</a>
</div>
<table class="table">
    <thead class="thead">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome do paciente</th>
            <th scope="col">Data/Hora</th>
            <th scope="col">Doutor</th>
            <th scope="col">Funcionalidades</th>
        </tr>
    </thead>
    <tbody class="tbody">
        @foreach($consultas as $consulta)
        <tr scope="row">
            <td>{{$consulta->id}}</td>
            <td>{{$consulta->nome_paciente}}</td>
            <td>{{$consulta->data}}</td>
            <td>
                {{$consulta->nome_doutor}}
            </td>
            <td>
                <div class="btns">
                    <a href="visualizar/{{$consulta->id}}"><button class="btn btn-outline-primary">Visualizar</button></a>
                    <a href="editar/{{$consulta->id}}"><button class="btn btn-outline-success">Alterar</button></a>
                    <a href="excluir/{{$consulta->id}}"><button class="btn btn-outline-danger">Excluir</button></a>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection