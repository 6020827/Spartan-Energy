<?php 
    $melding = "";
    if(isset($_POST['submit'])){
        if(!empty($_POST['voornaam'])){

            $voornaam = $_POST['voornaam'];
            $tussenvoegsel = $_POST['tussenvoegsel'];
            $achternaam = $_POST['achternaam'];
            $telefoonnummer = $_POST['telefoonnummer'];
            $email = $_POST['email'];

            require("dbconnect.php");
            function safe($waarde){
                $waarde = trim($waarde);
                $waarde = stripslashes($waarde);
                $waarde = htmlspecialchars($waarde);
                return $waarde;
            }

            $voornaam = safe($_POST['voornaam']);
            $voornaam = $conn->real_escape_string($voornaam);
            
            $tussenvoegsel = safe($_POST['tussenvoegsel']);
            $tussenvoegsel = $conn->real_escape_string($tussenvoegsel);

            $achternaam = safe($_POST['achternaam']);
            $achternaam = $conn->real_escape_string($achternaam);

            $telefoonnummer = safe($_POST['telefoonnummer']);
            $telefoonnummer = $conn->real_escape_string($telefoonnummer);

            $email = safe($_POST['email']);
            $email = $conn->real_escape_string($email);

            $sql = "INSERT INTO customers (vnaam, tussenv, anaam, telnr, email) VALUES ('".$voornaam."', '".$tussenvoegsel."', '".$achternaam."', '".$telefoonnummer."','".$email."')";
            if ($conn->query($sql)) {
                $melding = "Toegevoegd";
            }
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
        <link rel="stylesheet" type="text/css" href="CSS/home.css">
        <link href="https://fonts.googleapis.com/css2?family=GFS+Neohellenic&family=Roboto:wght@100&display=swap" rel="stylesheet"> 
    </head>
    <body>
        <article id="header">
            <article id="logo">
                <a href="home.html"><img id="logoImage" src="Images/Logo2.png"></a>
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
        </article>
        <form>
            <label>Gebruikersnaam:</label>
            <br><input type="text" name="username"></input>
            <br><label>Wachtwoord:</label>
            <br><input type="password" name="password"></input>
            <br><input type="submit" name="submit" value="registreren"></input>
        </form>
        <footer id="footer">
            <p id="copyright">©Copyright</p>
            <a href="https://www.instagram.com/spartanenergy_motorcross/" target="blank"><img id="insta" src="Images/Insta.png"></>
        </footer>
        
    </body>
</html>