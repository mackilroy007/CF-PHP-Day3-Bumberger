<?php 

require_once 'actions/db_connect.php';

if ($_GET['id']) {
   $id = $_GET['id'];

   $sql = "SELECT * FROM meal WHERE id = {$id}" ;
   $result = $connect->query($sql);

   $data = $result->fetch_assoc();

   $connect->close();

?>

<!DOCTYPE html>
<html>
<head>
   <title >Edit Meal</title>

   <style type= "text/css">
       fieldset {
           margin : auto;
           margin-top: 100px;
            width: 50%;
       }

       table  tr th {
           padding-top: 20px;
       }
   </style>

</head>
<body>

<fieldset>
   <legend>Update meal</legend>

   <form action="actions/a_update.php"  method="post">
       <table  cellspacing="0" cellpadding= "0">
           <tr>
               <th>Meal</th>
               <td><input type="text"  name="meal" placeholder ="Add meal" value="<?php echo $data['meal'] ?>"  /></td>
           </tr >
           <tr>
               <th>price</th>
               <td><input type="number"  name="price" placeholder ="Insert price" value="<?php echo $data['price'] ?>"  /></td>
           </tr > 
           <tr>
               <th>Image</th>
               <td><input type="text"  name="img" placeholder ="Add image URL" value="<?php echo $data['img'] ?>"  /></td>
           </tr >     
           <tr>
               <th>Ingridients</th>
               <td><input type= "text" name="ingridients"  placeholder="Add ingridients" value ="<?php echo $data['ingridients'] ?>" /></td >
           </tr>
           <tr>
               <th >Allergies</th>
               < td><input type ="text" name= "allergies" placeholder= "Add allergies" value= "<?php echo $data['allergies'] ?>" /></td>
           </tr>
           <tr>
               <input type= "hidden" name= "id" value= "<?php echo $data['id']?>" />
               <td><button  type= "submit">Save Changes</button ></td>
               <td><a  href= "index.php">< button  type="button" >Back</button ></a ></td >
           </tr>
       </table>
   </form >

</fieldset >

</body >
</html >

<?php
}
?> 