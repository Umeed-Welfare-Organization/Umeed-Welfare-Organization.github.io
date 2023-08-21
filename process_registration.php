<?php
require_once 'vendor/autoload.php'; // Load Twilio library

use Twilio\Rest\Client;

// Your Twilio Account SID and Auth Token
$accountSid = 'YOUR_ACCOUNT_SID';
$authToken = 'YOUR_AUTH_TOKEN';

// Initialize the Twilio client
$client = new Client($accountSid, $authToken);

// Form data from the submitted form
$name = $_POST['name'];
$fatherName = $_POST['fatherName'];
$dob = $_POST['dob'];
$address = $_POST['address'];
$email = $_POST['email'];
$whatsapp = $_POST['whatsapp'];

// Compose the WhatsApp message
$message = "New Registration:\n";
$message .= "Name: $name\n";
$message .= "Father's Name: $fatherName\n";
$message .= "Date of Birth: $dob\n";
$message .= "Address: $address\n";
$message .= "Email: $email\n";
$message .= "WhatsApp Number: $whatsapp";

// Send the WhatsApp message
$message = $client->messages->create(
    "whatsapp:" . YOUR_WHATSAPP_NUMBER, // Recipient WhatsApp number
    array(
        "from" => "whatsapp:" . YOUR_TWILIO_NUMBER, // Twilio WhatsApp number
        "body" => $message
    )
);

// Redirect user back to the registration page or a thank you page
header("Location: registration.html");
exit();
?>
