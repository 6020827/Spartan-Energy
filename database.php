<?php
//stap 1
$servername = "localhost";
$username = "root";
$password = "root";
$database = "phples";
$conn = new mysqli($servername, $username, $password, $database);
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
//stap 2,3 en 4
$sql = "SELECT * FROM gebruikers";
if($result = $conn->query($sql)){
    echo "Query gelukt";
}
while($row = $result->fetch_row()){
    echo $row[0]." ".$row[1]." ".$row[2]."<br/>";
}
$result->close(); //4
//stap 5
$conn->close();
?>