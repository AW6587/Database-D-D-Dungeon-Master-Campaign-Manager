<?php

$mysqli_connection = new MySQLi('vergil.u.washington.edu', 'root', '0505007pP', 'dungeon', 6498);
if($mysqli_connection->connect_error){
   echo "Not connected, error: ".$mysqli_connection->connect_error;
}

$Camp_name = $_POST["Camp_name"];
$Npc_name = $_POST["Npc_name"];

if (empty($Camp_name)) {
  header("refresh:2; url=npc.php");
  echo "Camp name cannot be empty";
  echo "<br>";
  echo "Display Camapaign to type Campaign name";
  echo "<br>";
  echo "Going back to npc.php";
  die();
}

if (!empty($Camp_name)) {
  $sqlResult = "SELECT Campaign_name FROM CAMPAIGN";
  $result = $mysqli_connection->query($sqlResult);
  $fore = TRUE;
  while ($row = $result->fetch_assoc()) {
    if ($row["Campaign_name"] == $Camp_name) {
      $fore = TRUE;
      break;
    } else {
      $fore = FALSE;
    }
  }
}

if (!$fore) {
  header("refresh:3; url=npc.php");
  echo "Foreign key Constraint";
  die();
}

if (empty($Npc_name)) {
  header("refresh:2; url=npc.php");
  echo "NPC name cannot be empty";
  echo "<br>";
  echo "Display NPC to type NPC name";
  echo "<br>";
  echo "Going back to npc.php";
  die();
}

if (!empty($Npc_name)) {
  $sqlResult = "SELECT Npc_name FROM NON_PLAYER_CHARACTER";
  $result = $mysqli_connection->query($sqlResult);
  $fore1 = TRUE;
  while ($row = $result->fetch_assoc()) {
    if ($row["Npc_name"] == $Npc_name) {
      $fore1 = TRUE;
      break;
    } else {
      $fore1 = FALSE;
    }
  }
}

if (!$fore1) {
  header("refresh:3; url=npc.php");
  echo "Foreign key Constraint";
  die();
}
// insert sql
$sql = "INSERT INTO INCLUDE_CAMP_NPC (Camp_name, Npc_name)
VALUES ('$Camp_name', '$Npc_name')";
header("refresh:2; url=npc.php");
if (!mysqli_query($mysqli_connection,$sql)) {
  echo 'Not Inserted';
  echo "<br>";
} else {
  echo 'Inserted Successfully';
  echo "<br>";
}

 ?>
