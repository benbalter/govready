<?php
 
require "vendor/autoload.php";
 
// set your AccountSid and AuthToken from www.twilio.com/user/account
$AccountSid = "AC7e540cac975b5a005d8d8811ed0e5b89";
$AuthToken = "b6b8134916ba7008fffb134e691b7afa";
 
$client = new Services_Twilio($AccountSid, $AuthToken);
 
$sms = $client->account->sms_messages->create(
    "860-245-2269", // From this number
    "917-304-3488", // To this number
    "Test message!"
);
 
// Display a confirmation message on the screen
echo "Sent message {$sms->sid}";
