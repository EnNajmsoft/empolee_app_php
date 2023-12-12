<?php

include "../connect.php";

$table = "departments";

$departname      =  filterRequest("departname");
$departmanger    =  filterRequest("departmanger");
$departnote      =  filterRequest("departnote");

$data = array(
    "departName"      => $departname,
    "departManger"    => $departmanger,
    "departNote"      => $departnote
    
);

insertData($table , $data);
