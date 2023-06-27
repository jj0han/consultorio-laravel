@extends('template')

@section('conteudo')
<h1>Visualizar doutor</h1>
@if($doutor->figura != "")
<img style="width:350px;height:350px;object-fit:cover;border-radius:20px;border:1px solid gray;padding: 0.25rem" src="/storage/imagens/{{$doutor->figura}}">
@endif


<form method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="id" class="form-label">ID</label>
        <input readonly class="form-control" readonly type="text" name="id" value="{{$doutor->id}}">
    </div>
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input readonly class="form-control" type="text" name="nome" value="{{$doutor->nome}}">
    </div>
    <div class="mb-3">
        <label for="cpf" class="form-label">CPF</label>
        <input readonly class="form-control" type="text" name="cpf" value="{{$doutor->cpf}}">
    </div>
    <div class="mb-3">
        <label for="cpf" class="form-label">Area de Atuação</label>
        <input readonly class="form-control" type="text" name="cpf" value="{{$doutor->nome_area}}">
    </div>
</form>
@endsection