<?php

define("db_host","Localhost");
define("db_user","root");
define("db_pass","");
define("db_name","2nd_school_db");

$conn = mysqli_connect(db_host, db_user, db_pass, db_name);

if(!$conn){
   die("Connection Failed : ". mysqli_connect_error());
}