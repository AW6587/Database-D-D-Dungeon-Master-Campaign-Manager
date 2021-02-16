<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Scnario of Game</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    <style>
    #panel4, #flip4 {
        /* padding: 5px; */
        text-align: center;
        background-color: #black;
        border: solid 1px #red;
        font-size: 20px;
    }
    #panel4 {
        background-repeat: no-repeat;
        text-align: center;
        background-size: cover;
        /* padding: 50px; */
        display: none;
    }
    #panel5, #flip5 {
        /* padding: 5px; */
        text-align: center;
        background-color: #black;
        border: solid 1px #red;
        font-size: 20px;
    }
    #panel5 {
        background-repeat: no-repeat;
        text-align: center;
        background-size: cover;
        /* padding: 50px; */
        display: none;
    }
    #panel6, #flip6 {
        /* padding: 5px; */
        text-align: center;
        background-color: #black;
        border: solid 1px #red;
        font-size: 20px;
    }
    #panel6 {
        background-repeat: no-repeat;
        text-align: center;
        background-size: cover;
        /* padding: 50px; */
        display: none;
    }
    #panel7, #flip7 {
        /* padding: 5px; */
        text-align: center;
        background-color: #black;
        border: solid 1px #red;
        font-size: 20px;
    }
    #panel7 {
        background-repeat: no-repeat;
        text-align: center;
        background-size: cover;
        /* padding: 50px; */
        display: none;
    }
    #panel8, #flip8 {
        /* padding: 5px; */
        text-align: center;
        background-color: #black;
        border: solid 1px #red;
        font-size: 20px;
    }
    #panel8 {
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

    </style>
    <script type="text/javascript">
    $(document).ready(function(){
      $(document).ready(function(){
        $("#flip4").click(function(){
            $("#panel4").slideToggle("slow");
        });
    });
    });
    $(document).ready(function(){
      $(document).ready(function(){
        $("#flip5").click(function(){
            $("#panel5").slideToggle("slow");
        });
    });
    });
    $(document).ready(function(){
      $(document).ready(function(){
        $("#flip6").click(function(){
            $("#panel6").slideToggle("slow");
        });
    });
    });
    $(document).ready(function(){
      $(document).ready(function(){
        $("#flip7").click(function(){
            $("#panel7").slideToggle("slow");
        });
    });
    });
    $(document).ready(function(){
      $(document).ready(function(){
        $("#flip8").click(function(){
            $("#panel8").slideToggle("slow");
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
              <li id = "navi3"><a href="main.php"><b>PLAYER/CHARAC/ITEM</b></a></li>
              <li><a href="#map"><b>MAP</b><span class="sr-only">(current)</span></a></li>
              <li><a href="#camp"><b>CAMPAIGN</b></a></li>
              <li><a href="#includeCamCharac"><b>CAMPAIGN&&CHARACTER</b></a></li>
              <li><a href="#pointOfInterest"><b>POINT OF INTEREST</b></a></li>
              <li><a href="#episode"><b>EPISODE</b></a></li>
              <li id = "navi4"><a href="npc.php"><b>NPC</b></a></li>
              <li><a href="monster.php"><b>MONSTER</b></a></li>
            </ul>
          </div>
        </div>
    </nav>
    <!-- nav bar end -->
    <br><br><br>
    <!-- Start gae ji ral -->
    <div class="container">
      <h2 id = "map">MAP (Add / Update / Delete)</h2>
      <div class="well well-lg">
        <div class="row">

          <!-- Box1 -->
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <div class="wel well-sm">
                <h2> Add MAP</h2>
                  <form class="" action="mapInsert.php" method="post">
                    Map Number: <input type="text" name="Map_number" value=""> <br><br>
                    Map Name: <input type="text" name="Map_name" value=""><br><br>
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
                <h2> Update Map</h2>
                  <form class="" action="mapUpdate.php" method="post">
                    Map Number: <input type="text" name="" value=""> <br><br>
                    Map Name: <input type="text" name="" value=""><br><br>
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
                <h2> Delete</h2>
                  <form class="" action="mapDelete.php" method="post">
                    Map Number: <input type="text" name="Map_number" value=""> <br><br>
                    Map Name: <input type="text" name="Map_name" value=""><br><br>
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
        <div id = "flip4"> <string><u>Cick to display Map Data</u></strong>
          <div id = "panel4">
            <table>
              <tr>
                <th>Map Number</th>
                <th>Map Name</th>
              </tr>
              <?php
                $mysqli_connection = new MySQLi('vergil.u.washington.edu', 'root', '0505007pP', 'dungeon', 6498);
                if($mysqli_connection->connect_error){
                   echo "Not connected, error: ".$mysqli_connection->connect_error;
                }
                else{
                   echo "Connected.";
                }
                $sql = "SELECT Map_number, Map_name FROM MAP";
                $result = $mysqli_connection->query($sql);
                if ($result->num_rows > 0) {
                  while ($row = $result-> fetch_assoc()) {
                    echo "<tr><td>". $row["Map_number"] . "</td><td>". $row["Map_name"] ."</td></tr>";
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
    <!-- Start jiral again -->
    <br><br>
    <!-- Start Campaign -->
    <div class="container">
      <h2 id = "camp"> CAMPAIGN (Add / Update / Delete)</h2>
      <div class="well well-lg">
        <div class="row">

          <!-- Box1 -->
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <div class="wel well-sm">
                <h2> Add Campaign</h2>
                  <form class="" action="campaignInsert.php" method="post">
                    Campaign Name: <input type="text" name="Campaign_name" value=""> <br><br>
                    Camp Map Name: <input type="text" name="Cam_map_name" value="foreign key map name"> <br><br>
                    Campaign Owner: <input type="text" name="Cam_master" value=""> <br><br>
                    Campaign Player: <input type="text" name="Cam_player" value="Player id Require"> <br><br>
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
                <h2> Update Campaign</h2>
                <form class="" action="campaignDelete.php" method="post">
                  Campaign Name: <input type="text" name="Campaign_name" value=""> <br><br>
                  Camp Map Name: <input type="text" name="Cam_map_name" value="foreign key map name"> <br><br>
                  Campaign Owner: <input type="text" name="Cam_master" value=""> <br><br>
                  Campaign Player: <input type="text" name="Cam_player" value="Player id Require"> <br><br>
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
                <h2>Delete Campaign</h2>
                <form class="" action="campaignDelete.php" method="post">
                  Campaign Name: <input type="text" name="Campaign_name" value=""> <br><br>
                  Camp Map Name: <input type="text" name="Cam_map_name" value="foreign key map name"> <br><br>
                  Campaign Player: <input type="text" name="Cam_player" value="Player id Require"> <br><br>
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
        <div id = "flip5"> <string><u>Cick to display Campaign Data</u></strong>
          <div id = "panel5">
            <table>
              <tr>
                <th>Campaign Name</th>
                <th>Campaign Map Name</th>
                <th>Campaign Owner</th>
                <th>Campaign Player</th>
              </tr>
              <?php
                $mysqli_connection = new MySQLi('vergil.u.washington.edu', 'root', '0505007pP', 'dungeon', 6498);
                if($mysqli_connection->connect_error){
                   echo "Not connected, error: ".$mysqli_connection->connect_error;
                }
                else{
                   echo "Connected.";
                }
                $sql = "SELECT Campaign_name, Cam_map_name, Cam_master, Cam_player FROM CAMPAIGN";
                $result = $mysqli_connection->query($sql);
                if ($result->num_rows > 0) {
                  while ($row = $result-> fetch_assoc()) {
                    echo "<tr><td>". $row["Campaign_name"] . "</td><td>". $row["Cam_map_name"] ."</td><td>". $row["Cam_master"] . "</td><td>". $row["Cam_player"] ."</td></tr>" ;
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
    <br><br>
    <!-- another gae ji ral start -->
    <!-- Include Camp Charac -->
    <div class="container">
      <!-- <h2>Campaign Character (Add / Update / Delete)</h2> -->
      <h2>Campaign Character</h2>

      <!-- Display data -->
      <!--  gae ji ral-->
      <div id = "bodyContainer" class="container">
        <div id = "flip6"> <string><u>Cick to display Campaign Character Data</u></strong>
          <div id = "panel6">
            <table>
              <tr>
                <th>Campaign Name</th>
                <th>Character Name</th>
              </tr>
              <?php
                $mysqli_connection = new MySQLi('vergil.u.washington.edu', 'root', '0505007pP', 'dungeon', 6498);
                if($mysqli_connection->connect_error){
                   echo "Not connected, error: ".$mysqli_connection->connect_error;
                }
                else{
                   echo "Connected.";
                }
                $sql = "SELECT Campaign_name, Character_name FROM CAMPAIGN, PCHARACTER WHERE Cam_player = Charac_player_id";
                $result = $mysqli_connection->query($sql);
                if ($result->num_rows > 0) {
                  while ($row = $result-> fetch_assoc()) {
                    echo "<tr><td>". $row["Campaign_name"] . "</td><td>". $row["Character_name"] ."</td></tr>";
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
      <!--  End Display include_camp_jiral Table -->
    </div>
    <br><br>
    <!--  Hopely It Fits-->
    <!-- another gae jiral for POI -->
    <div class="container">
      <h2 id = "pointOfInterest">POINT OF INTEREST (Add / Update / Delete)</h2>
      <div class="well well-lg">
        <div class="row">

          <!-- Box1 -->
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <div class="wel well-sm">
                <h2> Add Point Of Interest</h2>
                  <form class="" action="poiInsert.php" method="post">
                    Location Name: <input type="text" name="Location_name" value=""> <br><br>
                    Map Lacation Name: <input type="text" name="Map_location_name" value="Display Map"> <br><br>
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
                <h2> Update Point Of Interest</h2>
                <form class="" action="poiInsert.php" method="post">
                  Location Name: <input type="text" name="Location_name" value=""> <br><br>
                  Map Lacation Name: <input type="text" name="Map_location_name" value="Display Map"> <br><br>
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
                <h2>Delete Point Of Interest</h2>
                <form class="" action="poiDelete.php" method="post">
                  Location Name: <input type="text" name="Location_name" value=""> <br><br>
                  Map Lacation Name: <input type="text" name="Map_location_name" value="Display Map"> <br><br>
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
        <div id = "flip7"> <string><u>Cick to display Point Of Interest Data</u></strong>
          <div id = "panel7">
            <table>
              <tr>
                <th>Location Name</th>
                <th>Map Location Name</th>
              </tr>
              <?php
                $mysqli_connection = new MySQLi('vergil.u.washington.edu', 'root', '0505007pP', 'dungeon', 6498);
                if($mysqli_connection->connect_error){
                   echo "Not connected, error: ".$mysqli_connection->connect_error;
                }
                else{
                   echo "Connected.";
                }
                $sql = "SELECT Location_name, Map_location_name FROM POINT_OF_INTEREST";
                $result = $mysqli_connection->query($sql);
                if ($result->num_rows > 0) {
                  while ($row = $result-> fetch_assoc()) {
                    echo "<tr><td>". $row["Location_name"] ."</td><td>". $row["Map_location_name"] . "</td></tr>";
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
      <!--  End Display include_camp_jiral Table -->
    </div>
    <br><br>
    <!--Last jiral for Geography php  -->
    <div class="container">
      <h2 id = "episode">Episode (Add / Update / Delete)</h2>
      <div class="well well-lg">
        <div class="row">

          <!-- Box1 -->
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <div class="wel well-sm">
                <h2> Add Episode</h2>
                <form class="" action="episodeInsert.php" method="post">
                  Campaign Name: <input type="text" name="Campai_name" value="Check Campaign Display"> <br><br>
                  Episode Location Name: <input type="text" name="Episode_location" value="See Point of Interest"> <br><br>
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
                <h2> Update Episode</h2>
                <form class="" action="episodeInsert.php" method="post">
                  Campaign Name: <input type="text" name="Campai_name" value="Check Campaign Display"> <br><br>
                  Episode Location Name: <input type="text" name="Episode_location" value="See Point of Interest"> <br><br>
                  <input type="Submit" name="" value="Delete">
                </form>
              </div>
            </div>
          </div>
          <!-- box2 end -->
          <!-- box3 start-->
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <div class="wel well-sm">
                <h2>Delete Episode</h2>
                <form class="" action="episodeInsert.php" method="post">
                  Campaign Name: <input type="text" name="Campai_name" value="Check Campaign Display"> <br><br>
                  Episode Location Name: <input type="text" name="Episode_location" value="See Point of Interest"> <br><br>
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
        <div id = "flip8"> <string><u>Cick to display Episode Data</u></strong>
          <div id = "panel8">
            <table>
              <tr>
                <th>Episode Number</th>
                <th>Campaign Name</th>
                <th>Episode Location Name</th>
              </tr>
              <?php
                $mysqli_connection = new MySQLi('vergil.u.washington.edu', 'root', '0505007pP', 'dungeon', 6498);
                if($mysqli_connection->connect_error){
                   echo "Not connected, error: ".$mysqli_connection->connect_error;
                }
                else{
                   echo "Connected.";
                }
                $sql = "SELECT Episode_num, Campai_name, Episode_location FROM EPISODE";
                $result = $mysqli_connection->query($sql);
                if ($result->num_rows > 0) {
                  while ($row = $result-> fetch_assoc()) {
                    echo "<tr><td>". $row["Episode_num"] . "</td><td>". $row["Campai_name"] ."</td><td>". $row["Episode_location"] . "</td></tr>";
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
      <!--  End Display include_camp_jiral Table -->
    </div>
    <br><br><br>
  </body>
</html>
