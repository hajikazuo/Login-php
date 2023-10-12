<?php
include "conexao.php";

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = filter_var($mysqli->real_escape_string($_POST['email']), FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        echo "Preencha seu e-mail e senha";
    } else {
        $sql_code = "SELECT * FROM usuarios WHERE email = '$email'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $usuario = $sql_query->fetch_assoc();

        if ($usuario) {
            $storedPassword = $usuario['password'];

            if (password_verify($password, $storedPassword)) {
                if (!isset($_SESSION)) {
                    session_start();
                }

                $_SESSION['id'] = $usuario['id'];
                $_SESSION['name'] = $usuario['name'];


                header("Location: ../painel.php");
                exit; 
            } else {
                echo "Falha ao logar! E-mail ou senha incorretos";
            }
        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }
    }
}
?>
