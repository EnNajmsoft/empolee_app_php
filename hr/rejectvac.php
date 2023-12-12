<?php
// admin
include '../connect.php';

$table     = "vacations";

$emp_vacation_id     =  filterRequest("emp_vacation_id");

$data = array(
    "vacationStateHr"    => "2",
);

updateData($table, $data, "empVacationId   = $emp_vacation_id ");
