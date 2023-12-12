<?php

include "../connect.php";
$tabel = "users";

$username     = filterRequest("username");
$email        = filterRequest("email");
$phone        = filterRequest("phone");
$password     = sha1($_POST['password']);
$jopid        = filterRequest("jopid");
$token        = filterRequest("token");
$verfiycode   = 5555;
// $verfiycode     = rand(10000 , 99999);

$stmt = $con->prepare("SELECT * FROM users WHERE userEmail = ? OR userPhone = ? ");
$stmt->execute(array($email, $phone));
$count = $stmt->rowCount();
if ($count > 0) {
    printFailure("PHONE OR EMAIL");
} else {

    $data = array(
        "userUsername"   => $username,
        "userEmail"      => $email,
        "userPhone"      => $phone,
        "userPassw"      => $password,
        "userJopId"      => $jopid,
        "userToken"      => $token,
        "userVerficycod" => $verfiycode,
    );
    // sendEmail($email, "Verfiy Code hotelapp", "Verfiy Code $verfiycode"); 

    insertData($tabel, $data);
}


?>

