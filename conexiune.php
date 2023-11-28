<?php
    $server   = "localhost";
    $username = "root";
    $password = "";
    $database = "aaw_lec13_v2";

    try {
        $conn = new PDO("mysql:host=$server;dbname=$database", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Eroare de conectare la baza de date: " . $e->getMessage();
    }
?>