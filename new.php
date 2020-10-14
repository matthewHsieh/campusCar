<?php
require("phpMQTT\phpMQTT.php");
$server = "140.129.18.218";     // change if necessary
$port = 1883;                     // change if necessary
$username = "";                   // set your username
$password = "";                   // set your password
$client_id = "phpMQTT-publisher"; // make sure this is unique for connecting to sever - you could use uniqid()

$mqtt = new Bluerhinos\phpMQTT($server, $port, $client_id);
 
if($_SERVER['REQUEST_METHOD'] == 'POST')
   {
       $value = filter_input(INPUT_POST, "selected_value");

       if (isset($value))
       {
		   if($mqtt->connect(true, NULL, $username, $password)) {
			   echo json_encode($value);
			   $mqtt->publish("pub.140.129.18.218", $value);
			   $mqtt->close();
		   } else {
			   echo "Time out!\n";
		   }
       }
   }

 
?>