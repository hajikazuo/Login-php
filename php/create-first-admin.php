<?php
$flag_file = 'admin_user_created.flag';

if (file_exists($flag_file)) {
    die("O usuário admin já foi criado. Acesso não autorizado.");
}

include "conexao.php";

$auth_key = "admin@admin";

if (isset($_GET['key']) && $_GET['key'] === $auth_key) {

    $name = "Admin";
    $email = "admin@example.com";
    $password = "1234"; 
    $role = "admin";

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql_code = "INSERT INTO usuarios (name, email, password, role) VALUES ('$name', '$email', '$hashedPassword', '$role')";
    $sql_query = $mysqli->query($sql_code);

    if ($sql_query) {
        echo "Usuário admin criado com sucesso!";
    } else {
        echo "Erro ao criar o usuário admin.";
    }

    file_put_contents($flag_file, 'User Created');

    header("Location: ../index.php");
exit;
} else {
    die("Acesso não autorizado.");
}
