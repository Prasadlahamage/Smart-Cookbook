<?php //for create insert update and delete ?>
<?php //Insert ?>

<html>
    <body>
    <title>CRUD Operations</title>
    <link rel="stylesheet" href="style2.css">

        <form action="" method="POST">
            <input type="text" name="dish_name" placeholder="Enter the dish name that you want to insert"/> <br/>
            <input type="text" name="main_ingredient" placeholder="Enter main ingredient that you want to insert"/> <br/>
            <input type="text" name="ingredients" placeholder="Enter ingredients that you want to insert"/> <br/>
            <input type="text" name="method" placeholder="Enter method that you want to insert"/> <br/>
            <input type="submit" name="insert" value="Insert Recipee" >
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

        <form action="" method="POST">
            <input type="text" name="dish_name" placeholder="Enter the Dish Name that you want to delete"/> <br/>
            <input type="submit" name="delete" value="Delete Recipee" >
        </form>
        <?php
            $con=mysqli_connect('localhost','root','','recipe') or die("Error");
                    
            if(isset($_POST['delete'])){
                $DISH_NAME = $_POST['dish_name'];
                $query = "DELETE FROM RECIPE WHERE DISH_NAME ='$DISH_NAME'";
                $query_run = mysqli_query($con,$query);            
                
                if($query_run){
                    $message="Deleted Successfully";
                    echo"<script type='text/javascript'>alert('$message');
                    </script>";
                }
            }
        ?>

        <form action="" method="POST">
            <input type="text" name="dish_name" placeholder="Enter the Dish Name that you want to update"/> <br/>
            <input type="text" name="method" placeholder="Enter the method that you want to update"/> <br/>
            <input type="submit" name="update" value="Update Method" >
        </form>
        <?php
            $con=mysqli_connect('localhost','root','','recipe') or die("Error");
                    
            if(isset($_POST['update'])){
                $DISH_NAME = $_POST['dish_name'];
                $METHOD = $_POST['method'];
                $query = "UPDATE RECIPE SET METHOD = '$METHOD' WHERE DISH_NAME ='$DISH_NAME'";
                $query_run = mysqli_query($con,$query);            
                
                if($query_run){
                    $message="Updated Successfully";
                    echo"<script type='text/javascript'>alert('$message');
                    </script>";
                }
            }
        ?>
    </body>
</html>