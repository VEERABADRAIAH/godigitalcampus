<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $institution = htmlspecialchars(trim($_POST['institution']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $address = htmlspecialchars(trim($_POST['address']));
    $message = htmlspecialchars(trim($_POST['message']));

    if (empty($name) || empty($email) || empty($message) ||empty($phone)) {
        header("Location: index.html?success=0");
        exit();
    }

    $to = "hr@godigitalcampus.com"; // Replace with your email address
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\n\nInstitution: $Institution\n\n Phone: $phone\n\n Address: $address\n\n Message:\n$message ";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        header("Location:thank-you.html");
    } else {
        header("Location: index.html?success=0");
    }
    exit();
}
?>
