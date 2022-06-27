<?php
   if(isset($_POST["submitbutton"])){

    $voornaam = $_POST["voornaam"];
    $tussenvoegsel = $_POST["tussenvoegsel"];
    $achternaam = $_POST["achternaam"];

    if(!empty($voornaam) && !empty($achternaam)){
        require "db.inc.php";

        $sql = "INSERT INTO Users (voornaam, tussenvoegsel, achternaam) VALUES ('$voornaam', '$tussenvoegsel', '$achternaam')";

        $conn->query($sql);

        header("Location: ../inloggen.php");
        
    }
}

    header("Location: ../index.php");

?>
