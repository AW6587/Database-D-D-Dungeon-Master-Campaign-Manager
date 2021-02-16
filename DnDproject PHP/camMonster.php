<?php

$mysqli_connection = new MySQLi('vergil.u.washington.edu', 'root', '0505007pP', 'dungeon', 6498);
if($mysqli_connection->connect_error){
   echo "Not connected, error: ".$mysqli_connection->connect_error;
}


$Camp_name_mons = $_POST["Camp_name_mons"];
$Monster_name_camp = $_POST["Monster_name_camp"];

if (empty($Camp_name_mons)) {
  header("refresh:3; url=monster.php");
  echo "Campaign Cannot be Empty";
  echo "<br>";
  echo "Check Display Campaign";
  echo "<br>";
  echo "Going back to Monster.php";
  echo "<br>";
  die();
}

if (!empty($Camp_name_mons)) {
  $sqlResult = "SELECT Campaign_name FROM CAMPAIGN";
  $result = $mysqli_connection->query($sqlResult);
  $fore = TRUE;
  while ($row = $result->fetch_assoc()) {
    if ($row["Campaign_name"] == $Camp_name_mons) {
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

if (empty($Monster_name_camp)) {
  header("refresh:3; url=monster.php");
  echo "Monster name Cannot be Empty";
  echo "<br>";
  echo "Check Display Monster";
  echo "<br>";
  echo "Going back to Monster.php";
  echo "<br>";
  die();
}

if (!empty($Monster_name_camp)) {
  $sqlResult = "SELECT Monster_name FROM MONSTER";
  $result = $mysqli_connection->query($sqlResult);
  $fore1 = TRUE;
  while ($row = $result->fetch_assoc()) {
    if ($row["Monster_name"] == $Monster_name_camp) {
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

// INSERT statement
$sql = "INSERT INTO INCLUDE_CAMP_MONSTER (Camp_name_mons, Monster_name_camp)
VALUES ('$Camp_name_mons', '$Monster_name_camp')";

header("refresh:3; url=monster.php");

if (!mysqli_query($mysqli_connection,$sql)) {
  echo 'Not Inserted';
  echo "<br>";
} else {
  echo 'Inserted Successfully';
  echo "<br>";
}

 ?>
