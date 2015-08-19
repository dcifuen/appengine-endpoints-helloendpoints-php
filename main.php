<?php

require __DIR__ . '/vendor/autoload.php';

//FIXME: Use composer autoload instead
require_once __DIR__ . '/src/dcifuen/Service/Helloworld.php';

$config = new Google_Config(__DIR__ . "/config.ini");

$client = new Google_Client($config);

$service = new dcifuen_Service_Helloworld($client);

//Multiply greetings
$greeting = new dcifuen_Service_Helloworld_HelloGreeting();
$greeting->setMessage('My message!');
$greeting = $service->greetings->multiply(3, $greeting);
echo "Greeting with message $greeting->message multiplied successfully!<br/><br/>";

//List greetings
echo "<h3>Greeting List</h3>";

foreach($service->greetings->listGreeting()->getItems() as $greeting){
    echo $greeting->message . "<br/>";
}
echo "<br/>";

//Get greeting
$greeting = $service->greetings->getGreeting(0);
echo "Got greeting with message $greeting->message for ID 0!<br/><br/>";