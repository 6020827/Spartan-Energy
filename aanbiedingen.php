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
        <link rel="stylesheet" type="text/css" href="CSS/aanbiedingen.css">
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

      

<!--Aanbiedingen-->
<h1 id="titel">Aanbiedingen</h1><hr class="hr1">

<section id="Aanbiedingen">
          <article class="foto">
              <img id="smaak1" src="Images/blikL_Strawberry.png">
              <div class="tekst fade"><h1>Strawberry</h1>
              <br>
              <p>
              Onze Energy drank is goed voor jong en oud, onze Energy drank bevat: Cafeïne, Taurine, Vitamine B, Suiker, Water, Aarbeiextract
              </p>
              <br>
              <h3>2 voor €1,99</h3>
            </div>
          </article>
          <article class="foto">
              <img id="smaak2" src="Images/blikL_Blueberry.png">
              <div class="tekst fade"><h1>Blueberry</h1>
              <br>
              <p>
              Onze Energy drank is goed voor jong en oud, onze Energy drank bevat: Cafeïne, Taurine, Vitamine B, Suiker, Water, Bosbesextract
              </p>
              <br>
              <h3>2 voor €1,99</h3>
            </div>
          </article>
          <article class="foto">
              <img id="smaak3" src="Images/blikL_Coconut.png">
              <div class="tekst fade"><h1>Coconut</h1>
              <br>
              <p>
              Onze Energy drank is goed voor jong en oud, onze Energy drank bevat: Cafeïne, Taurine, Vitamine B, Suiker, Water, Kokosnootextract
              </p>
              <br>
              <h3>2 voor €1,99</h3>
              </div>
          </article>
</section>

<!--Komende aanbiedingen-->
<h1 id="titel">Komende Aanbiedingen</h1><hr class="hr2">

<section id="Aanbiedingen">
          <article class="foto">
              <img id="smaak1" src="Images/blikL_pineapple.png">
              <div class="tekst fade"><h1>Pineapple</h1>
              <br>
              <p>
              Onze Energy drank is goed voor jong en oud, onze Energy drank bevat: Cafeïne, Taurine, Vitamine B, Suiker, Water, Ananasextract
              </p>
              <br>
              <h3>3 voor €2,99</h3>
            </div>
          </article>
          <article class="foto">
              <img id="smaak2" src="Images/blikL_Rasberry.png">
              <div class="tekst fade"><h1>Raspberry</h1>
              <br>
              <p>
              Onze Energy drank is goed voor jong en oud, onze Energy drank bevat: Cafeïne, Taurine, Vitamine B, Suiker, Water, Framboosextract
              </p>
              <br>
              <h3>3 voor €2,99</h3>
            </div>
          </article>
          <article class="foto">
              <img id="smaak3" src="Images/blikL_Lime.png">
              <div class="tekst fade"><h1>Lime</h1>
              <br>
              <p>
              Onze Energy drank is goed voor jong en oud, onze Energy drank bevat: Cafeïne, Taurine, Vitamine B, Suiker, Water, Limoenextract
              </p>
              <br>
              <h3>3 voor €2,99</h3>
              </div>
          </article>
</section>

<!--footer-->
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

</script>

</body>
</html>