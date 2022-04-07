<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE</title>
    <link rel="stylesheet" href="style2.css">

</head>
<body>
<form action="" method="POST">
            <input type="text" name="dish_name" placeholder="Enter the Dish Name that you want to update"/> <br/>
            <input type="text" name="method" placeholder="Enter the method that you want to update"/> <br/>
            <input type="submit" name="update" value="Update Method" >
        </form>
        <?php
            error_reporting(0);
            $con=mysqli_connect('localhost','root','','recipe') or die("Error");
                    
            if(isset($_POST['update'])){
                $DISH_NAME = $_POST['dish_name'];
                $METHOD = $_POST['method'];
                if($row['DISH_NAME'] == $DISH_NAME ){
                    $query = "UPDATE RECIPE SET METHOD = '$METHOD' WHERE DISH_NAME ='$DISH_NAME'";
                    $query_run = mysqli_query($con,$query);            
                    
                    if($query_run){
                        $message="Updated Successfully";
                        echo"<script type='text/javascript'>alert('$message');
                        </script>";
                    }
                }
                else{
                    $message="Dish Name not Found. Please Enter Correct Dish Name";
                        echo"<script type='text/javascript'>alert('$message');
                        </script>";
                }
            }
        ?>
</body>
</html>