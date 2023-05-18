@extends('template')

@section('conteudo')
<div class="d-flex align-items-center gap-3">
    <h1>Doutores</h1>
    <a class="btn btn-primary" href="">Cadastrar Novo</a>
</div>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">CPF</th>
            <th scope="col">Área de atuação</th>
            <th scope="col">Funcionalidades</th>
        </tr>
    </thead>
    <tbody>
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