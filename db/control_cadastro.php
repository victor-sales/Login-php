<?php

    include_once('conn.php');

    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $email = $_POST["email"];
    $senha = md5($_POST["senha"]);
    
    echo $nome . $sobrenome . $email . $senha;

    $sql = "INSERT INTO person (first_name, last_name, email, senha) VALUES (:nome, :sobrenome, :email, :senha)";
  
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":sobrenome", $sobrenome);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":senha", $senha);
    $stmt->execute();

?>