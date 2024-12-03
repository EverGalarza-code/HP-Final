<?php

if($_SERVER["REQUEST_METHOD"] == 'POST'){

    require 'dbh.inc.php';

    $nameUsers = $_POST['nameUsers'];
    $email = $_POST['email'];
    $billingAddress = $_POST['billingAddress'];
    $cardNumber = $_POST['cardNumber'];

    $stmt = $conn->prepare("INSERT INTO checkout(nameUsers, email, billingAddress, cardNumber) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nameUsers, $email, $billingAddress, $cardNumber);

    if ($stmt->execute()) {
        echo "Information saved succesfully!";
    } else {
        echo "Error: ".$stmt->error;
    }

    $stmt->close();
    $conn->close();
    mysqli_stmt_close($stmt);
        mysqli_close($conn);

header("Location: ../HP-Final/Home.php?checkout=success");
                        exit();
} else {
    header("Location: ../HP-Final/Home.php?checkout=error:Failed!");
    exit();
}
