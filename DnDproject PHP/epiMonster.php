<?php

$mysqli_connection = new MySQLi('vergil.u.washington.edu', 'root', '0505007pP', 'dungeon', 6498);
if($mysqli_connection->connect_error){
   echo "Not connected, error: ".$mysqli_connection->connect_error;
}


$Monster_epi = $_POST["Monster_epi"];
$Monster_name = $_POST["Monster_name"];
$Monster_level_epi = $_POST["Monster_level_epi"];
$Drop_item = $_POST["Drop_item"];

if (empty($Monster_epi)) {
  header("refresh:3; url=monster.php");
  echo "Episode Number Cannot be Empty";
  echo "<br>";
  echo "Check Display Episode";
  echo "<br>";
  echo "Going back to Monster.php";
  echo "<br>";
  die();
}

if (!empty($Monster_epi)) {
  $sqlResult = "SELECT Episode_num FROM EPISODE";
  $result = $mysqli_connection->query($sqlResult);
  $fore = TRUE;
  while ($row = $result->fetch_assoc()) {
    if ($row["Episode_num"] == $Monster_epi) {
      $fore = TRUE;
      break;
    } else {
      $fore = FALSE;
    }
  }
}

if (!$fore) {
  header("refresh:3; url=monster.php");
  echo "Foreign key Constraint";
  die();
}

if (empty($Monster_name)) {
  header("refresh:3; url=monster.php");
  echo "Monster Name Cannot be Empty";
  echo "<br>";
  echo "Check Display Monster";
  echo "<br>";
  echo "Going back to Monster.php";
  echo "<br>";
  die();
}

if (!empty($Monster_name)) {
  $sqlResult = "SELECT Monster_name FROM MONSTER";
  $result = $mysqli_connection->query($sqlResult);
  $fore1 = TRUE;
  while ($row = $result->fetch_assoc()) {
    if ($row["Monster_name"] == $Monster_name) {
      $fore1 = TRUE;
      break;
    } else {
      $fore1 = FALSE;
    }
  }
}

if (!$fore1) {
  header("refresh:3; url=monster.php");
  echo "Foreign key Constraint";
  die();
}

if (empty($Monster_level_epi)) {
  header("refresh:3; url=monster.php");
  echo "Monster Level cannot be Empty";
  echo "<br>";
  echo "Just put any number! (1~99)";
  echo "<br>";
  echo "Going back to Monster.php";
  echo "<br>";
  die();
}

if ($Monster_level_epi <= 0 || $Monster_level_epi >= 100) {
  header("refresh:3; url=monster.php");
  echo "Monster level Out of Range";
  echo "<br>";
  echo "Going back to monster.php";
  echo "<br>";
  die();
}

if (empty($Drop_item)) {
  header("refresh:3; url=monster.php");
  echo "Drop Item cannot be Empty";
  echo "<br>";
  echo "Any Item is Fine!";
  echo "<br>";
  echo "Going back to Monster.php";
  echo "<br>";
  die();
}

// INSERT statement
$sql = "INSERT INTO EPISODE_MONSTER (Monster_epi, Monster_name, Monster_level_epi, Drop_item)
VALUES ('$Monster_epi', '$Monster_name', '$Monster_level_epi', '$Drop_item')";

header("refresh:3; url=monster.php");

if (!mysqli_query($mysqli_connection,$sql)) {
  echo 'Not Inserted';
  echo "<br>";
} else {
  echo 'Inserted Successfully';
  echo "<br>";
}
?>
