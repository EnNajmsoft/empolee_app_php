<?php

include "../connect.php";

$table = "Vacations";

$emp_vacation_type        =  filterRequest("emp_vacation_type");
$empid_vacation           =  filterRequest("empid_vacation");
$emp_vacation_start          =  filterRequest("emp_vacation_start");
$emp_vacation_end          =  filterRequest("emp_vacation_end");
$emp_vacation_note      =  filterRequest("emp_vacation_note");
$emp_vacation_file            =  filterRequest("emp_vacation_file");

$data = array(
    "vacationTId"        => $emp_vacation_type,
    "VacationUserId"        => $empid_vacation,
    "vacationStart"         => $emp_vacation_start,
    "vacationEnd"           => $emp_vacation_end,
    "vacationNote"          => $emp_vacation_note,
    "vacationFile"          => $emp_vacation_file,
);

insertData($table, $data);
