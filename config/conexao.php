<?php

    try {
        $conn = new PDO('mysql:host=localhost;dbname=monkeymoney','root','');
    } catch (PDOException $e) {
        $e->getMessage();
    }