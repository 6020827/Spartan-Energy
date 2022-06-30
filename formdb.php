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
            header("Location/.../home.php");
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
        <meta name="author" content="Tim van Duijvenvoorde, Bjorn Borst, Dylan Hillebrand, Chloë Woldberg">
        <title>Spartan</title>
        <link rel="stylesheet" type="text/css" href="CSS/formdb.css">
        <link href="https://fonts.googleapis.com/css2?family=GFS+Neohellenic&family=Roboto:wght@100&display=swap" rel="stylesheet"> 
    </head>
    <body>
        <!--Navigatie-->
        <article id="header">
          <article id="logo">
            <a href="home.php"><img id="logoImage" src="Images/Logo2.png"></a>
          </article>
          <section id="navbar">
            <a href="home.php">Home</a>
          <div class="dropdown">
            <button class="dropbtn">Assortiment</button>
          <div class="dropdown-content">
            <a href="assortiment.php">Assortiment</a>
            <a href="aanbiedingen.php">Aanbiedingen</a>
          </div>
          </div>
          <div class="dropdown">
            <button class="dropbtn">Evenementen</button>
          <div class="dropdown-content">
            <a href="evenementen.php">Evenementen</a>
            <a href="Artiesten.php">Artiesten</a>
          </div>
          </div>
            <a href="contact.php">Contact</a>
          <article id="inlog">
            <a href="formdb.php">Inloggen</a>
          </article>
          </section>

          <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <div class="overlay-content">
            <a href="home.php">Home</a>
            <a href="assortiment.php">Assortiment</a>
            <a href="aanbiedingen.php">Aanbiedingen</a>
            <a href="evenementen.php">Evenementen</a>
            <a href="Artiesten.php">Artiesten</a>
            <a href="contact.php">Contact</a>
            <a href="formdb.php">Inloggen</a>
          </div>
      </div>
          <span id="menu" style="font-size:100px;cursor:pointer" onclick="openNav()">&#9776;</span>

      </article>
          <article>
          <section>
        </article>
        <h1>Inloggen</h1>
        <form method="POST">
            <label id="label">Gebruikersnaam:</label>
            <br><input type="text" name="username">
            <br>
            <label>Wachtwoord:</label>
            <br><input type="password" name="password">
            <br>
            <input type="submit" name="submit" value="Inloggen">
        </form>     
        <footer id="footer">
            <p id="copyright">©Copyright</p>
            <a href="https://www.instagram.com/spartanenergy_motorcross/" target="blank"><img id="insta" src="Images/Insta.png"></>
        </footer>
        
        <script>
/* Open when someone clicks on the span element */
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}


</script>

    </body>
</html>