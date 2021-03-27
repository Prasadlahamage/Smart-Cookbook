<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERT</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="" method="POST">
            <input type="text" name="dish_name" placeholder="Enter the dish name that you want to insert"required/> <br/>
            <input type="text" name="main_ingredient" placeholder="Enter main ingredient that you want to insert" required/> <br/>
            <input type="text" name="ingredients" placeholder="Enter ingredients that you want to insert"required/> <br/>
            <input type="text" name="method" placeholder="Enter method that you want to insert"required/> <br/>
            <input type="submit" name="insert" value="Insert Recipe" >
        </form>
        <?php 
            $con=mysqli_connect('localhost','root','','recipe') or die("Error");
            if(isset($_POST['insert'])){
                $DISH_NAME = $_POST['dish_name'];
                $MAIN_INGREDIENT = $_POST['main_ingredient'];
                $INGREDIENTS = $_POST['ingredients'];
                $METHOD = $_POST['method'];
                $que= "INSERT INTO `recipe` (`ID`, `DISH_NAME`, `MAIN_INGREDIENT`, `INGREDIENTS`, `METHOD`) VALUES (NULL, '$DISH_NAME','$MAIN_INGREDIENT', '$INGREDIENTS', '$METHOD');";
                $query = mysqli_query($con, $que);

                if($query){
                    $message="Inserted Successfully";
                    echo"<script type='text/javascript'>alert('$message');
                    </script>";
                }
            }
        ?>
                            <a href="crud.html">Back to Operations</a>
</body>
</html>