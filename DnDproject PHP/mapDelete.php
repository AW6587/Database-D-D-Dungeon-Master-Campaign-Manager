<?php

$mysqli_connection = new MySQLi('vergil.u.washington.edu', 'root', '0505007pP', 'dungeon', 6498);
if($mysqli_connection->connect_error){
   echo "Not connected, error: ".$mysqli_connection->connect_error;
}

$Map_number = $_POST["Map_number"];
$Map_name = $_POST["Map_name"];

if (!empty($Map_name)) {
  $sqlResult = "SELECT Cam_map_name FROM CAMPAIGN";
  $result = $mysqli_connection->query($sqlResult);
  $fore = TRUE;
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      if ($row["Cam_map_name"] == $Map_name) {
        $fore = FALSE;
        break;
      } else {
        $fore = TRUE;
      }
    }
  } else {
    $fore = TRUE;
  }
}

if (!$fore) {
  header("refresh:3; url=geo.php");
  echo "Delete CAMPAIGN First before Delete Map";
  die();
}

if (!empty($Map_name)) {
  $sqlResult = "SELECT Map_location_name FROM POINT_OF_INTEREST";
  $result = $mysqli_connection->query($sqlResult);
  $fore3 = TRUE;
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      if ($row["Map_location_name"] == $Map_name) {
        $fore3 = FALSE;
        break;
      } else {
        $fore3 = TRUE;
      }
    }
  } else {
    $fore3 = TRUE;
  }
}

if (!$fore3) {
  header("refresh:3; url=geo.php");
  echo "Delete Point_OF_INTERST First before Delete Map";
  die();
}

if (!empty($Map_number)) {
  $sqlResult = "SELECT Map_number FROM MAP";
  $result = $mysqli_connection->query($sqlResult);
  $fore1 = TRUE;
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      if ($row["Map_number"] == $Map_number) {
        $sql = "DELETE FROM MAP WHERE Map_number = $Map_number";
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
  header("refresh:3; url=geo.php");
  echo "Map number Does not Exist";
  die();
}

if (!empty($Map_name)) {
  $sqlResult = "SELECT Map_name FROM MAP";
  $reuslt = $mysqli_connection->query($sqlResult);
  $fore2 = TRUE;
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      if ($row["Map_name"] == $Map_name) {
        $sql = "DELETE FROM MAP WHERE Map_name = $Map_name";
        $fore2 = TRUE;
        break;
      } else {
        $fore2 = FALSE;
      }
    }
  } else {
    $fore2 = FALSE;
  }
}

if (!$fore2) {
  header("refresh:3; url=geo.php");
  echo "Map Name Does not Exist";
  die();
}

header("refresh:3; url=geo.php");
if (!mysqli_query($mysqli_connection,$sql)) {
  echo 'Delete';
  echo "<br>";
} else {
  echo "Delete";
  echo "<br>";
}
 ?>
