<?php

require_once("../db_connection.php");

$selet = "SELECT * FROM `classes`";

$result = $conn->query($selet);

if( $result->num_rows > 0){
   $result = $result->fetch_all(MYSQLI_ASSOC);
}
else{
   $result = [];
}


include("../view/class/index.view.php");