<?php

    $host = "sql108.infinityfree.com";
    $username = "if0_34636307";
    $senha = "uHnDNhrcq5X3";
    $dbname = "if0_34636307_dados_user_	";

    $conexao = new mysqli($host, $username, $senha, $dbname);

    if($conexao->connect_errno){
        echo "erro";
    }else{
        echo "conectado ao banco!";
    }

?>