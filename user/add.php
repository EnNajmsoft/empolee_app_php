<?php

include "../connect.php";

$table = "users";

$userusername        =  filterRequest( "userusername"  );
$useremail           =  filterRequest( "useremail"     );
$user_passw          =  filterRequest( "user_passw"    );
$userphone           =  filterRequest( "userphone"     );
$userjop_id          =  filterRequest( "userjop_id"    );
$userverficycod      =  filterRequest( "userverficycod");
$usertype            =  filterRequest( "usertype"      );

$data = array(
    "userUsername"      => $userusername,
    "userEmail"         => $useremail,
    "userPassw"         => $user_passw,
    "userPhone"         => $userphone,
    "userJopId"        => $userjop_id,
    "userVerficycod"    => $userverficycod,
    "userType"          => $usertype,
);

insertData( $table , $data );
