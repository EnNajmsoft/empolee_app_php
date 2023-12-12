

<?php

include "../connect.php";

$departid   =   $_POST["depart_id"];

getData("jopdetails", "departIdJop = ? ", array($departid));

?>