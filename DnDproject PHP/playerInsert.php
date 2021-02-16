<?php

// connection
$mysqli_connection = new MySQLi('vergil.u.washington.edu', 'root', '0505007pP', 'dungeon', 6498);
if($mysqli_connection->connect_error){
   echo "Not connected, error: ".$mysqli_connection->connect_error;
}

$Player_name = $_POST['Player_name'];
$Player_phone = $_POST['Player_phone'];
$Player_email = $_POST['Player_email'];
$Player_join_date =$_POST['Player_join_date'];
$Player_leave_date = $_POST['Player_leave_date'];

// catch the missing name, phone, and join date
if (empty($Player_name)) {
  header("refresh:2; url=main.php");
  echo "Player name can not be empty";
  echo "<br>";
  echo "Going back to main.html";
  echo "<br>";
  die();
}
if (empty($Player_phone)) {
  header("refresh:2; url=main.php");
  echo "Player_phone number can not be empty";
  echo "<br>";
  echo "Going back to main.html";
  echo "<br>";
  die();
} else if (!preg_match("/^\d{10}+$/", $Player_phone)) {
  header("refresh:2; url=main.php");
  echo "Invalid data for Phone Number";
  echo "<br>";
  die();
}
if (empty($Player_join_date)) {
  header("refresh:2; url=main.php");
  echo "Player_join_date can not be empty";
  echo "<br>";
  echo "Going back to main.html";
  echo "<br>";
  die();
}

if (!empty($Player_leave_date)) {
  if ($Player_join_date > $Player_leave_date) {
      header("refresh:2; url=main.php");
      echo "Check the Join date and leave date";
      echo "<br>";
      echo "Leave date cannot be earlier than join date";
      echo "<br>";
      die();
  }
}
// insert the data
$sql = "INSERT INTO PLAYER (Player_name,Player_phone,Player_email,Player_join_date,Player_leave_date)
VALUES ('$Player_name', '$Player_phone', '$Player_email', '$Player_join_date', '$Player_leave_date')";
header("refresh:2; url=main.php");
if (!mysqli_query($mysqli_connection,$sql)) {
  echo 'Not Inserted';
  echo "<br>";
} else {
  echo 'Inserted Successfully';
  echo "<br>";
}

 ?>
