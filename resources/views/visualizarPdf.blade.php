<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<main class="container p-3">
        <div class="d-flex flex-column gap-3 container bg-white shadow px-4 py-3 rounded">
            
            <table class="table">
                <thead class="thead">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome do paciente</th>
                        <th scope="col">Data/Hora</th>
                        <th scope="col">Doutor</th>
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
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
</body>

</html>