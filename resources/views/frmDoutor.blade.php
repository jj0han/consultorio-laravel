@extends('template')

@section('conteudo')
<h1>Cadastro de doutor</h1>
@if($doutor->figura != "")
<img style="width:350px;height:350px;object-fit:cover;border-radius:20px;border:1px solid gray;padding: 0.25rem" src="/storage/imagens/{{$doutor->figura}}">
@endif

<form action="{{url('doutor/salvar')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="d-flex gap-4">
        <div class="mb-3">
            <label for="id" class="form-label">ID</label>
            <input readonly class="form-control" readonly type="text" name="id" value="{{$doutor->id}}">
        </div>
        <div class="mb-3 flex-grow-1">
            <label for="nome" class="form-label">Nome</label>
            <input class="form-control" type="text" name="nome" value="{{$doutor->nome}}">
        </div>
    </div>
    <div class="mb-3">
        <label for="cpf" class="form-label">CPF</label>
        <input class="form-control" type="text" name="cpf" value="{{$doutor->cpf}}">
    </div>
    <div class="mb-3">
        <label for="id_area" class="form-label">Área de Atuação</label>
        <select class="form-select mb-3" name="id_area" required>
            @foreach($areas as $area)
            <option value='{{$area['id']}}' name='id_area'>{{$area['nome']}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="arquivo" class="form-label">Figura</label>
        <input class="form-control" type="file" name="arquivo" accept="image/*">
    </div>

    <button class="btn btn-primary" type="submit" name="button">Salvar</button>
</form>
@endsection