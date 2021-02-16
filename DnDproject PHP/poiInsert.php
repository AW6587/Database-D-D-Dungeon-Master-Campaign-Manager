<?php

$mysqli_connection = new MySQLi('vergil.u.washington.edu', 'root', '0505007pP', 'dungeon', 6498);
if($mysqli_connection->connect_error){
   echo "Not connected, error: ".$mysqli_connection->connect_error;
}

$Location_name = $_POST["Location_name"];
$Map_location_name = $_POST["Map_location_name"];

if (empty($Location_name)) {
  header("refresh:2; url=geo.php");
  echo "Location Name cannot be Empty";
  echo "<br>";
  echo "Going back to geo.php";
  die();
}

if (empty($Map_location_name)) {
  header("refresh:2; url=geo.php");
  echo "Map location name cannot be Empty";
  echo "<br>";
  echo "Check Map Display to see name";
  echo "Going back to geo.php";
  die();
}

if (!empty($Map_location_name)) {
  $sqlResult = "SELECT Map_name FROM MAP";
  $result = $mysqli_connection->query($sqlResult);
  $fore = TRUE;
  while ($row = $result->fetch_assoc()) {
    if ($row["Map_name"] == $Map_location_name) {
      $fore = TRUE;
      break;
    } else {
      $fore = FALSE;
    }
  }
}

if (!$fore) {
  header("refresh:3; url=geo.php");
  echo "Foreign key Constraint";
  die();
}

// query
$sql = "INSERT INTO POINT_OF_INTEREST(Location_name, Map_location_name)
VALUES ('$Location_name', '$Map_location_name')";
header("refresh:2; url=geo.php");
if (!mysqli_query($mysqli_connection,$sql)) {
  echo 'Not Inserted';
  echo "<br>";
} else {
  echo 'Inserted Successfully';
  echo "<br>";
}

 ?>
