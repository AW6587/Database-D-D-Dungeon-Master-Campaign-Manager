<?php

$mysqli_connection = new MySQLi('vergil.u.washington.edu', 'root', '0505007pP', 'dungeon', 6498);
if($mysqli_connection->connect_error){
   echo "Not connected, error: ".$mysqli_connection->connect_error;
}

$Campai_name = $_POST["Campai_name"];
$Episode_location = $_POST["Episode_location"];

if (empty($Campai_name)) {
  header("refresh:2; url=geo.php");
  echo "Campaign Name cannot be Empty";
  echo "<br>";
  echo "Check Campaign Display to type data";
  echo "<br>";
  echo "Going back to geo.php";
  die();
}
if (!empty($Campai_name)) {
  $sqlResult = "SELECT Campaign_name FROM CAMPAIGN";
  $result = $mysqli_connection->query($sqlResult);
  $fore = TRUE;
  while ($row = $result->fetch_assoc()) {
    if ($row["Campaign_name"] == $Campai_name) {
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

if (empty($Episode_location)) {
  header("refresh:2; url=geo.php");
  echo "Episode location cannot be empty";
  echo "<br>";
  echo "Check Point of Interest Display to type data";
  echo "<br>";
  echo "Going back to geo.php";
  die();
}

if (!empty($Episode_location)) {
  $sqlResult = "SELECT Location_name FROM POINT_OF_INTEREST";
  $result = $mysqli_connection->query($sqlResult);
  $fore1 = TRUE;
  while ($row = $result->fetch_assoc()) {
    if ($row["Location_name"] == $Episode_location) {
      $fore1 = TRUE;
      break;
    } else {
      $fore1 = FALSE;
    }
  }
}

if (!$fore1) {
  header("refresh:3; url=geo.php");
  echo "Foreign key Constraint";
  die();
}

// query
$sql = "INSERT INTO EPISODE (Campai_name, Episode_location)
VALUES ('$Campai_name', '$Episode_location')";
header("refresh:2; url=geo.php");
if (!mysqli_query($mysqli_connection,$sql)) {
  echo 'Not Inserted';
  echo "<br>";
} else {
  echo 'Inserted Successfully';
  echo "<br>";
}

 ?>
