<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "your@email.com";
    $subject = "New Contact Message";

    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    $headers = "From: $email";

    mail($to, $subject, $body, $headers);

    echo "Message sent!";
}
?>
