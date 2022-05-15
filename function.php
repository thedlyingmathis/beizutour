<?php

function details($name) {
    
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "beizutour";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, name, adresse, plz, ort, beschreibung, typ FROM beiz WHERE name = '$name'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    return("Name: " . $row["name"] . " Adresse: " . $row["adresse"] . " Plz: " . $row["plz"] . " Ort: " . $row["ort"] . " Typ: " . $row['typ']);
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
}

?>