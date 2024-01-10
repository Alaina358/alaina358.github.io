<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'alainafaisal344@gmail.com'; // Replace with your email
    $subject = 'Message from Website';
    $body = "You have received a new message from the user $name.\n".
            "Here is the message:\n $message";

    $headers = "From: $email";

    if(mail($to, $subject, $body, $headers)) {
        echo "Mail Sent!";
    } else {
        echo "Failed to send mail.";
    }
}
?>