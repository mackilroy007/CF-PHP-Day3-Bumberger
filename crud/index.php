<?php require_once 'actions/db_connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
   <title>PHP CRUD Restaurant</title>

   <style type ="text/css">
       .manageMeal {
           width : 50%;
           margin: auto;
       }

        table {
           width: 100%;
            margin-top: 20px;
       }

   </style>

</head>
<body>

<div class ="manageMeal">
   <a href= "create.php"><button type="button" >Add Meal</button></a>
   <table  border="1" cellspacing= "0" cellpadding="0">
       <thead>
           <tr>
               <th>Meal</th>
               <th >Price</th>
               <th >Image</th>
               <th >Ingredents</th>
               <th >Allergies</th>
           </tr>
       </thead>
       <tbody>
       <?php
           $sql = "SELECT * FROM meal WHERE active = 0";
           $result = $connect->query($sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo  "<tr>
                       <td>" .$row['m_name']." ".$row['price' ]."</td>
                       <td>" .$row['price']."</td>.<td>" .$row['img']
                       ."</td>.<td>" .$row['allergies']."</td>.<td>" .$row['ingridients']."</td>
                       <td>
                           <a href='update.php?id=" .$row['id']."'><button type='button'>Edit</button></a>
                           <a href='delete.php?id=" .$row['id']."'><button type='button'>Delete</button></a>
                       </td>
                   </tr>" ;
               }
           } else  {
               echo  "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
           }
            ?>
       </tbody>
   </table>
</div>

</body>
</html>