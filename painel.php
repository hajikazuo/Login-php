<?php

include "./php/protect.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>

<body>
    <?php include './componentes/navbar.php'; ?>
    Bem vindo ao Painel, <?php echo $_SESSION['name']; ?>.

    <p>
        <a href="./php/logout.php">Sair</a>
    </p>
</body>

</html>