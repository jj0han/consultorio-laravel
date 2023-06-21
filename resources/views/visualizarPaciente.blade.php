@extends('template')

@section('conteudo')
<h1>Visualizar paciente</h1>
@if($paciente->figura != "")
<img style="width:350px;height:350px;object-fit:cover;border-radius:20px;border:1px solid gray;padding: 0.25rem" src="/storage/imagens/{{$paciente->figura}}">
@endif


<form method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="id" class="form-label">ID</label>
        <input readonly class="form-control" readonly type="text" name="id" value="{{$paciente->id}}">
    </div>
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input readonly class="form-control" type="text" name="nome" value="{{$paciente->nome}}">
    </div>
    <div class="mb-3">
        <label for="cpf" class="form-label">CPF</label>
        <input readonly class="form-control" type="text" name="cpf" value="{{$paciente->cpf}}">
    </div>
    <div class="mb-3">
        <label for="data_nascimento" class="form-label">Data de Nascimento</label>
        <input readonly class="form-control" type="date" name="data_nascimento" value="{{$paciente->data_nascimento}}">
    </div>
</form>
@endsection