<?php

include "../connect.php";


$email = filterRequest("email");
$password = $_POST['password'];
// $password = sha1($_POST['password']);

getData("userdetails", "userEmail = ? AND  userPassw = ? ", array($email, $password));

// AND userApproval = 1
