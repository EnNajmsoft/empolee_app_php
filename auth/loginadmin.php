<?php

include "../connect.php";


$email = filterRequest("email");
$password = $_POST['password'];

getData("owners", "owner_email = ? AND  owner_passw = ? ", array($email, $password));
