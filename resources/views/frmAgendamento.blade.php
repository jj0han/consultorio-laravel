@extends('template')

@section('conteudo')
<h1>Cadastro de Agendamento</h1>
<form action="{{url('agendamento/salvar')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="id" class="form-label">ID</label>
        <input readonly class="form-control" readonly type="text" name="id" value="{{$agendamento->id}}">
    </div>
    <div class="mb-3">
        <label for="nome_paciente" class="form-label">Paciente</label>
        <select class="form-select mb-3" name="id_paciente" required>
            @foreach($pacientes as $paciente)
            <option value='{{$paciente['id']}}' name='id_paciente'>{{$paciente['nome']}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="id_doutor" class="form-label">Doutor Atribuido</label>
        <select class="form-select mb-3" name="id_doutor" required>
            @foreach($doutores as $doutor)
            <option value='{{$doutor['id']}}' name='id_doutor'>{{$doutor['nome']}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="descricao" class="form-label">Descrição</label>
        <input class="form-control" type="text" name="descricao" value="{{$agendamento->descricao}}">
    </div>
    <div class="d-flex gap-4">
        <div class="mb-3">
            <label for="data" class="form-label">Data</label>
            <input class="form-control" type="date" name="data" value="{{$agendamento->data}}">
        </div>
        <div class="mb-3">
            <label for="hora" class="form-label">Horário</label>
            <input type="time" class="form-control" name="horario" id="horario" value="{{$agendamento->horario}}" required>
        </div>
    </div>
    <button class="btn btn-primary" type="submit" name="button">Salvar</button>
</form>
@endsection