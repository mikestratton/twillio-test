<?php
require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;

include_once('.env.php');

// Your Account SID and Auth Token from twilio.com/console
$account_sid = $twilio_sid;
$auth_token = $auth_token;
// In production, these should be environment variables. E.g.:
// $auth_token = $_ENV["TWILIO_AUTH_TOKEN"]

// A Twilio number you own with SMS capabilities
$twilio_number = "+17542533582";

$client = new Client($account_sid, $auth_token);
$client->messages->create(
// Where to send a text message (your cell phone?)
    '+18015990584',
    array(
        'from' => $twilio_number,
        'body' => 'Hey Brett, this is Mike Stratton'
    )
);
