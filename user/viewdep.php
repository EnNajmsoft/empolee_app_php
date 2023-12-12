<?php

include "../connect.php";

$departid   =   $_POST["departid"];

getAllData("userDetails", "departId = $departid", );
