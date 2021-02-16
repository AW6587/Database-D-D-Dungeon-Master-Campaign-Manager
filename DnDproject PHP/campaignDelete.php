<?php
// connection
$mysqli_connection = new MySQLi('vergil.u.washington.edu', 'root', '0505007pP', 'dungeon', 6498);
if($mysqli_connection->connect_error){
   echo "Not connected, error: ".$mysqli_connection->connect_error;
}

// store variable
$Campaign_name = $_POST["Campaign_name"];
$Cam_map_name = $_POST["Cam_map_name"];
$Cam_player = $_POST["Cam_player"];

// set up the restriction on delete
// restriction
if (!empty($Campaign_name)) {
  $sqlResult = "SELECT Campai_name FROM EPISODE";
  $result = $mysqli_connection->query($sqlResult);
  $fore = TRUE;
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      if ($row["Campai_name"] == $Campaign_name) {
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
  echo "Delete the Episode First Before you Delete Campaign";
  die();
}

if (!empty($Campaign_name)) {
  $sqlResult = "SELECT Campaign_name FROM CAMPAIGN";
  $result = $mysqli_connection->query($sqlResult);
  $fore1 = TRUE;
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      if ($row["Campaign_name"] == $Campaign_name) {
        $sql = "DELETE FROM CAMPAIGN WHERE Campaign_name = $Campaign_name";
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
  echo "Campaign name Does not Exist";
  die();
}

if (!empty($Cam_map_name)) {
  $sqlResult = "SELECT Cam_map_name FROM CAMPAIGN";
  $result = $mysqli_connection->query($sqlResult);
  $fore2 = TRUE;
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      if ($row["Cam_map_name"] == $Cam_map_name) {
        $sql = "DELETE FROM CAMPAIGN WHERE Cam_map_name = $Cam_map_name";
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

if (!empty($Cam_player)) {
  $sqlResult = "SELECT Cam_player FROM CAMPAIGN";
  $result = $mysqli_connection->query($sqlResult);
  $fore3 = TRUE;
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      if ($row["Cam_player"] == $Cam_player) {
        $sql = "DELETE FROM CAMPAIGN WHERE Cam_player = $Cam_player";
        $fore3 = TRUE;
        break;
      } else {
        $fore3 = FALSE;
      }
    }
  } else {
    $fore3 = FALSE;
  }
}

if (!$fore3) {
  header("refresh:3; url=geo.php");
  echo "Player Does not Found";
  die();
}

header("refresh:2; url=geo.php");
if (!mysqli_query($mysqli_connection,$sql)) {
  echo 'Not Delete';
  echo "<br>";
} else {
  echo 'Delete Successfully';
  echo "<br>";
}

 ?>
