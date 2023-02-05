<?php
    function db() {
        $dbUsername = "root";
        $dbPassword = "root";
        $dbHost = "db";
        $dbName = "shadowCompany";
        
        $conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            return;
        }
        return $conn;
    }

?>