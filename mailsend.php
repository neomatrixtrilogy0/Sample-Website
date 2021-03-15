<?php
$name = $_POST['fullname'];
$mobile = $_POST['contact'];
$mail = $_POST['mailid'];

$msg = $name . " " . $mobile ." " . $mail;

echo $msg;


?>