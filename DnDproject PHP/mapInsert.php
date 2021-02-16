<?php

$mysqli_connection = new MySQLi('vergil.u.washington.edu', 'root', '0505007pP', 'dungeon', 6498);
if($mysqli_connection->connect_error){
   echo "Not connected, error: ".$mysqli_connection->connect_error;
}

$Map_number = $_POST["Map_number"];
$Map_name = $_POST["Map_name"];

// check
if (empty($Map_name)) {
  header("refresh:2; url=geo.php");
  echo "Map name is Primary Key!";
  echo "<br>";
  echo "It cannot be Empty";
  echo "Going back to geo.php";
  die();
}

if (empty($Map_number)) {
  header("refresh:2; url=geo.php");
  echo "Map number cannot be Empty";
  echo "<br>";
  echo "Going back to geo.php";
  die();
}

if (!empty($Map_number)) {
  if ($Map_number <= 0 || $Map_number >= 100) {
    header("refresh:2; url=geo.php");
    echo "Range Map number Invalid";
    echo "<br>";
    echo "Going back to geo.php";
    die();
  }
}

$sql = "INSERT INTO MAP (Map_number, Map_name)
VALUES ('$Map_number', '$Map_name')";
header("refresh:2; url=geo.php");
if (!mysqli_query($mysqli_connection,$sql)) {
  echo 'Not Inserted';
  echo "<br>";
} else {
  echo 'Inserted Successfully';
  echo "<br>";
}
 ?>
