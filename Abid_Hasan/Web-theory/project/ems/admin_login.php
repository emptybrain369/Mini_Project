<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1 align="center">Employee Management system</h1>
    <nav align="center">
        <a href="admin_login.php">Admin Login</a> &nbsp &nbsp &nbsp &nbsp &nbsp
        <a href="employee_login.php">Employee Login</a>
    </nav>
    <br> <br>
    <h2 align="center">Admin Login</h2> <br> 
    <form action= "admin_validation.php"  method="post" align="center">
        Username :
        <input type="text" name="auser"> <br> <br>
        Password :
        <input type="text" name="apass"> <br> <br>
        <input type="submit" name="submit" value="Login">
    </form>
</body>
</html>

