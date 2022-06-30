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

        <section>
          <h1 id="titel1">Ons product</h1><hr class="hr1">
          <section id="row1">
            <article id="img1">
              <img id="i1" src="Images/blikjes_Strawberry.png">
            </article>
            <article id="text1">
              <h1 id="t1">Welkom!</h1>
              <p id="paragraaf">Bij Spartan energy zetten wij ons on voor de klant, zodat we een positieve indruk achterlaten op hun levenstijl. Ons team bestaat uit jonge zielen die zich elke dag inzetten om ons brand het beste brand op de market te maken. Samen strijden wij, Together we are warriors, Together we are Spartans. </p>
            </article>
          </section>
          <h1 id="titel2">Komende events</h1><hr class="hr2">
        </section>
        <section id="events">
          <img id="event1" src="Images/Evenement1.png">
          <img id="event3" src="Images/Evenement3.png"> 
          <img id="event2" src="Images/Evenement2.png">
        </section>
        </article>
        <footer id="footer">
            <p id="copyright">©Copyright</p>
            <a href="https://www.instagram.com/spartanenergy_motorcross/" target="blank"><img id="insta" src="Images/Insta.png"></>
        </footer>
        
<!--Script Hamburger Menu -->
<script>
/* Open when someone clicks on the span element */
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
/* Alert */
function myFunction() {
        alert("Uw reactie is verzonden");
    }

</script>
        
    </body>
</html>