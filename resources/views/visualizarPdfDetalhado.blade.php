<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <h1>Relatório de Agendamentos</h1>
        <table style="border: 1px solid black; width: 100%; text-align: center; border-collapse: collapse;">
            <thead style="border-bottom: 1px solid black; background-color: #aeaeae;">
                <tr>
                    <th style="border: 1px solid black;">ID</th>
                    <th style="border: 1px solid black;">Data</th>
                    <th style="border: 1px solid black;">Horário</th>
                    <th style="border: 1px solid black;">Paciente</th>
                    <th style="border: 1px solid black;">Doutor</th>
                    <th style="border: 1px solid black;">Área de Atuação</th>
                    <th style="border: 1px solid black;">Descrição</th>
                </tr>
            </thead>
            <tbody>
                @foreach($consultas as $consulta)
                <tr>
                    <td style="border: 1px solid black; padding: 1px; font-size: 14px;">{{$consulta->id}}</td>
                    <td style="border: 1px solid black; padding: 2px; font-size: 14px;">{{$consulta->data}}</td>
                    <td style="border: 1px solid black; padding: 2px; font-size: 14px;">{{$consulta->horario}}</td>
                    <td style="border: 1px solid black; padding: 3px; font-size: 14px;">{{$consulta->nome_paciente}}</td>
                    <td style="border: 1px solid black; padding: 3px; font-size: 14px;">
                        {{$consulta->nome_doutor}}
                    </td>
                    <td style="border: 1px solid black; padding: 3px; font-size: 14px;">{{$consulta->area_nome}}</td>
                    <td style="border: 1px solid black; padding: 3px; font-size: 14px;">{{$consulta->descricao}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </main>
</body>

</html>