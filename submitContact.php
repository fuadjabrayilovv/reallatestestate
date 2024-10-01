<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect data from the POST request
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $zip = htmlspecialchars($_POST['zip']);
    $message = htmlspecialchars($_POST['message']);
    $type = htmlspecialchars($_POST['type']);

    // Define recipient and subject
    $to = "fuad.jabrayilovv@gmail.com";
    $subject = "New contact form submission";

    // Create the email body
    $body = "You have received a new message from your website's contact form.\n\n";
    $body .= "Here are the details:\n";
    $body .= "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n";
    $body .= "Zip: $zip\n";
    $body .= "Property Type: $type\n";
    $body .= "Message:\n$message\n";

    // Headers
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send the message!";
    }
}
?>
