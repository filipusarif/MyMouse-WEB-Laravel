<?php
function koneksi() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $myDB = "mymouse";
    
    try 
    {
        $conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connected successfully";
    }
    catch (PDOException $e)
    {   
        echo "Connection failed :". $e->getMessage();
    }
    return $conn;
}

function koneksi1() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $myDB = "mymouse";
    
    $conn = new mysqli($servername, $username, $password, $myDB);
    if($conn -> connect_error) {
        die("connection failed" . $conn->connect_error);
    };
    return $conn;
}
