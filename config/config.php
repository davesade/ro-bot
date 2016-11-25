<?php
// config.php

// only for debugging
//error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
//ini_set('display_errors', 1);


// set local timezone
date_default_timezone_set('Europe/Prague');

// General
$projectName="roo-bot";
$projectEmail="davesade.42@gmail.com";
$projectPhoneNumber="+420731128030";


// Twilio API credentials
$accountSid = "ACac2d2b855b309f4aee4268b3d60c5e02";
$authToken = "0c4f5a214ec5bed0eabf2c5d3140d794"; //
$twilioPhoneNumber = "+4915735983700";
$siteURL="www.hernisnob.cz";
//7UZKKpo8ffmcsUiYYQrCOjBVFvJyxFei sekret

// Slack Webhook integration
$slackWebHookURL="https://hooks.slack.com/services/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";
$slackRoom = "#ci";
$slackBotName = "Roo-Bot"; //THE NAME OF YOUR BOT
$slackBotIcon = ":robot_face:"; // THE PROFILE IMAGE OF YOUR BOT example :money_mouth_face: or :shit:


// Database Stuff
$dbHost = "eu-cdbr-west-01.cleardb.com";
$dbName = "heroku_9898205cdd5eb0f";
$dbUserName = "bcfce55be59a44";
$dbPassword = "eca8fd6a";
$dbTable = "roo-bot";

$dbConnection = mysqli_connect($dbHost, $dbUserName, $dbPassword,$dbName);
mysqli_error($dbConnection);


// Responses setup (when you need an automated response to users - i.e. when the team is away or the session is over)
$automatedResponseOver="n"; // options: y | n 
$automatedResponseTeamSleeping ="n"; // options: y | n 
$automatedResponseTimeStart = "Today 9pm";
$automatedResponseTimeEnd = "Tomorrow 10am";



// Create a API client instance
$http = new Services_Twilio_TinyHttp(
    'https://api.twilio.com',
    array('curlopts' => array(
        CURLOPT_SSL_VERIFYPEER => true,
        CURLOPT_SSL_VERIFYHOST => 2
    )));

$client = new Services_Twilio($accountSid, $authToken, "2010-04-01", $http);

?>