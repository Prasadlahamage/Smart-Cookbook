<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DELETE</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form action="" method="POST">
            <input type="text" required name="dish_name" placeholder="Enter the Dish Name that you want to delete"/> <br/>
            <input type="submit" name="delete" value="Delete Recipee" >
        </form>
        <?php
            error_reporting(0);
            $con=mysqli_connect('localhost','root','','recipe') or die("Error");
            
            if(isset($_POST['delete'])){
                $DISH_NAME = $_POST['dish_name'];
                $que="SELECT DISH_NAME FROM RECIPE WHERE DISH_NAME='$DISH_NAME'";
                $result = mysqli_query($con,$que);
                $row = mysqli_fetch_array($result);
                if($row['DISH_NAME'] == $DISH_NAME ){
                    $query = "DELETE FROM RECIPE WHERE DISH_NAME ='$DISH_NAME'";
                    $query_run = mysqli_query($con,$query);            
                    $row = mysqli_fetch_array($query_run);
                    if($query_run){
                        $message="Deleted Successfully";
                        echo"<script type='text/javascript'>alert('$message');
                        </script>";
                        //header("location:CRUD.html");
                    }
                }
                else{
                    $message="Dish Name not Found. Please Enter Correct Dish Name";
                        echo"<script type='text/javascript'>alert('$message');
                        </script>";
                }
            }
        ?>
                                    <a href="crud.html">Back to Operations</a>

    </body>
</html>