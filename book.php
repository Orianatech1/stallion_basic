<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and assign form inputs
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $mobile = htmlspecialchars(trim($_POST["mobile"]));
    $number_of_passenger = htmlspecialchars(trim($_POST["number_of_passenger"]));
    $f_date = htmlspecialchars(trim($_POST["f_date"]));
    $t_date = htmlspecialchars(trim($_POST["t_date"]));
    $from = htmlspecialchars(trim($_POST["from"]));
    $fromto = htmlspecialchars(trim($_POST["fromto"]));
    $carrier = htmlspecialchars(trim($_POST["carrier"]));
    $luggage = htmlspecialchars(trim($_POST["luggage"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    // Email setup
    $to = "bookings@stallioncoaches.com";
    $subject = "New Booking Request from $name";
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "Content-Type: text/html; charset=UTF-8";

    // Email body
    $body = "
        <h2>New Booking Request</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Mobile:</strong> $mobile</p>
        <p><strong>Number of Passengers:</strong> $number_of_passenger</p>
        <p><strong>PickUp Date:</strong> $f_date</p>
        <p><strong>Return Date:</strong> $t_date</p>
        <p><strong>PickUp Location:</strong> $from</p>
        <p><strong>Drop Off Location:</strong> $fromto</p>
        <p><strong>Event:</strong> $carrier</p>
        <p><strong>Luggage:</strong> $luggage</p>
        <p><strong>Message:</strong> $message</p>
    ";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Thank you for your booking! We will get back to you shortly.'); window.location.href='thankyou.html';</script>";
    } else {
        echo "<script>alert('Sorry, something went wrong. Please try again.');</script>";
    }
} else {
    header("Location: booking-form.html");
    exit();
}
?>
