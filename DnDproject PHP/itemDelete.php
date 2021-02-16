<?php

$mysqli_connection = new MySQLi('vergil.u.washington.edu', 'root', '0505007pP', 'dungeon', 6498);
if($mysqli_connection->connect_error){
   echo "Not connected, error: ".$mysqli_connection->connect_error;
}
$Item_id = $_POST["Item_id"];

if (!empty($Item_id)) {
  $sqlResult = "SELECT Item_id FROM ITEM";
  $result = $mysqli_connection->query($sqlResult);
  $fore = TRUE;
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      if ($row["Item_id"] == $Item_id) {
        $sql = "DELETE FROM ITEM WHERE Item_id = $Item_id";
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
  echo "Item ID Not Found";
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
