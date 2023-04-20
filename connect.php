<?php
    $host = "127.0.0.1";
    $port = 3306;
    $user = "root";
    $password = "";
    $dbname = "brainwave";

    try {
        $dbh = new PDO("mysql:host={$host};port={$port};dbname={$dbname}", $user, $password);
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }

   ?>


