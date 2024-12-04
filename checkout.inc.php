<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    require 'dbh.inc.php';
    $nameUsers = $_POST['nameUsers'];
    $emailUsers = $_POST['emailUsers'];
    $billingAddress = $_POST['billingAddress'];
    $cardNumber = $_POST['cardNumber'];

    try {
       
        try {$pdo = new PDO($servername, $dBUsername, $dBPassword, $dBName);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
        echo 'connection failed: ' . $e->getMessage();;
    } 
        $query = "INSERT INTO checkout (nameUsers, email, billingAddress, cardNumber) VALUES (?, ?, ?, ?);";
        
        $stmt = $pdo->prepare($query);

        $stmt->execute([$nameUsers, $emailUsers, $billingAddress, $cardNumber]);

        $pdo = null;
        $stmt = null;

        header("Location: ../HP-Final/Home.php?checkout=success");

        die();
    }catch(PDOException $e){
        die("Query Failed: " . $e->getMessage());
    }

} else {
    header("Location: ../HP-Final/Home.php?checkout=error:Failed!");
    exit();
}
