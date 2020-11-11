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
           
       </tbody>
   </table>
</div>

</body>
</html>