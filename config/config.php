<?php

    include_once('conexao.php');

    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $nasc = $_POST['nasc'];

    $sql = 'INSERT INTO usuarios (login, senha, email, telefone, nasc) VALUES (:login, :senha, :email, :telefone, :nasc)';
    $stmt = $conn->prepare($sql);
    $stmt ->bindParam(':login',$login);
    $stmt->bindParam(':senha',$senha);
    $stmt->bindParam(':email',$email);
    $stmt->bindParam(':telefone',$telefone);
    $stmt->bindParam(':nasc',$nasc);
    $stmt->execute();