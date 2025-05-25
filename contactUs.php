<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    // Retrieve form data safely
    $first_name = htmlspecialchars($_POST["first_name"]);
    $last_name = htmlspecialchars($_POST["last_name"]);
    $email = htmlspecialchars($_POST["email"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $message = htmlspecialchars($_POST["message"]);

    // Email destination and subject
    $to = "ask.brainiacs@gmail.com"; 
    $subject = "New Contact Form Submission";

    // Construct the email content
    $body = "Name: $first_name $last_name\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n\n";
    $body .= "Message:\n$message";

    // Send email
    if (mail($to, $subject, $body)) 
    {
        echo "Thank you! Your message has been sent.";
    } else 
    {
        echo "Sorry, something went wrong. Please try again.";
    }
} else 
{
    echo "Invalid request method.";
}
?>
