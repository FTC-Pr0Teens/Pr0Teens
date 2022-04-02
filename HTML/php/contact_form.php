<?php

if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];

    $mailTo = "pr0teensrobotics@gmail.com";
    $headers = "From: ".$email;
    $txt = "New E-mail Submission from".$firstname." ".$lastname.".\n\n".$message;

    mail($mailTo, $firstname, $lastname, $txt, $headers);
    header("Location: index.php?mailsend");
}