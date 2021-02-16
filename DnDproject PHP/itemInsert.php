<?php
// $host = 'localhost';
// $user = 'root';
// $pass = '';
// $dbname = 'dungeon';
$Item_name = $_POST["Item_name"];
$Item_owner_character = $_POST["Item_owner_character"];
$Item_value = $_POST["Item_value"];
$Item_count = $_POST["Item_count"];
// connect or die
$mysqli_connection = new MySQLi('vergil.u.washington.edu', 'root', '0505007pP', 'dungeon', 6498);
if($mysqli_connection->connect_error){
   echo "Not connected, error: ".$mysqli_connection->connect_error;
}

if (empty($Item_name)) {
  header("refresh:3; url=main.php");
  echo "Item Name can not be Empty";
  echo "<br>";
  echo "Going back to Main.php";
  echo "<br>";
  die();
}

if (empty($Item_owner_character)) {
  header("refresh:3; url=main.php");
  echo "Character owner can not be Empty";
  echo "<br>";
  echo "Check Character name on Display Chacter";
  echo "<br>";
  echo "Going back to Main.php....progressing";
  echo "<br>";
  die();
}

if (!empty($Item_owner_character)) {
  $sqlResult = "SELECT Character_name FROM PCHARACTER";
  $result = $mysqli_connection->query($sqlResult);
  $fore = TRUE;
  while ($row = $result->fetch_assoc()) {
    if ($row["Character_name"] == $Item_owner_character) {
      $fore = TRUE;
      break;
    } else {
      $fore = FALSE;
    }
  }
}

if (!$fore) {
  header("refresh:3; url=main.php");
  echo "Foreign key Constraint";
  die();
}

if (empty($Item_value)) {
  header("refresh:3; url=main.php");
  echo "Item can not be Empty";
  echo "<br>";
  echo "Going back to Main.php";
  echo "<br>";
  die();
}
// $value1 = "plat";
// $value2 = "gold";
// $value3 = "silver";
// $value4 = "copper";
if (($Item_value != 'plat') && ($Item_value != 'gold') && ($Item_value != 'silver') && ($Item_value != 'copper')) {
  header("refresh:3; url=main.php");
  echo "Not Appropriate Item Value";
  echo "<br>";
  echo "plat/gold/silver/copper";
  echo "<br>";
  echo "Going back to Main.php";
  die();
}

if (empty($Item_count)) {
  header("refresh:3; url=main.php");
  echo "Item Count cannot be NULL";
  echo "<br>";
  echo "Going back to Main.php";
  die();
}

if ($Item_count <= 0 || $Item_count >= 100) {
  header("refresh:3; url=main.php");
  echo "Item Count cannot be 0 or More than 100";
  echo "<br>";
  echo "Going back to Main.php";
  die();
}

// INSERT statement
$sql = "INSERT INTO ITEM (Item_name, Item_owner_character, Item_value, Item_count)
VALUES ('$Item_name', '$Item_owner_character', '$Item_value', '$Item_count')";

header("refresh:3; url=main.php");

if (!mysqli_query($mysqli_connection,$sql)) {
  echo 'Not Inserted';
  echo "<br>";
  echo 'Possibly Invalid Foreign Key';
  echo "<Check Character Name Existance By Clicking Display Character at main.php>";
  echo "<br>";
} else {
  echo 'Inserted Successfully';
  echo "<br>";
}
 ?>
