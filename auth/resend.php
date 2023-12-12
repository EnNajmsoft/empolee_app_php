<?php 

include "../connect.php"  ;

$email = filterRequest("email");

// $verfiycode     = rand(10000 , 99999);
$verfiycode  =4646;

$data = array(
    "userVerficycod" => $verfiycode
) ; 

updateData("users" ,  $data  , "userEmail = '$email'" ) ; 

// sendEmail($email , "Verfiy Code Ecommerce" , "Verfiy Code $verfiycode") ; 

 