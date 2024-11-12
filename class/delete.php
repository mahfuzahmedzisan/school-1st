<?php

require_once("../db_connection.php");

if(isset($_GET["id"])){
   $id = base64_decode($_GET["id"]);

   $message = "";

   $selet = "DELETE FROM `classes` WHERE `id` = $id";

   $delete = $conn -> query($selet);

   $message = $delete ? "Data Deleted Successfully" : "Data not delete";

   header("Location: index.php?message=". base64_encode($message));
}