<?php
// admin
include '../connect.php';

$table     = "users";

$user_id     =  filterRequest("user_id");

$data = array(
    "userApproval"    => "3",
);

updateData($table, $data, "userId   = $user_id ");
