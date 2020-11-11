<?php 

require_once 'db_connect.php';

if ($_POST) {
   $meal = $_POST['meal'];
   $price = $_POST['price'];
   $img = $_POST[ 'img'];
   $ingredients = $_POST[ 'ingredients'];
   $allergies = $_POST[ 'allergies'];

   $sql = "INSERT INTO meal (m_name, price, img, ingredients, allergies) VALUES ('$meal', '$price', '$img', '$ingredients', '$allergies')";
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