<?php

include "../connect.php";

$email = filterRequest("email");
$password = sha1($_POST['password']) ; 
$data = array("userPassw" => $password);
updateData("users", $data, "userEmail = '$email'");
