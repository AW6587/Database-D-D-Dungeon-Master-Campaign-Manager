<?php

$mysqli_connection = new MySQLi('vergil.u.washington.edu', 'root', '0505007pP', 'dungeon', 6498);
if($mysqli_connection->connect_error){
   echo "Not connected, error: ".$mysqli_connection->connect_error;
}

$Character_name = $_POST["Character_name"];
$Charac_player_id = $_POST["Charac_player_id"];
// Character name
if (!empty($Character_name)) {
  $sqlResult = "SELECT Character_name FROM PCHARACTER";
  $result = $mysqli_connection->query($sqlResult);
  $fore = TRUE;
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      if ($row["Character_name"] == $Character_name) {
        $sql = "DELETE FROM PCHARACTER WHERE Character_name = $Character_name";
        $fore = TRUE;
        break;
      } else {
        $fore = FALSE;
      }
    }
  } else {
    $fore = FALSE;
  }
}

if (!$fore) {
  header("refresh:3; url=main.php");
  echo "Character Not Found";
  die();
}
// end of character

if (!empty($Charac_player_id)) {
  $sqlResult1 = "SELECT Player_id FROM PLAYER";
  $result1 = $mysqli_connection->query($sqlResult1);
  $fore1 = TRUE;
  if ($result->num_rows > 0) {
    while ($row = $result1->fetch_assoc()) {
      if ($row["Player_id"] == $Charac_player_id) {
        $sql = "DELETE FROM PCHARACTER WHERE Charac_player_id = $Charac_player_id";
        $fore1 = TRUE;
        break;
      } else {
        $fore1 = FALSE;
      }
    }
  } else {
    $fore1 = FALSE;
  }
}

if (!$fore1) {
  header("refresh:3; url=main.php");
  echo "Player Not Found";
  die();
}

header("refresh:2; url=main.php");
if (!mysqli_query($mysqli_connection,$sql)) {
  echo 'Not Delete';
  echo "<br>";
} else {
  echo 'Delete Successfully';
  echo "<br>";
}

 ?>
