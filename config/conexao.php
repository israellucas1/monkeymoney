<?php

    try {
        $conn = new POD('mysql:host=sql108.infinityfree.com;dbname=if0_34636307_dados_user_','if0_34636307','uHnDNhrcq5X3');
    } catch (PDOException $e) {
        $e->getMessage();
    }