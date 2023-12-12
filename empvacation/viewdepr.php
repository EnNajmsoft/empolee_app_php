<?php

include "../connect.php";

$departid   =   $_POST["departid"];

getAllData("vacationDetails", "departId = $departid", "vacationCreate" );
