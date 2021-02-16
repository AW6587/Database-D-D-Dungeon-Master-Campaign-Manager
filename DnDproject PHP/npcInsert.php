<?php

$mysqli_connection = new MySQLi('vergil.u.washington.edu', 'root', '0505007pP', 'dungeon', 6498);
if($mysqli_connection->connect_error){
   echo "Not connected, error: ".$mysqli_connection->connect_error;
}

$Npc_name = $_POST["Npc_name"];
$Npc_class = $_POST["Npc_class"];

if (empty($Npc_name)) {
  header("refresh:2; url=npc.php");
  echo "NPC Name cannot be Empty";
  echo "<br>";
  echo "Going back to npc.php";
  die();
}

if (empty($Npc_class)) {
  header("refresh:2; url=npc.php");
  echo "NPC class cannot be Empty";
  echo "<br>";
  echo "Going back to npc.php";
  die();
}
if (($Npc_class != 'merchant') && ($Npc_class != 'mysterious') && ($Npc_class != 'worrior') && ($Npc_class != 'magician') && ($Npc_class != 'traveler')) {
  header("refresh:2; url=npc.php");
  echo "Not Proper Value for NPC Class";
  echo "<br>";
  echo "merchant/mysterious/worrior/magician/travler Only";
  echo "<br>";
  echo "Going back to npc.php";
  die();
}

$sql = "INSERT INTO NON_PLAYER_CHARACTER (Npc_name, Npc_class)
VALUES ('$Npc_name', '$Npc_class')";
header("refresh:3; url=npc.php");
if (!mysqli_query($mysqli_connection,$sql)) {
  echo 'Not Inserted';
  echo "<br>";
  echo 'Possibly Invalid Foreign Key';
  echo "<br>";
} else {
  echo 'Inserted Successfully';
  echo "<br>";
}

 ?>
