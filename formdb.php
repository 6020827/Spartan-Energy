<?php
$error = "";
if(isset($_POST["submit"])){

 
    if (!empty($_POST["username"]) && !empty($_POST["password"])){
        

        require("dbconnect.php");
        
        $username = trim($_POST["username"]);
        $password = trim($_POST["password"]);

        $sql = "SELECT * FROM gebruikers WHERE username = '$username'";
     
        if($result = $conn->query($sql)){
       $row = $result->fetch_row();
            
        if (password_verify($password, $row[2])){
            session_start();
            $_SESSION['ingelogd'] = true;
            $_SESSION["username"] = $_POST["username"];
            header("Location: ingelogd.php");
        } else {
            $error = "Username & password niet goed";
            }
    }
    }else {
        $error = "Username & password zijn verplicht";
        }
}




?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="language" content="NL">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="Chloë Woldberg">
        <title></title>
        <link rel="stylesheet" type="text/css" href="">
    </head>
    <body>
        <h1>Login form zonder DB</h1>
        <form method="POST">
            <?php echo $error; ?>
            <label><br>Username:</label><br><input type="text" name="username"/><br>
            <label>Password:</label><br><input type="password" name="password"/><br><br>
            <input type="submit" name="submit" value="Inloggen"/>
        </form>
    </body>
</html>