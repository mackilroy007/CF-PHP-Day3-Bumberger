<?php 

require_once 'db_connect.php';

if ($_POST) {
   $meal = $_POST['meal'];
   $price = $_POST['price'];
   $img = $_POST[ 'img'];
   $ingridients = $_POST[ 'ingridients'];
   $allergies = $_POST[ 'allergies'];

   $sql = "INSERT INTO meal (meal, price, img, ingridients, allergies) VALUES ('$meal', '$price', '$img', '$ingridients', '$allergies')";
    if($connect->query($sql) === TRUE) {
       echo "<p>New Record Successfully Created</p>" ;
       echo "<a href='../create.php'><button type='button'>Back</button></a>";
        echo "<a href='../index.php'><button type='button'>Home</button></a>";
   } else  {
       echo "Error " . $sql . ' ' . $connect->connect_error;
   }

   $connect->close();
}

?> 