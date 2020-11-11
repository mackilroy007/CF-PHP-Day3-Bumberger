<!DOCTYPE html>
<html>
<head>
   <title>PHP CRUD  |  Add Meal</title>

   <style type= "text/css">
       fieldset {
           margin: auto;
            margin-top: 100px;
           width: 50% ;
       }

       table tr th  {
           padding-top: 20px;
       }
   </ style>

</head>
<body>

<fieldset >
   <legend>Add Meal</legend>

   <form  action="actions/a_create.php" method= "post">
       <table cellspacing= "0" cellpadding="0">
           <tr>
               <th>Meal Name</th >
               <td><input  type="text" name="meal"  placeholder="Meal name" /></td >
           </tr>    
           <tr>
               <th>Price</th>
               <td><input  type="number" name= "price" placeholder="Insert price" /></td>
           </tr>
           <tr>
               <th>Meal Img</ th>
               <td>< input type="text"  name="img" placeholder ="Insert img url" /></td>
           </tr>
           <tr>
               <th>Ingredients</ th>
               <td>< input type="text"  name="ingridients" placeholder ="Insert ingridients" /></td>
           </tr>
           <tr>
               <th>Allergies</ th>
               <td>< input type="text"  name="allergies" placeholder ="Insert allergies" /></td>
           </tr>
           <tr>
               <td><button type ="submit">Insert user</button></td>
               <td ><a href= "index.php"><button  type="button">Back</ button></a></td>
           </tr >
       </table>
   </form>

</fieldset >

</body>
</html>