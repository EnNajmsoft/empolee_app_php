<?php 

include "../connect.php" ;

$email  = filterRequest("email") ; 

$verfiy = filterRequest("verifycode") ; 

$stmt = $con->prepare("SELECT * FROM users WHERE userEmail = '$email' AND userVerficycod = '$verfiy' ") ; 
 
$stmt->execute() ; 

$count = $stmt->rowCount() ; 

if ($count > 0) {
 
    $data = array("userApproval" => "1") ; 

    updateData("users" , $data , "userEmail = '$email'");

}else {
    
 printFailure("verifycode not Correct") ; 

}
?>