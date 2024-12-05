<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Συλλογή δεδομένων από τη φόρμα
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Στοιχεία του email
    $to = "sstamou@tuc.gr"; // Αντικαταστήστε με τη δική σας διεύθυνση email
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    // Κεφαλίδες email
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Αποστολή του email
    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for contacting us!";
    } else {
        echo "There was an error sending your message. Please try again later.";
    }
} else {
    echo "Invalid request";
}

?>