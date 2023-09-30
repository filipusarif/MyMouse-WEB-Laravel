<?php
session_start();
require 'koneksi.php';

    $conn = koneksi1();    
    if($conn -> connect_error) {
        die("connection failed" . $conn->connect_error);
    };
    if(isset($_SESSION['user'])) {
        $user = $_SESSION['user'];
        $sql = "SELECT * FROM tbkeranjang WHERE user = '$user'";
        $result = $conn -> query($sql);
        if ($result -> num_rows != 0) {
        echo $result -> num_rows;
        }
    } else if (isset($_SESSION['admin'])) {
        $user = $_SESSION['admin'];
        $sql = "SELECT * FROM tbkeranjang WHERE user = '$user'";
        $result = $conn -> query($sql);
        if ($result -> num_rows != 0) {
        echo $result -> num_rows;
        }
    }
    
    $conn -> close();