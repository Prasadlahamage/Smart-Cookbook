<html>
    <head>
        <title>
            Home
            
        </title>
        <link rel="stylesheet" href="style.css">

    </head>
    <body>
        <form action="" method="POST">
            <input type="text" name="main_ingredient" placeholder="Enter the ingredient that you have "/> <br/>
            <input type="submit" name="search" value="Search Recipee" >
        </form>
        <?php
		error_reporting(0);
            session_start();
            $con=mysqli_connect('localhost','root','','recipe') or die("Error");
            
            if(isset($_POST['search'])){
                $MAIN_INGREDIENT = $_POST['main_ingredient'];

                $query = "SELECT DISH_NAME,METHOD,INGREDIENTS FROM RECIPE WHERE MAIN_INGREDIENT ='$MAIN_INGREDIENT'";
            
                
                $query_run = mysqli_query($con,$query);
                while ($row = mysqli_fetch_array($query_run)) {   
                                     
                    ?>
                    <details>
                        <summary><button name="DISH_NAME">
                            <?php echo $row['DISH_NAME'];?>
                            </summary>
                             </button>
                            <b>INGREDIENTS:
                            <h3> <?php echo $row['INGREDIENTS']?><br>
                       RECIPE:
                         <h3><?php  echo $row['METHOD'];?></b>
                         
                         
                         </details>
                        <br>
                    <?php
                }
            }
            
        ?>

        <div class="login">
            <a href="index.php">
                Login as Administrator
            </a>
        </div>

    </body>
</html>
