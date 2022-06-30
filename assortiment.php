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
        <link rel="stylesheet" type="text/css" href="CSS/assortiment.css">
        <link href="https://fonts.googleapis.com/css2?family=GFS+Neohellenic&family=Roboto:wght@100&display=swap" rel="stylesheet"> 
    </head>
    <body>
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

        <div class="slideshow-container">

<div class="mySlides fade">
  <img src="images/blikjess_Strawberry.png" style="width:90%">
</div>

<div class="mySlides fade">
  <img src="images/blikjess_Blueberry.png" style="width:90%"></div>

<div class="mySlides fade">
  <img src="images/blikjess_Coconut.png" style="width:90%"></div>

<div class="mySlides fade">
  <img src="images/blikjess_Lime.png" style="width:90%"></div>

<div class="mySlides fade">
  <img src="images/blikjess_Pineapple.png" style="width:90%"></div>

<div class="mySlides fade">
  <img src="images/blikjess_Rasberry.png" style="width:90%"></div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); 
}

/* Hamburger Menu */

/* Open when someone clicks on the span element */
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>

        <footer id="footer">
            <p id="copyright">©Copyright</p>
            <a href="https://www.instagram.com/spartanenergy_motorcross/" target="blank"><img id="insta" src="Images/Insta.png"></>
        </footer>
        
    </body>
</html>