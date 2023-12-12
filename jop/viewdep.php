<?php

include "../connect.php";

$departid   =   $_POST["departid"];

getAllData("jopdetails", "departIdJop = $departid");
