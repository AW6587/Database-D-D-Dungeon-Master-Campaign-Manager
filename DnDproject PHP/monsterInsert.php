<?php
$mysqli_connection = new MySQLi('vergil.u.washington.edu', 'root', '0505007pP', 'dungeon', 6498);
if($mysqli_connection->connect_error){
   echo "Not connected, error: ".$mysqli_connection->connect_error;
}


$Monster_name = $_POST["Monster_name"];
$Monster_level = $_POST["Monster_level"];
$Monster_type = $_POST["Monster_type"];

if (empty($Monster_name)) {
  header("refresh:3; url=monster.php");
  echo "Monster Name can not be Empty";
  echo "<br>";
  echo "Going back to Monster.php";
  echo "<br>";
  die();
}

if (empty($Monster_level)) {
  header("refresh:3; url=monster.php");
  echo "Monster level cannot be empty";
  echo "<br>";
  echo "Going back to monster.php";
  echo "<br>";
  die();
}
if ($Monster_level <= 0 || $Monster_level >= 100) {
  header("refresh:3; url=monster.php");
  echo "Monster level Out of Range";
  echo "<br>";
  echo "Going back to monster.php";
  echo "<br>";
  die();
}

if (empty($Monster_type)) {
  header("refresh:3; url=monster.php");
  echo "Monster Type can not be Empty";
  echo "<br>";
  echo "Going back to monster.php";
  echo "<br>";
  die();
}

if (($Monster_type != 'animal') && ($Monster_type != 'beast') && ($Monster_type != 'dragon') && ($Monster_type != 'magical beast') && ($Monster_type != 'undead')) {
  header("refresh:3; url=monster.php");
  echo "Not Appropriate Monster Type";
  echo "<br>";
  echo "animal/beast/dragon/magical beast/undead";
  echo "<br>";
  echo "Going back to monster.php";
  die();
}

// INSERT statement
$sql = "INSERT INTO MONSTER (Monster_name, Monster_level, Monster_type)
VALUES ('$Monster_name', '$Monster_level', '$Monster_type')";

header("refresh:3; url=monster.php");

if (!mysqli_query($mysqli_connection,$sql)) {
  echo 'Not Inserted';
  echo "<br>";
} else {
  echo 'Inserted Successfully';
  echo "<br>";
}

 ?>
