<?php

require_once("../db_connection.php");

if (isset($_GET["id"])) {
   $id = base64_decode($_GET["id"]);
   $updated_at = date("d-m-Y H:i:s A");

   $message = "";

   $sql = "SELECT`status` FROM `classes` WHERE id = $id";
   $result = $conn->query($sql)->fetch_assoc();

   $status = $result['status'] ? 0 : 1;

   $update_sql = "UPDATE `classes` SET `status`='$status',`updated_at`='$updated_at' WHERE `id` = $id";
   $update = $conn->query($update_sql);

   $message = $update ? "Status Updated Successfully" : "Status not updated";
   header("Location: index.php?message=" . base64_encode($message));
}
