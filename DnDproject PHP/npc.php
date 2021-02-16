<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>NPC of Game</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    <style>
    #panel9, #flip9 {
        /* padding: 5px; */
        text-align: center;
        background-color: #black;
        border: solid 1px #red;
        font-size: 20px;
    }
    #panel9 {
        background-repeat: no-repeat;
        text-align: center;
        background-size: cover;
        /* padding: 50px; */
        display: none;
    }
    #panel10, #flip10 {
        /* padding: 5px; */
        text-align: center;
        background-color: #black;
        border: solid 1px #red;
        font-size: 20px;
    }
    #panel10 {
        background-repeat: no-repeat;
        text-align: center;
        background-size: cover;
        /* padding: 50px; */
        display: none;
    }
    #panel11, #flip11 {
        /* padding: 5px; */
        text-align: center;
        background-color: #black;
        border: solid 1px #red;
        font-size: 20px;
    }
    #panel11 {
        background-repeat: no-repeat;
        text-align: center;
        background-size: cover;
        /* padding: 50px; */
        display: none;
    }
    #navi5 {
      padding-left: 10px;
      padding-right: 10px;
    }
    #navi6 {
      padding-left: 10px;
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
        $("#flip9").click(function(){
            $("#panel9").slideToggle("slow");
        });
    });
    });
    $(document).ready(function(){
      $(document).ready(function(){
        $("#flip10").click(function(){
            $("#panel10").slideToggle("slow");
        });
    });
    });
    $(document).ready(function(){
      $(document).ready(function(){
        $("#flip11").click(function(){
            $("#panel11").slideToggle("slow");
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
              <li><a href="#npc"><b>NPC</b><span class="sr-only">(current)</span></a></li>
              <li><a href="#epiNpc"><b>Episode NPC</b></a></li>
              <li><a href="#campNpc"><b>Campaign NPC</b></a></li>
              <li id = "navi5"><a href="main.php"><b>PLAYER/CHARAC/ITEM</b></a></li>
              <li id = "navi6"><a href="geo.php"><b>MAP/CAMAP/CAMP-CHARAC/EPISODE</b></a></li>
              <li><a href="monster.php"><b>MONSTER</b></a></li>
              <li></li>
            </ul>
          </div>
        </div>
    </nav>
    <br><br><br>
    <!-- nav bar end -->
    <!-- Start gae ji ral -->
    <div class="container">
      <h2 id = "npc">NPC (Add / Update / Delete)</h2>
      <div class="well well-lg">
        <div class="row">

          <!-- Box1 -->
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <div class="wel well-sm">
                <h2>Add NPC</h2>
                  <strong>NPC Class ONLY IN (Lower Case)</strong>
                  <li><b>'merchant'</b></li>
                  <li><b>'Mysterious'</b></li>
                  <li><b>'Worrior'</b></li>
                  <li><b>'Magician'</b></li>
                  <li><b>'Traveler'</b></li>
                  <br>
                  <form class="" action="npcInsert.php" method="post">
                    NPC Name: <input type="text" name="Npc_name" value=""> <br><br>
                    NPC Class: <input type="text" name="Npc_class" value=""> <br><br>
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
                <h2>Update NPC</h2>
                  <strong>NPC Class ONLY IN (Lower Case)</strong>
                  <li><b>'merchant'</b></li>
                  <li><b>'Mysterious'</b></li>
                  <li><b>'Worrior'</b></li>
                  <li><b>'Magician'</b></li>
                  <li><b>'Traveler'</b></li>
                  <br>
                  <form class="" action="npcInsert.php" method="post">
                    NPC Name: <input type="text" name="Npc_name" value=""> <br><br>
                    NPC Class: <input type="text" name="Npc_class" value=""> <br><br>
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
                <h2>Delete NPC</h2>
                  <strong>NPC Class ONLY IN (Lower Case)</strong>
                  <li><b>'merchant'</b></li>
                  <li><b>'Mysterious'</b></li>
                  <li><b>'Worrior'</b></li>
                  <li><b>'Magician'</b></li>
                  <li><b>'Traveler'</b></li>
                  <br>
                  <form class="" action="npcInsert.php" method="post">
                    NPC Name: <input type="text" name="Npc_name" value=""> <br><br>
                    NPC Class: <input type="text" name="Npc_class" value=""> <br><br>
                    <input type="Submit" name="" value="Insert">
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
        <div id = "flip9"> <string><u>Cick to display all NPC Data</u></strong>
          <div id = "panel9">
            <table>
              <tr>
                <th>NPC Name</th>
                <th>NPC Class</th>
              </tr>
              <?php
                $mysqli_connection = new MySQLi('vergil.u.washington.edu', 'root', '0505007pP', 'dungeon', 6498);
                if($mysqli_connection->connect_error){
                   echo "Not connected, error: ".$mysqli_connection->connect_error;
                }
                else{
                   echo "Connected.";
                }
                $sql = "SELECT Npc_name, Npc_class FROM NON_PLAYER_CHARACTER";
                $result = $mysqli_connection->query($sql);
                if ($result->num_rows > 0) {
                  while ($row = $result-> fetch_assoc()) {
                    echo "<tr><td>". $row["Npc_name"] . "</td><td>". $row["Npc_class"] ."</td></tr>";
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
    <!-- Episode NPC -->
    <div class="container">
      <h2 id = "epiNpc">Episode NPC (Add / Update / Delete)</h2>
      <div class="well well-lg">
        <div class="row">

          <!-- Box1 -->
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <div class="wel well-sm">
                <h2>Add NPC to Episode</h2>
                  <form class="" action="epiNpcInsert.php" method="post">
                    Episode NPC Name: <input type="text" name="Epi_npc_name" value="Display NPC:name"> <br><br>
                    Episode Number: <input type="text" name="Epi_num_npc" value="Display Episode: number"> <br><br>
                    NPC Level: <input type="text" name="Npc_level" value="1~99"> <br><br>
                    Quest Reward: <input type="text" name="Quest_reward" value="1 or bigger"> <br><br>
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
                <h2>Update NPC to Epsidoe</h2>
                  <form class="" action="epiNpcInsert.php" method="post">
                    Episode NPC Name: <input type="text" name="Epi_npc_name" value="Display NPC:name"> <br><br>
                    Episode Number: <input type="text" name="Epi_num_npc" value="Display Episode: number"> <br><br>
                    NPC Level: <input type="text" name="Npc_level" value="1~99"> <br><br>
                    Quest Reward: <input type="text" name="Quest_reward" value="1 or bigger"> <br><br>
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
                <h2>Delete NPC from Episode</h2>
                <form class="" action="epiNpcInsert.php" method="post">
                  Episode NPC Name: <input type="text" name="Epi_npc_name" value="Display NPC:name"> <br><br>
                  Episode Number: <input type="text" name="Epi_num_npc" value="Display Episode: number"> <br><br>
                  NPC Level: <input type="text" name="Npc_level" value="1~99"> <br><br>
                  Quest Reward: <input type="text" name="Quest_reward" value="1 or bigger"> <br><br>
                  <input type="Submit" name="" value="Insert">
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
        <div id = "flip10"> <string><u>Cick to display all NPC Data</u></strong>
          <div id = "panel10">
            <table>
              <tr>
                <th>NPC ID</th>
                <th>NPC Name</th>
                <th>Episode Number</th>
                <th>NPC Level</th>
                <th>Quest Reward</th>
              </tr>
              <?php
                $mysqli_connection = new MySQLi('vergil.u.washington.edu', 'root', '0505007pP', 'dungeon', 6498);
                if($mysqli_connection->connect_error){
                   echo "Not connected, error: ".$mysqli_connection->connect_error;
                }
                else{
                   echo "Connected.";
                }
                $sql = "SELECT Npc_id, Epi_npc_name, Epi_num_npc, Npc_level, Quest_reward FROM EPISODE_NPC";
                $result = $mysqli_connection->query($sql);
                if ($result->num_rows > 0) {
                  while ($row = $result-> fetch_assoc()) {
                    echo "<tr><td>". $row["Npc_id"] . "</td><td>". $row["Epi_npc_name"] ."</td><td>" .$row["Epi_num_npc"] . "</td><td>". $row["Npc_level"] . "</td><td>". $row["Quest_reward"] . "</td></tr>";
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
    <!-- Include Campaign NPC -->
    <div class="container">
      <h2 id = "campNpc">NPC IN CAMPAIGN (Add / Update / Delete)</h2>
      <div class="well well-lg">
        <div class="row">

          <!-- Box1 -->
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <div class="wel well-sm">
                <h2>Add NPC to Campaign</h2>
                  <form class="" action="npcCampaignInsert.php" method="post">
                    Campaign Name: <input type="text" name="Camp_name" value="Display Campaign:name"> <br><br>
                    NPC Name: <input type="text" name="Npc_name" value="Display NPC: Name"> <br><br>
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
                <h2>Update NPC to Campaign</h2>
                  <form class="" action="npcCampaignInsert.php" method="post">
                    Campaign Name: <input type="text" name="Camp_name" value="Display Campaign:name"> <br><br>
                    NPC Name: <input type="text" name="Npc_name" value="Display NPC: Name"> <br><br>
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
                <h2>Delete NPC from Campaign</h2>
                <form class="" action="npcCampaignInsert.php" method="post">
                  Campaign Name: <input type="text" name="Camp_name" value="Display Campaign:name"> <br><br>
                  NPC Name: <input type="text" name="Npc_name" value="Display NPC: Name"> <br><br>
                  <input type="Submit" name="" value="Insert">
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
        <div id = "flip11"> <string><u>Cick to display all NPC in Campaign Data</u></strong>
          <div id = "panel11">
            <table>
              <tr>
                <th>Campaign Name</th>
                <th>NPC Name</th>
              </tr>
              <?php
                $mysqli_connection = new MySQLi('vergil.u.washington.edu', 'root', '0505007pP', 'dungeon', 6498);
                if($mysqli_connection->connect_error){
                   echo "Not connected, error: ".$mysqli_connection->connect_error;
                }
                else{
                   echo "Connected.";
                }
                $sql = "SELECT Camp_name, Npc_name FROM INCLUDE_CAMP_NPC";
                $result = $mysqli_connection->query($sql);
                if ($result->num_rows > 0) {
                  while ($row = $result-> fetch_assoc()) {
                    echo "<tr><td>". $row["Camp_name"] . "</td><td>". $row["Npc_name"] ."</td></tr>";
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
    <!-- Need to do Monster -->
    <br><br><br>
  </body>
</html>
