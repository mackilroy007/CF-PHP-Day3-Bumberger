<?php

require_once 'actions/db_connect.php';

// if session is not set this will redirect to login page
if (!isset($_SESSION['admin']) && !isset($_SESSION['user'])) {
    header("Location: ../index.php");
    exit;
}
if (isset($_SESSION["user"])) {
    header("Location: home.php");
    exit;
}

if ($_GET['id']) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM meal WHERE id = {$id}";
    $result = $connect->query($sql);

    $data = $result->fetch_assoc();

    // $connect->close();

?>
    <?php
    ob_start();
    session_start();
    require_once 'actions/db_connect.php';

    // if session is not set this will redirect to login page
    if (!isset($_SESSION['user'])) {
        header("Location: ../index.php");
        exit;
    }
    // select logged-in users details
    $res = mysqli_query($connect, "SELECT * FROM users WHERE userId=" . $_SESSION['user']);
    $userRow = mysqli_fetch_array($res, MYSQLI_ASSOC);
    ?>
    <!DOCTYPE html>
    <html>

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Edit Meal</title>

        <!-- <style type="text/css">
            fieldset {
                margin: auto;
                margin-top: 100px;
                width: 50%;
            }

            table tr th {
                padding-top: 20px;
            } -->
        </style>

    </head>

    <body>
        <nav class="navbar sticky-top fixed navbar-light bg-light">
            <a class="navbar-brand" href="home.php">Home</a>
            <form class="form-inline">
                <a class="navbar-brand" href="#">Welcome - <?php echo $userRow['userName']; ?></a>
                <a href="../logout.php?logout"><button class="btn btn-outline-primary" type="button">Sign Out</button></a>
            </form>
        </nav>

        <div class="container mt-5">
            <h2 class="text-center m-4">Add a Meal</h2>

            <form class="" action="actions/a_update.php" method="post">
                <div class="form-group my-4">
                    <label for="meal">Meal Name</label>
                    <input class="form-control" type="text" name="meal" placeholder="Meal name" value="<?php echo $data['m_name'] ?>" />
                </div>
                <div class="form-group my-4">
                    <label for="meal">Price</label>
                    <input class="form-control" type="number" name="price" placeholder="Insert price" value="<?php echo $data['price'] ?>" />
                </div>
                <div class="form-group my-4">
                    <label for="meal">Image URL Format</label>
                    <input class="form-control" type="text" name="img" placeholder="Insert img url" value="<?php echo $data['img'] ?>" />
                </div>
                <div class="form-group my-4">
                    <label for="meal">Ingredients</label>
                    <input class="form-control" type="text" name="ingredients" placeholder="Insert ingredients" value="<?php echo $data['ingredients'] ?>" />
                </div>
                <div class="form-group my-4">
                    <label for="meal">Allergies</label>
                    <input class="form-control" type="text" name="allergies" placeholder="Insert allergies" value="<?php echo $data['allergies'] ?>" />
                </div>

                <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />

                <!-- button to submit content -->
                <button class="btn btn-success" type="submit">Save Changes</button>
                <!-- button to go back -->
                <a href="home.php"><button class="btn btn-dark" type="button">Back</button></a>

            </form>
        </div>

        <!-- <fieldset>
   <legend>Update meal</legend>

   <form action="actions/a_update.php"  method="post">
       <table  cellspacing="0" cellpadding= "0">
           <tr>
               <th>Meal</th>
               <td><input type="text"  name="meal" placeholder ="Add meal" value="<?php #echo $data['meal'] 
                                                                                    ?>"  /></td>
           </tr >
           <tr>
               <th>price</th>
               <td><input type="number"  name="price" placeholder ="Insert price" value="<?php #echo $data['price'] 
                                                                                            ?>"  /></td>
           </tr > 
           <tr>
               <th>Image</th>
               <td><input type="text"  name="img" placeholder ="Add image URL" value="<?php #echo $data['img'] 
                                                                                        ?>"  /></td>
           </tr >     
           <tr>
               <th>Ingredients</th>
               <td><input type= "text" name="ingredients"  placeholder="Add ingredients" value ="<?php #echo $data['ingredients'] 
                                                                                                    ?>" /></td >
           </tr>
           <tr>
               <th >Allergies</th>
               <td><input type ="text" name= "allergies" placeholder= "Add allergies" value= "<?php #echo $data['allergies'] 
                                                                                                ?>"/></td>
           </tr>
           <tr>
               <input type= "hidden" name= "id" value= "<?php #echo $data['id']
                                                        ?>" />
               <td><button  type= "submit">Save Changes</button ></td>
               <td><a  href= "index.php"><button  type="button">Back</button ></a ></td >
           </tr>
       </table>
   </form >

</fieldset > -->

        <!-- Optional JavaScript -->

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>

    </html>

<?php
}
?>
<?php ob_end_flush(); ?>