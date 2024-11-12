<?php

if(isset($_POST['submit'])){

   $class_no = $_POST['class_no'];
   $class_name = $_POST['class_name'];

   $class_no_err = "";
   $class_name_err = "";

   $err = false;

   if (empty($class_no)) {
      $err = true;
      $class_no_err = "Class no is requeried!";
   }

   if (empty($class_name) || strlen($class_name) < 4) {
      $err = true;
      if (empty($class_name)) {
         $class_name_err = "Class name is requried!";
      } elseif (strlen($class_name) < 3) {
         $class_name_err = "Class name at lest 3 Charecter";
      }
      elseif((int)$class_name){
         $class_name_err = "Class name must be charecter";
      }
   }

   if(!$err){
      $class_no_err = "";
      $class_name_err = "";

      

      $class_no = "";
      $class_name = "";
   }
}


include("../view/class/class.view.php");