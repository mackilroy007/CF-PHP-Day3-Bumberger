<?php 

require_once 'db_connect.php';

if ($_POST) {
   $meal = $_POST['meal'];
   $price = $_POST['price'];
   $img = $_POST[ 'img'];
   $ingredients = $_POST[ 'ingredients'];
   $allergies = $_POST[ 'allergies'];

   $id = $_POST['id'];

   $sql = "UPDATE meal SET m_name = '$meal', price = '$price', img = '$img', ingredients = '$ingredients', allergies = '$allergies' WHERE id = {$id}" ;
   if($connect->query($sql) === TRUE) {
       echo  "<p>Successfully Updated</p>";
       echo "<a href='../update.php?id=" .$id."'><button type='button'>Back</button></a>";
       echo  "<a href='../index.php'><button type='button'>Home</button></a>";
   } else {
        echo "Error while updating record : ". $connect->error;
   }

   $connect->close();

}

?> 