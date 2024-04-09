<?php

$to = "savichaurasia822@gmail.com";
$subject = "Test Mail";
$body = "This is PHP mail";

if(mail($to, $subject, $body)) {
echo "mail ja sent";
} else {
echo "mail failed";
}?>