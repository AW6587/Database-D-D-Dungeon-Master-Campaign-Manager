<?php

$mysqli_connection = new MySQLi('vergil.u.washington.edu', 'root', '0505007pP', 'dungeon', 6498);
if($mysqli_connection->connect_error){
   echo "Not connected, error: ".$mysqli_connection->connect_error;
}

$Epi_npc_name = $_POST["Epi_npc_name"];
$Epi_num_npc = $_POST["Epi_num_npc"];
$Npc_level = $_POST["Npc_level"];
$Quest_reward = $_POST["Quest_reward"];

if (empty($Epi_npc_name)) {
  header("refresh:2; url=npc.php");
  echo "NPC Name cannot be Empty";
  echo "<br>";
  echo "Check NPC Display to type";
  echo "<br>";
  echo "Going back to npc.php";
  die();
}

if (!empty($Epi_npc_name)) {
  $sqlResult = "SELECT Npc_name FROM NON_PLAYER_CHARACTER";
  $result = $mysqli_connection->query($sqlResult);
  $fore = TRUE;
  while ($row = $result->fetch_assoc()) {
    if ($row["Npc_name"] == $Epi_npc_name) {
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

if (empty($Epi_num_npc)) {
  header("refresh:2; url=npc.php");
  echo "Episode Number cannot be Empty";
  echo "<br>";
  echo "Check Episode Display to type";
  echo "<br>";
  echo "Going back to npc.php";
  die();
}

if (!empty($Epi_num_npc)) {
  $sqlResult = "SELECT Episode_num FROM EPISODE";
  $result = $mysqli_connection->query($sqlResult);
  $fore1 = TRUE;
  while ($row = $result->fetch_assoc()) {
    if ($row["Episode_num"] == $Epi_num_npc) {
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

if (empty($Npc_level)) {
  header("refresh:2; url=npc.php");
  echo "Npc level cannot be empty";
  echo "<br>";
  echo "Going back to npc.php";
  die();
}
if ($Npc_level <= 0 || $Npc_level >= 100) {
  header("refresh:3; url=npc.php");
  echo "Level Range Invalid";
  echo "<br>";
  die();
}

if (empty($Quest_reward)) {
  header("refresh:2; url=npc.php");
  echo "Quest Reward cannot be empty";
  echo "<br>";
  echo "Going back to npc.php";
  die();
}

if ($Quest_reward <= 0) {
  header("refresh:3; url=npc.php");
  echo "Reward should be bigger than 0";
  echo "<br>";
  die();
}

// insert sql
$sql = "INSERT INTO EPISODE_NPC (Epi_npc_name, Epi_num_npc, Npc_level, Quest_reward)
VALUES ('$Epi_npc_name', '$Epi_num_npc', '$Npc_level', '$Quest_reward')";
header("refresh:2; url=npc.php");
if (!mysqli_query($mysqli_connection,$sql)) {
  echo 'Not Inserted';
  echo "<br>";
} else {
  echo 'Inserted Successfully';
  echo "<br>";
}
 ?>
