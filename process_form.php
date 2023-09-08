<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "hunter.drozd@gmail.com";
    $subject = "Data Deletion/Feedback";
    $headers = "From: $email";

    // Send the email
    mail($to, $subject, $message, $headers);

    // Redirect to a thank you page
    header("Location: thank_you.html");
    exit();
}
?>
