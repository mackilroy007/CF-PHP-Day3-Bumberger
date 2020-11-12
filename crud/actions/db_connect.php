<?php
// $localhost = "127.0.0.1";
// $username = "root";
// $password = "";
// $dbname = "restaurant";

// this will avoid mysql_connect() deprecation error.
error_reporting( ~E_DEPRECATED & ~E_NOTICE );


define ('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', '');
define ('DBNAME', 'restaurant');

// create connection
// $connect = new mysqli($localhost, $username, $password, $dbname);
$connect = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME);

// check connection
// if($connect->connect_error){
//     die("connection failed: ".$connect->connect_error);
// } else {
//     //  echo "Successfully Connected";
// }

if  ( !$connect ) {
    die("Connection failed : " . mysqli_error());
   }

?>