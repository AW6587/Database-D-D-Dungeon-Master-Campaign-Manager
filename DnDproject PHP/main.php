
<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
<!-- This css statement can be spearte to .css -->
<style>

#panel1, #flip1 {
    /* padding: 5px; */
    text-align: center;
    background-color: #black;
    border: solid 1px #red;
    font-size: 20px;
}
#panel1 {
    background-repeat: no-repeat;
    text-align: center;
    background-size: cover;
    /* padding: 50px; */
    display: none;
}
#panel2, #flip2 {
    /* padding: 5px; */
    text-align: center;
    background-color: #black;
    border: solid 1px #red;
    font-size: 20px;
}
#panel2 {
    background-repeat: no-repeat;
    text-align: center;
    background-size: cover;
    /* padding: 50px; */
    display: none;
}
#panel3, #flip3 {
    /* padding: 5px; */
    text-align: center;
    background-color: #black;
    border: solid 1px #red;
    font-size: 20px;
}
#panel3 {
    background-repeat: no-repeat;
    text-align: center;
    background-size: cover;
    /* padding: 50px; */
    display: none;
}
table {
  border-collapse: collapse;
  width: 100%;
  color: #d96459;
  font-family: monospace;
  font-size: 25px;
  text-align: left;
  background-color: black;
}
th {
  background-color: #d96459;
  color: white;
}
tr:nth-child(even) {
  background-color: #f2f2f2;
}

#navi1{
  padding-left: 10px;
  padding-right: 10px;
}

