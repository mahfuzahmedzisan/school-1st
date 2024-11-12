<?php


if(isset($_POST['submit'])){
   require_once("./../db_connection.php");

   $class_no = $_POST['class_no'];
   $class_name = $_POST['class_name'];

   $class_no_err = "";
   $class_name_err = "";


   $message = "";   
   $error = false;

   if (empty($class_no)) {
      $error = true;
      $class_no_err = "Class no is requeried!";
   }

   if (empty($class_name) || strlen($class_name) < 3) {
      $error = true;
      if (empty($class_name)) {
         $class_name_err = "Class name is requried!";
      } elseif (strlen($class_name) < 3) {
         $class_name_err = "Class name at lest 3 Charecter";
      }
      elseif((int)$class_name){
         $class_name_err = "Class name must be charecter";
      }
   }

   if (!$error) {
      $sql = "INSERT INTO `classes`(`class_no`, `class_name`) VALUES ('$class_no','$class_name')";

      $insert = $conn->query($sql);

      if ($insert) {
         $class_no_err = '';
         $class_name_err = '';
         $class_no = '';
         $class_name = '';

         $message = "Data inserted successfully";
      } else {
         $message = "Data not inserted";
      }
      header("Location: index.php ? message=" . base64_encode($message));
   }
}


include("../view/class/class.view.php");