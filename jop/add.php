<?php

include "../connect.php";

$table = "jops";

$departid      =  filterRequest("depart_id");
$jopname       =  filterRequest("jop_name");
$jopnote       =  filterRequest("jop_note");

$data = array(
    "departIdJop"      => $departid,
    "jopName"       => $jopname,
    "jopNote"       => $jopnote

);

insertData($table, $data);