#navi2{
  padding-left: 10px;
  padding-right: 10px;
}
</style>
<!-- This js can be sepearte to .js -->
<script type="text/javascript">
$(document).ready(function(){
  $(document).ready(function(){
    $("#flip1").click(function(){
        $("#panel1").slideToggle("slow");
    });
});
});
$(document).ready(function(){
  $(document).ready(function(){
    $("#flip2").click(function(){
        $("#panel2").slideToggle("slow");
    });
});
});
$(document).ready(function(){
  $(document).ready(function(){
    $("#flip3").click(function(){
        $("#panel3").slideToggle("slow");
    });
});
});
</script>
  </head>
  <body>
    <!-- nav bar -->
        <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed"data-toggle="collapse"data-target="#navbar"aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand"href="index.php">D&D Database</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li><a href="#player"><b>PLAYER</b><span class="sr-only">(current)</span></a></li>
              <li><a href="#playerCharc"><b>CHARACTER</b></a></li>
              <li><a href="#inventory"><b>CHARACTER INVENTORY</b></a></li>
              <li id = "navi1"><a href="geo.php"><b>MAP/CAMAPIGN/CAMPAIGN-CHARACTER/EPISODE</b></a></li>
              <li id = "navi2"><a href="npc.php"><b>NPC</b></a></li>
              <li><a href="monster.php"><b>MONSTER</b></a></li>
            </ul>
          </div>
        </div>
    </nav>
    <!-- nav bar end -->
    <br><br>
    <!-- Start gae ji ral -->
    <div class="container">
      <h2>Player (Add/Update/Delete)</h2>
      <div class="well well-lg">
        <div class="row">

          <!-- Box1 -->
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <div class="wel well-sm">
                <h2 id = "player">Add Player</h2>
                  <form class="" action="playerInsert.php" method="post">
                    Player Name: <input type="text" name="Player_name" value=""> <br><br>
                    Player Phone: <input type="text" name="Player_phone" value="2061231234 format"> <br><br>
                    Player Email: <input type="text" name="Player_email" value="Can_be NULL"> <br><br>
                    Player Join Date: <input type="date" name="Player_join_date" value=""> <br><br>
                    Player Leave Date: <input type="date" name="Player_leave_date" value="Can_be NULL"> <br><br>
                    <input type="Submit" name="" value="Insert">
                  </form>
              </div>
            </div>
          </div>
          <!-- buttom is the Box1 -->
          <!-- Box2 -->
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <div class="wel well-sm">
                <h2 id = "player">Update Player</h2>
                  <form class="" action="playerUpdate.php" method="post">
                    Player Name: <input type="text" name="Player_name" value=""> <br><br>
                    Player Phone: <input type="text" name="Player_phone" value="2061231234 format"> <br><br>
                    Player Email: <input type="text" name="Player_email" value="Can_be NULL"> <br><br>
                    Player Join Date: <input type="date" name="Player_join_date" value=""> <br><br>
                    Player Leave Date: <input type="date" name="Player_leave_date" value="Can_be NULL"> <br><br>
                    <input type="Submit" name="" value="Insert">
                  </form>
              </div>
            </div>
          </div>
          <!-- box2 end -->
          <!-- box3 start-->
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <div class="wel well-sm">
                <h2 id = "player">Delete Player</h2>
                  <form class="" action="playerDelete.php" method="post">
                    Player ID: <input type="text" name="Player_id" value=""> <br><br>
                    <!-- Player Name: <input type="text" name="Player_name" value=""> <br><br> -->
                    <!-- Player Phone: <input type="text" name="Player_phone" value="2061231234 format"> <br><br>
                    Player Email: <input type="text" name="Player_email" value="Can_be NULL"> <br><br>
                    Player Join Date: <input type="date" name="Player_join_date" value=""> <br><br>
                    Player Leave Date: <input type="date" name="Player_leave_date" value="Can_be NULL"> <br><br> -->
                    <input type="Submit" name="" value="Delete">
                  </form>
              </div>
            </div>
          </div>
          <!-- Box 3 end -->
        </div>
      </div>
      <!-- Display data -->
      <!--  gae ji ral-->
      <div id = "bodyContainer" class="container">
        <div id = "flip1"> <string><u>Cick to display all player data</u></strong>
          <div id = "panel1">
            <table>
              <tr>
                <th>Player Number</th>
                <th>Player Name</th>
                <th>Player Phone Number</th>
                <th>Player Email</th>
                <th>Player Join Date</th>
                <th>Player Leave Date</th>
              </tr>
              <?php
                $mysqli_connection = new MySQLi('vergil.u.washington.edu', 'root', '0505007pP', 'dungeon', 6498);
                if($mysqli_connection->connect_error){
                   echo "Not connected, error: ".$mysqli_connection->connect_error;
                }
                else{
                   echo "Connected.";
                }
                // $conn = mysqli_connect("", "root", "", 'dungeon');
                // if ($conn->connect_error) {
                //   die("Connection failed:" . $conn->connect_error);
                // }
                $sql = "SELECT Player_id, Player_name, Player_phone, Player_email, Player_join_date, Player_leave_date FROM PLAYER";
                $result = $mysqli_connection->query($sql);
                if ($result->num_rows > 0) {
                  while ($row = $result-> fetch_assoc()) {
                    echo "<tr><td>". $row["Player_id"] . "</td><td>". $row["Player_name"] ."</td><td>". $row["Player_phone"] ."</td><td>". $row["Player_email"] ."</td><td>". $row["Player_join_date"] ."</td>
                    <td>". $row["Player_leave_date"] ."</td></tr>";
                  }
                  echo "</table>";
                } else {
                  echo "0 result";
                }
                $mysqli_connection->close();
               ?>
            </table>
          </div>
        </div>
      </div>
      <!--  End Display Player Table -->
    </div>
    <!--End END END  -->
    <br><br>
    <!-- Start Character gae ji ral -->
    <div class="container">
      <h2> Add / Update / Delete Character</h2>
      <div class="well well-lg">
        <div class="row">

          <!-- Box1 -->
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <div class="wel well-sm">
                <h2 id ="playerCharc">Add Player Character</h2>
                <p><b>Player_id is require, Can be seen from buttom DISPLAY PLAYER</b></p>
                <!-- INSERT DATA for Character -->
                  <form class="" action="characterInsert.php" method="post">
                    Character Name: <input type="text" name="Character_name" value=""> <br><br>
                    Player Number: <input type="text" name="Charac_player_id" value="Click to Display For Player"> <br><br>
                    Character Level: <input type="text" name="Charac_level" value="1 to 99"> <br><br>
                    Character Passive Perception: <input type="text" name="Charac_passive_perception" value="1 to 99"> <br><br>
                    <input type="Submit" name="" value="Insert">
                  </form>
              </div>
            </div>
          </div>
          <!-- buttom is the Box1 -->
          <!-- Box2 -->
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <div class="wel well-sm">
                <h2 id ="playerCharc">Update Character</h2>
                <p><b>Player_id is require, Can be seen from buttom DISPLAY PLAYER</b></p>
                <!-- INSERT DATA for Character -->
                  <form class="" action="characterUpdate.php" method="post">
                    Character Name: <input type="text" name="Character_name" value=""> <br><br>
                    Player Number: <input type="text" name="Charac_player_id" value="Click to Display For Player"> <br><br>
                    Character Level: <input type="text" name="Charac_level" value="1 to 99"> <br><br>
                    Character Passive Perception: <input type="text" name="Charac_passive_perception" value="1 to 99"> <br><br>
                    <input type="Submit" name="" value="Update">
                  </form>
              </div>
            </div>
          </div>
          <!-- box2 end -->
          <!-- box3 start-->
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <div class="wel well-sm">
                <h2 id ="playerCharc">Delete Character</h2>
                <p><b>Player_id is require, Can be seen from buttom DISPLAY PLAYER</b></p>
                <!-- INSERT DATA for Character -->
                  <form class="" action="characterDelete.php" method="post">
                    Character Name: <input type="text" name="Character_name" value=""> <br><br>
                    Player Number: <input type="text" name="Charac_player_id" value="Click to Display For Player"> <br><br>
                    <input type="Submit" name="" value="Delete">
                  </form>
              </div>
            </div>
          </div>
          <!-- Box 3 end -->
        </div>
      </div>
      <!-- Table with php -->
      <div id = "bodyContainer" class="container">
        <div id = "flip2"> <string><u>Cick to display all Character data</u></strong>
          <div id = "panel2">
            <table>
              <tr>
                <th>Character Name</th>
                <th>Player ID</th>
                <th>Character Level</th>
                <th>Passive Perception</th>
              </tr>
              <?php
                $mysqli_connection = new MySQLi('vergil.u.washington.edu', 'root', '0505007pP', 'dungeon', 6498);
                if($mysqli_connection->connect_error){
                   echo "Not connected, error: ".$mysqli_connection->connect_error;
                }
                else{
                   echo "Connected.";
                }
                $sql = "SELECT Character_name, Charac_player_id, Charac_level, Charac_passive_perception FROM PCHARACTER";
                $result = $mysqli_connection->query($sql);
                if ($result->num_rows > 0) {
                  while ($row = $result-> fetch_assoc()) {
                    echo "<tr><td>". $row["Character_name"] . "</td><td>". $row["Charac_player_id"] ."</td><td>". $row["Charac_level"] ."</td><td>". $row["Charac_passive_perception"] ."</td></tr>";
                  }
                  echo "</table>";
                } else {
                  echo "0 result";
                }
                $mysqli_connection->close();
               ?>
            </table>
          </div>
        </div>
      </div>
      <!-- php table -->
    </div>

    <br><br>
    <!-- Character Container End -->
    <!-- Item Container -->
    <div class="container">
      <h2>Item (Add / Update / Delete Character)</h2>
      <div class="well well-lg">
        <div class="row">

          <!-- Box1 -->
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <div class="wel well-sm">
                <h2 id ="playerCharc">Add Character Item</h2>
                <p><b>Character Name Require, Can be seen from buttom DISPLAY Character</b></p>
                <p><b>Value: plat, silver, gold, or copper</b></p>
                <!-- INSERT DATA for Character -->
                <!-- Insert from html and connect to php -->
                <form class="" action="itemInsert.php" method="post">
                  Item Name: <input type="text" name="Item_name" value=""> <br><br>
                  Onwer Character Name: <input type="text" name="Item_owner_character" value=""> <br><br>
                  Item Value: <input type="text" name="Item_value" value=""> <br><br>
                  Item Count: <input type="text" name="Item_count" value="range 1 ~ 99"> <br><br>
                  <input type="Submit" name="" value="Insert">
                </form>
                <!-- End of Insert connect -->
              </div>
            </div>
          </div>
          <!-- buttom is the Box1 -->
          <!-- Box2 -->
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <div class="wel well-sm">
                <h2 id ="playerCharc">Update Item</h2>
                <p><b>Character Name Require, Can be seen from buttom DISPLAY Character</b></p>
                <!-- Insert from html and connect to php -->
                <form class="" action="itemUpdate.php" method="post">
                  Item Name: <input type="text" name="Item_name" value=""> <br><br>
                  Onwer Character Name: <input type="text" name="Item_owner_character" value=""> <br><br>
                  Item Value: <input type="text" name="Item_value" value=""> <br><br>
                  Item Count: <input type="text" name="Item_count" value="range 1 ~ 99"> <br><br>
                  <input type="Submit" name="" value="Insert">
                </form>
                <!-- End of Insert connect -->
              </div>
            </div>
          </div>
          <!-- box2 end -->
          <!-- box3 start-->
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <div class="wel well-sm">
                <h2 id ="playerCharc">Delete Item</h2>
                <p><b>Character Name Require, Can be seen from buttom DISPLAY Character</b></p>
                <!-- Insert from html and connect to php -->
                <form class="" action="itemDelete.php" method="post">
                  Item ID: <input type="text" name="Item_id" value=""> <br><br>
                  <!-- Item Name: <input type="text" name="Item_name" value=""> <br><br> -->
                  <!-- Onwer Character Name: <input type="text" name="Item_owner_character" value=""> <br><br> -->
                  <input type="Submit" name="" value="Delete">
                </form>
                <!-- End of Insert connect -->
              </div>
            </div>
          </div>
          <!-- Box 3 end -->
        </div>
      </div>
      <!-- Table with php -->
      <div id = "bodyContainer" class="container">
        <div id = "flip3"> <string><u>Cick to display all Item Character Owned</u></strong>
          <div id = "panel3">
            <table>
              <tr>
                <th>Item ID</th>
                <th>Item Name</th>
                <th>Character Name</th>
                <th>Item Value</th>
                <th>Item Count</th>
              </tr>
              <?php
                $mysqli_connection = new MySQLi('vergil.u.washington.edu', 'root', '0505007pP', 'dungeon', 6498);
                if($mysqli_connection->connect_error){
                   echo "Not connected, error: ".$mysqli_connection->connect_error;
                }
                else{
                   echo "Connected.";
                }
                $sql = "SELECT Item_id, Item_name, Item_owner_character, Item_value, Item_count FROM ITEM";
                $result = $mysqli_connection->query($sql);
                if ($result->num_rows > 0) {
                  while ($row = $result-> fetch_assoc()) {
                    echo "<tr><td>". $row["Item_id"] . "</td><td>". $row["Item_name"] . "</td><td>". $row["Item_owner_character"] ."</td><td>". $row["Item_value"] ."</td><td>". $row["Item_count"] ."</td></tr>";
                  }
                  echo "</table>";
                } else {
                  echo "0 result";
                }
                $mysqli_connection->close();
               ?>
            </table>
          </div>
        </div>
      </div>
      <!-- php table -->
    </div>
    <!-- siblar end -->
    <br>
    <br>
    <br>
  </body>
</html>
