@extends('template')

@section('conteudo')
<h1>Cadastro de area</h1>

<form action="{{url('area/salvar')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="id" class="form-label">ID</label>
        <input readonly class="form-control" readonly type="text" name="id" value="{{$area->id}}">
    </div>
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input class="form-control" type="text" name="nome" value="{{$area->nome}}">
    </div>

    <button class="btn btn-primary" type="submit" name="button">Salvar</button>
</form>
@endsection