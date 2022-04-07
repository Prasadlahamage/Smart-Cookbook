<!DOCTYPE html>
<html>
    <head>
        <title>Admin Login</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h2 id="heading">Login As Administrator</h2>
        <div id="frm">
            <form action="validate.php" method="POST">
                <p>
                    <label><b>Username : </label>
                    <input placeholder="username" type="text" name="username" id="username"required/>
               </p>
               <p>
                    <label>Password : </label>
                    <input placeholder="password" type="password" name="password" id="password" required/>
               </p>
               <p>
                    <input type="submit" id="btn" value="Login" />
                    <input type="reset" id="rst"value="Reset"/><br>
                    <a href="login.php" class="login">get back to user</a>
               </p>
            </form>
        </div>
    </body>
</html>
