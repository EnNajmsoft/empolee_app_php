<?php
include "../connect.php";
$email = filterRequest("email");
$verfiycode   =1234;
// $verfiycode     = rand(10000, 99999);
$stmt = $con->prepare("SELECT * FROM users WHERE userEmail = ? ");
$stmt->execute(array($email));
$count = $stmt->rowCount();
result($count);

if ($count > 0) {
    $data = array("userApproval" => $verfiycode);
    updateData("users", $data, "userEmail = '$email'", false);

    // sendEmail($email, "Verfiy Code Ecommerce", "Verfiy Code $verfiycode");
}
