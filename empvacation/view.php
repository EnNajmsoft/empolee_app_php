<?php

include "../connect.php";

$empid   =   $_POST["empid"];

getAllData("vacationDetails", "VacationUserId = $empid" , "vacationCreate" );
