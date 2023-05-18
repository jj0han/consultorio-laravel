@extends('template')

@section('conteudo')
<div class="d-flex align-items-center gap-3">
    <h1>Consultas</h1>
    <a class="btn btn-primary" href="">Cadastrar Novo</a>
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
        <tr scope="row">
            <td></td>
            <td></td>
            <td>
                <br>
            </td>
            <td></td>
            <td>
                <div class="btns">
                    <a href=""><button class="btn btn-outline-primary">Visualizar</button></a>
                    <a href=""><button class="btn btn-outline-success">Alterar</button></a>
                    <a href=""><button class="btn btn-outline-danger">Excluir</button></a>
                </div>
            </td>
        </tr>
    </tbody>
</table>
@endsection