<?php
$password = "someone";

$option = [
    'cost' => 9
];

$pass = password_hash($password, PASSWORD_BCRYPT, $option);
echo "Dit is de password = " . $pass;
echo "<br><br>";
echo "Wachtwoord is goed";

?>