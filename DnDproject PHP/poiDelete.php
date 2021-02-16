<?php

$mysqli_connection = new MySQLi('vergil.u.washington.edu', 'root', '0505007pP', 'dungeon', 6498);
if($mysqli_connection->connect_error){
   echo "Not connected, error: ".$mysqli_connection->connect_error;
}

$Location_name = $_POST["Location_name"];


// Check epi
if (!empty($Location_name)) {
  $sqlResult = "SELECT Episode_location FROM EPISODE";
  $result = $mysqli_connection->query($sqlResult);
  $fore3 = TRUE;
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      if ($row["Episode_location"] == $Location_name) {
        $fore3 = FALSE;
        break;
      }
    }
  } else {
    $fore3 = TRUE;
  }
}

if (!$fore3) {
  header("refresh:3; url=geo.php");
  echo "Delete the Character First Before you Delete Player";
  die();
}

if (!empty($Location_name)) {
  $sqlResult = "SELECT Location_name FROM POINT_OF_INTEREST";
  $result = $mysqli_connection->query($sqlResult);
  $fore2 = TRUE;
  // if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      if ($row["Location_name"] = $Location_name) {
        $sql = "DELETE FROM POINT_OF_INTEREST WHERE Location_name = $Location_name";
        $fore2 = TRUE;
        break;
      } else {
        $fore2 = FALSE;
      }
    }
  // }
}

if (!$fore2) {
  header("refresh:3; url=geo.php");
  echo "Location name Does not Exist";
  die();
}

header("refresh:2; url=geo.php");
if (!mysqli_query($mysqli_connection,$sql)) {
  echo 'Not Delete';
  echo "<br>";
} else {
  echo 'Delete Successfully';
  echo "<br>";
}


 ?>
