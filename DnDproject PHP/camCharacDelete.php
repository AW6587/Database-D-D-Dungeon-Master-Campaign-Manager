<?php

$mysqli_connection = new MySQLi('vergil.u.washington.edu', 'root', '0505007pP', 'dungeon', 6498);
if($mysqli_connection->connect_error){
   echo "Not connected, error: ".$mysqli_connection->connect_error;
}

$Campai_name = $_POST["Campai_name"];
$Charc_name = $_POST["Charc_name"];

if (!empty($Campai_name)) {
  $sqlResult = "SELECT "
}

if (!empty($Campaign_name)) {
  $sqlResult = "SELECT Campaign_name FROM CAMPAIGN";
  $result = $mysqli_connection->query($sqlResult);
  $fore1 = TRUE;
  while ($row = $result->fetch_assoc()) {
    if ($row["Campaign_name"] == $Campaign_name) {
      $sql = "DELETE FROM CAMPAIGN WHERE Campaign_name = $Campaign_name";
      $fore1 = TRUE;
      break;
    } else {
      $fore1 = FALSE;
    }
  }
}

if (!$fore1) {
  header("refresh:3; url=geo.php");
  echo "Campaign name Does not Exist";
  die();
}
 ?>
