<?php

$mysqli_connection = new MySQLi('vergil.u.washington.edu', 'root', '0505007pP', 'dungeon', 6498);
if($mysqli_connection->connect_error){
   echo "Not connected, error: ".$mysqli_connection->connect_error;
}

// select the Database
$Player_id = $_POST["Player_id"];
$Player_name = $_POST["Player_name"];

if (!empty($Player_id)) {
  $sqlResult = "SELECT Charac_player_id FROM PCHARACTER";
  $result = $mysqli_connection->query($sqlResult);
  $fore1 = TRUE;
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      if ($row["Charac_player_id"] == $Player_id) {
        $fore1 = FALSE;
        break;
      } else {
        $fore1 = TRUE;
      }
    }
  } else {
    $fore1 = TRUE;
  }
}

if (!$fore1) {
  header("refresh:3; url=main.php");
  echo "Delete the Character First Before you Delete Player";
  die();
}


// dont touch below;
if (!empty($Player_id)) {
  $sqlResult = "SELECT Player_id FROM PLAYER";
  $result = $mysqli_connection->query($sqlResult);
  $fore = TRUE;
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      if ($row["Player_id"] == $Player_id) {
        $sql = "DELETE FROM PLAYER WHERE Player_id = $Player_id";
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
  echo "Player ID NOT FOUND";
  die();
}

// if (!empty($Player_name)) {
//   $sqlResult = "SELECT Player_name FROM PLAYER";
//   $result = $mysqli_connection->query($sqlResult);
//   $fore2 = TRUE;
//   while ($row = $result->fetch_assoc()) {
//     if ($row["Player_name"] == $Player_name) {
//       $sql = "DELETE FROM PLAYER WHERE Player_name = $Player_name";
//       $fore2 = TRUE;
//       break;
//     } else {
//       $fore2 = FALSE;
//     }
//   }
// }
//
// if (!$fore2) {
//   header("refresh:3; url=main.php");
//   echo "Player name not Found";
//   die();
// }

header("refresh:2; url=main.php");
if (!mysqli_query($mysqli_connection,$sql)) {
  echo 'Not Delete';
  echo "<br>";
} else {
  echo 'Delete Successfully';
  echo "<br>";
}

 ?>
