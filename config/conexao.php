<?php

    try {
        $conn = new POD('mysql:host=localhost;dbname=monkeymoney','root','');
    } catch (PDOException $e) {
        $e->getMessage();
    }