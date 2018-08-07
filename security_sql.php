<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "training";

    try {

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->exec("SET NAMES 'UTF8';");
    $conn->exec("SET CHARACTER SET utf8");
    $conn->exec("SET character_set_results=utf8");
    $conn->exec("SET character_set_client=utf8");
    $conn->exec("SET character_set_connection=utf8");

    } catch(PDOException $e) {

        echo "Error: " . $e->getMessage();
    }

 
    function query($sql,$array = []) {
        global $conn;
        $stmt = $conn->prepare($sql);
        try {

        $stmt->execute($array);

        return $stmt;

        } catch(PDOException $e) {

        return $e->getMessage();

        }
        
    }






?>