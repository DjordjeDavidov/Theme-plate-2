<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "davidovdjordje40@gmail.com"; // Your email address
    $subject = "New Booking Request";
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $person = $_POST["person"];
    $date = $_POST["reservation-date"];
    $time = $_POST["reservation-time"];
    $message = $_POST["message"];

    $email_body = "Name: $name\n";
    $email_body .= "Phone Number: $phone\n";
    $email_body .= "Number of Persons: $person\n";
    $email_body .= "Reservation Date: $date\n";
    $email_body .= "Reservation Time: $time\n";
    $email_body .= "Message: $message\n";

    // Send email
    if (mail($to, $subject, $email_body)) {
        echo "Thank you for your booking. We will get in touch with you shortly!";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>
