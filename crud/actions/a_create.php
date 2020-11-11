<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Action</title>
</head>
<body>
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
    //    echo "<p>New Record Successfully Created</p>" ;
    //    echo "<a href='../create.php'><button type='button'>Back</button></a>";
    //     echo "<a href='../index.php'><button type='button'>Home</button></a>";

    echo "
            <div class='container text-center mt-5'>
                <h2 class='text-center m-4'>New Record Successfully Created</h2>
                <a href='../index.php'><button class='btn btn-dark' type='button'>Home</button></a>
                <a href='../create.php'><button class='btn btn-dark' type='button'>Back</button></a>
            </div>
    ";
   } else  {
       echo "Error " . $sql . ' ' . $connect->connect_error;
   }

   $connect->close();
}

?> 

<!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>

