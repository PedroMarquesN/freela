<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>teste</title>
</head>
<body>

<h1>Usuários</h1>

<table border="1">
    <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Senha</th>
    </tr>
    @foreach($usuarios as $usuario)
        <tr>
            <td>{{ $usuario->nome }}</td>
            <td>{{ $usuario->email }}</td>
            <td>{{ $usuario->senha }}</td>
        </tr>
    @endforeach

</body>
</html>
