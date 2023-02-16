<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the form data
  $full_name = $_POST["sender"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $message = $_POST["message"];

  // Send an email with the form data
  $to = "belloabdullah76@gmai.com"; // Replace with your email address
  $subject = "New message from $full_name";
  $body = "Sender: $sender\nEmail: $email\nPhone: $phone\nMessage: $message";
  $headers = "From: $email";

  if (mail($to, $subject, $body, $headers)) {
    echo "Thank you for your message!";
  } else {
    echo "There was a problem sending your message. Please try again later.";
  }
}
?>
