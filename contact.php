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
        <link rel="stylesheet" type="text/css" href="CSS/contact.css">
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
                <a href="inloggen.php">Inloggen</a>
              </article>
          </section>
        </article>

        <div class="Formulier">
            <form method="POST" action="#">
          
              <label for="fname"><p>Voornaam:</p></label>
              <input type="text" id="fname" name="firstname" placeholder="Voornaam">
          
              <label for="lname"><p>Achternaam:</p></label>
              <input type="text" id="lname" name="lastname" placeholder="Achternaam">
          
              <label for="email"><p>E-mail:</p></label>
              <input type="email" id="Email"  name="e-mail" placeholder="Spartan@energy.nl">
          
              <label for="Onderwerp"><p>Wat is het onderwerp:</p></label>
              <select id="onderwerp" name="Onderwerp">
                <option value="1">Klacht</option>
                <option value="2">Vraag</option>
                <option value="3">Overige</option>
              </select>

              <textarea id="Review" name="Review" placeholder="Vul hier uw verhaal in..." style="height:200px"></textarea>

              <button onclick="myFunction()">Submit</button>
            </form>
          </div>



        <footer id="footer">
            <p id="copyright">©Copyright</p>
            <a href="https://www.instagram.com/spartanenergy_motorcross/" target="blank"><img id="insta" src="Images/Insta.png"></>
        </footer>

    </body>
</html>

<script>
    function myFunction() {
        alert("Uw reactie is verzonden");
    }
    </script>