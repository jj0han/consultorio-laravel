@extends('template')

@section('conteudo')
<h1>Visualizar agendamento</h1>

<form method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="id" class="form-label">ID</label>
        <input readonly class="form-control" readonly type="text" name="id" value="{{$consulta->id}}">
    </div>
    <div class="mb-3">
        <label for="nome" class="form-label">Nome do paciente</label>
        <input readonly class="form-control" type="text" name="nome_paciente" value="{{$consulta->nome_paciente}}">
    </div>
    <div class="mb-3">
        <label for="cpf" class="form-label">Data</label>
        <input readonly class="form-control" type="date" name="cpf" value="{{$consulta->data}}">
    </div>
    <div class="mb-3">
        <label for="nome" class="form-label">Nome do Doutor</label>
        <input readonly class="form-control" type="text" name="nome_doutor" value="{{$consulta->nome_doutor}}">
    </div>
    <div class="mb-3">
        <label for="nome" class="form-label">Descrição</label>
        <input readonly class="form-control" type="text" name="descricao" value="{{$consulta->descricao}}">
    </div>
</form>
@endsection