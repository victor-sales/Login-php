<?php

session_start();

if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('location:index.php');
}

$logado = $_SESSION['email']

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p><?php echo "Olá " . $logado; ?></p>
    <a href="index.php"><?php session_destroy();?> Sair</a>
</body>

</html>