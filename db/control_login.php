<?php

session_start();

    include_once('conn.php');
    
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);

    $sql = "SELECT email, senha FROM person WHERE email = :email AND senha = :senha";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":senha", $senha);
    
    if ($stmt->execute()) {

        foreach ($stmt->fetchAll() as $value) {

            if ($value['email'] == $email && $value['senha'] == $senha) {
                $_SESSION['email'] = $email;
                $_SESSION['senha'] = $senha;
                //header('location:inicio.php');
            } else {
                isset($_SESSION['email']);
                isset($_SESSION['senha']);
            }
        }
    }
