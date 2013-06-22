<?php 

$noun = $_POST["noun"];
$verb1 = $_POST["verb1"];
$noun2 = $_POST["noun2"];
$mood1 = $_POST["mood1"];
$verb2 = $_POST["verb2"];
$noun3 = $_POST["noun3"];
$email = $_POST["email"]

print_r($_POST);

$email = "";

$message = "";

$message = $noun." went to the store, where he ".$verb1." his ".$noun2." and this made him ".$mood1." until he realized that he ".$verb2." his ".$noun3." forever";

$message = wordwrap($message, 70, "\r\n");

$headers = "From: Jesus@ramsay.com";

// mail(recipient, subject, message);
mail($email, "I've got a madlib for YO!", $message, $headers);
// echo mail("jeremy@palebluedot.ca", "I've got a madlib for YO!", $message, $headers);
 ?>