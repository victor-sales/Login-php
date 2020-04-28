<?php

    $db = 'mysql:host=localhost;dbname=login';
    $user = 'root';
    $password = '';

    try {
        $conn = new PDO($db, $user, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $e) {
        $e->getMessage();
    }
?>