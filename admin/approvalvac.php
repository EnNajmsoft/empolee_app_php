<?php
// admin
include '../connect.php';

$table     = "vacations";

$emp_vacation_id     =  filterRequest("emp_vacation_id");

$data = array(
    "vacationStateAdmin"    => "1",
);

updateData($table, $data, "empVacationId   = $emp_vacation_id ");
