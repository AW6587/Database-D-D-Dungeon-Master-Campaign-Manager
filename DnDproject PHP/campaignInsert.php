<?php

$mysqli_connection = new MySQLi('vergil.u.washington.edu', 'root', '0505007pP', 'dungeon', 6498);
if($mysqli_connection->connect_error){
   echo "Not connected, error: ".$mysqli_connection->connect_error;
}

$Campaign_name = $_POST["Campaign_name"];
$Cam_map_name = $_POST["Cam_map_name"];
$Cam_master = $_POST["Cam_master"];
$Cam_player = $_POST["Cam_player"];
//
if (empty($Campaign_name)) {
  header("refresh:2; url=geo.php");
  echo "Campaign Name cannot be Empty";
  echo "<br>";
  echo "Going back to geo.php";
  die();
}
//
if (empty($Cam_map_name)) {
  header("refresh:2; url=geo.php");
  echo "Campaign Map name cannot be Empty";
  echo "<br>";
  echo "Going back to geo.php";
  die();
}
// camp map name foreign key Constraint
if (!empty($Cam_map_name)) {
  $sqlResult = "SELECT Map_name FROM MAP";
  $result = $mysqli_connection->query($sqlResult);
  $fore = TRUE;
  while ($row = $result->fetch_assoc()) {
    if ($row["Map_name"] == $Cam_map_name) {
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

if (empty($Cam_master)) {
  header("refresh:2; url=geo.php");
  echo "Campaign Master cannot be Empty";
  echo "<br>";
  echo "Going back to geo.php";
  die();
}
//
if (empty($Cam_player)) {
  header("refresh:2; url=geo.php");
  echo "Campaign Player cannot be Empty";
  echo "<br>";
  echo "Going back to geo.php";
  die();
}

if (!empty($Cam_player)) {
  $sqlResult = "SELECT Player_id FROM PLAYER";
  $result = $mysqli_connection->query($sqlResult);
  $fore1 = TRUE;
  while ($row = $result->fetch_assoc()) {
    if ($row["Player_id"] == $Cam_player) {
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
// end of foreign key for player


// insert data to database
$sql = "INSERT INTO CAMPAIGN (Campaign_name, Cam_map_name, Cam_master, Cam_player)
VALUES ('$Campaign_name', '$Cam_map_name', '$Cam_master', '$Cam_player')";
header("refresh:2; url=geo.php");
if (!mysqli_query($mysqli_connection,$sql)) {
  echo 'Not Inserted';
  echo "<br>";
} else {
  echo 'Inserted Successfully';
  echo "<br>";
}

 ?>
