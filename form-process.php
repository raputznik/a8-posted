<?php 

$noun1 = $_POST["noun1"];
$verb1 = $_POST["verb1"];
$noun2 = $_POST["noun2"];
$mood1 = $_POST["mood1"];
$verb2 = $_POST["verb2"];
$noun3 = $_POST["noun3"];

print_r($_POST);

$message = "";

$message = $noun1." went to the store, where he ".$verb1." his ".$noun2." and this made him ".$mood1." until he realized that he ".$verb2." his ".$noun3." forever";

$message = wordwrap($message, 70, "\r\n");

$headers = "From: gordon@ramsay.com";

// mail(recipient, subject, message);
echo mail("jeremy@palebluedot.ca", "I've got a madlib for YO!", $message, $headers);
 ?>