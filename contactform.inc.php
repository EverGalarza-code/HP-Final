<?php

if($_SERVER["REQUEST_METHOD"]){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mailFrom = $_POST['phone'];
    $message = $_POST['message'];

    $mailTo = "Isaac.Gao@students.jmcss.org";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an email from: ".$name.".\n\n".$message;

    mail($mailTo, $email, $txt, $headers);
    header("Location: contact.php?mailsend");
    exit();
} else {
    header("Location: contact.php?error=mail-failed-to-send");
    exit();
}


