<?php

// connection
// connect or die
// connection
$mysqli_connection = new MySQLi('vergil.u.washington.edu', 'root', '0505007pP', 'dungeon', 6498);
if($mysqli_connection->connect_error){
   echo "Not connected, error: ".$mysqli_connection->connect_error;
}

$Character_name = $_POST["Character_name"];
$Charac_player_id = $_POST["Charac_player_id"];
$Charac_level = $_POST["Charac_level"];
$Charac_passive_perception = $_POST["Charac_passive_perception"];

//  chracter name cannot be null
if (empty($Character_name)) {
  header("refresh:1; url=main.php");
  echo "Name can not be Empty";
  echo "<br>";
  echo "Going back to Main.php";
  echo "<br>";
  die();
}
// character id cannot be null
if (empty($Charac_player_id)) {
  header("refresh:3; url=main.php");
  echo "Player id can not be Empty";
  echo "<br>";
  echo "Check Player ID on Display Player";
  echo "<br>";
  echo "Going back to Main.php....progressing";
  echo "<br>";
  die();
}

if (!empty($Charac_player_id)) {
  $sqlResult = "SELECT Player_id FROM PLAYER";
  $result = $mysqli_connection->query($sqlResult);
  $fore = TRUE;
  while ($row = $result->fetch_assoc()) {
    if ($row["Player_id"] == $Charac_player_id) {
      $fore = TRUE;
      break;
    } else {
      $fore = FALSE;
    }
  }
}

if (!$fore) {
  header("refresh:3; url=main.php");
  echo "Foreign key Constraint";
  die();
}

// character level cannot be null
if (empty($Charac_level)) {
  header("refresh:3; url=main.php");
  echo "Player Level cannot be Empty";
  echo "<br>";
  echo "Going back to Main.php";
  echo "<br>";
  die();
}
if ($Charac_level <= 0 || $Charac_level >= 100) {
  header("refresh:3; url=main.php");
  echo "Level Range Invalid";
  echo "<br>";
  die();
}
// character passive perception cannot be NULL
if (empty($Charac_passive_perception)) {
  header("refresh:3; url=main.php");
  echo "Player passive perception cannot be Empty";
  echo "<br>";
  echo "Going back to Main.php";
  echo "<br>";
  die();
}
if ($Charac_passive_perception <= 0 || $Charac_passive_perception >= 100) {
  header("refresh:3; url=main.php");
  echo "Perception Range Invalid";
  echo "<br>";
  die();
}
// insert sql

$sql = "INSERT INTO PCHARACTER (Character_name, Charac_player_id, Charac_level, Charac_passive_perception)
VALUES ('$Character_name', '$Charac_player_id', '$Charac_level', '$Charac_passive_perception')";
header("refresh:3; url=main.php");
if (!mysqli_query($mysqli_connection,$sql)) {
  echo 'Not Inserted';
  echo "<br>";
} else {
  echo "Inserted";
  echo "<br>";
}

 ?>
