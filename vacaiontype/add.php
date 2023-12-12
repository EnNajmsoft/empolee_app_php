<?php

include "../connect.php";

$table = "vacationtype";

$vacationname        =  filterRequest("vacation_name");
$vacationnote           =  filterRequest("vacation_note");


$data = array(
    "vacationTypeName"      => $vacationname,
    "vacationTypeNote"         => $vacationnote,
);

insertData($table, $data);
