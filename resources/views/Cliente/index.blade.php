<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Nome</th>
            <th>CPF</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Ações</th>            
        </tr>

        @foreach($clientes as $cliente)
            <tr>
                <td>{{ $cliente->nome }}</td>
                <td>{{ $cliente->cpf }}</td>
                <td>{{ $cliente->telefone }}</td>
                <td>{{ $cliente->email }}</td>
                <td>
                    <form action="deletarCliente/{{ $cliente->id }}" method="POST" onsubmit="return confirm('TEM CERTEZA?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Deletar</button>
                    </form>
                </td>
                <td>
                    <a href="">Editar</a>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>