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
            <article id="navbar">
                <nav id="nav">
                        <a class="navItem" href="home.html">Home</a>
                        <a class="navItem" href="assortiment.html">Assortiment</a>
                        <a class="navItem" href="evenementen.html">Evenementen</a>
                        <a class="navItem" href="contact.html">Contact</a>
                        <a id="inlog" href="inloggen.html">Inloggen</a>
                </nav>
            </article>
        </article>

        <div class="Formulier">
            <img id="Blikje" src="Images/groot.png">
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