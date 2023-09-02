<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" type = "text/css" href = "assets/css/custom_style.css">  
    <title>Login_page</title>
</head>
<body>
<div id = "login">  
        <h1>Login</h1>  
        <form action = "auth.php" method = "POST">  
            <p>  
                <label> UserName: </label>  
                <input type = "text" name  = "user" />  
            </p>  
            <p>  
                <label> Password: </label>  
                <input type = "password" name  = "pass" />  
            </p>  
            <p>     
                <input type =  "submit" value = "Login" />  
            </p>  
        </form>  
    </div>  
</body>
</html>