<?php

include "./php/protect.php";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <h1>Cadastro de Usuário</h1>
    <form action="./php/register.php" method="POST">
        <p>
            <label>Nome</label>
            <input type="text" name="name" required>
        </p>
        <p>
            <label>E-mail</label>
            <input type="text" name="email" required>
        </p>
        <p>
            <label>Senha</label>
            <input type="password" name="password" required>
        </p>
        <p>
            <label>Função</label>
            <select name="role" required>
                <option value="user">Usuário</option>
                <option value="admin">Administrador</option>
            </select>
        </p>
        <p>
            <button type="submit">Cadastrar</button>
        </p>
    </form>
</body>
</html>
