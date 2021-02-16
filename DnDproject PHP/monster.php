<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <title>Monster</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    <style>
    #panel12, #flip12 {
        /* padding: 5px; */
        text-align: center;
        background-color: #black;
        border: solid 1px #red;
        font-size: 20px;
    }
    #panel12 {
        background-repeat: no-repeat;
        text-align: center;
        background-size: cover;
        /* padding: 50px; */
        display: none;
    }
    #panel13, #flip13 {
        /* padding: 5px; */
        text-align: center;
        background-color: #black;
        border: solid 1px #red;
        font-size: 20px;
    }
    #panel13 {
        background-repeat: no-repeat;
        text-align: center;
        background-size: cover;
        /* padding: 50px; */
        display: none;
    }
    #panel14, #flip14 {
        /* padding: 5px; */
        text-align: center;
        background-color: #black;
        border: solid 1px #red;
        font-size: 20px;
    }
    #panel14 {
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
        $("#flip12").click(function(){
            $("#panel12").slideToggle("slow");
        });
    });
    });
    $(document).ready(function(){
      $(document).ready(function(){
        $("#flip13").click(function(){
            $("#panel13").slideToggle("slow");
        });
    });
    });
    $(document).ready(function(){
      $(document).ready(function(){
        $("#flip14").click(function(){
            $("#panel14").slideToggle("slow");
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
              <li><a href="#monster"><b>MONSTER</b><span class="sr-only">(current)</span></a></li>
              <li><a href="#epiMonster"><b>EPISODE MONSTER</b></a></li>
              <li><a href="#campMonster"><b>CAMPAIGN MONSTER</b></a></li>
              <li id = "navi5"><a href="main.php"><b>PLAYER/CHARACTER/ITEM</b></a></li>
              <li id = "navi6"><a href="geo.php"><b>MAP/CAMP/CAMP-CHARAC/EPISODE</b></a></li>
              <li><a href="npc.php"><b>NPC</b></a></li>
            </ul>
          </div>
        </div>
    </nav>
    <br><br><br>
    <!-- nav bar end -->
    <!-- Monster jiral -->
    <div class="container">
      <h2 id = "monster">MONSTER (Add / Update / Delete)</h2>
      <strong>Monster Type</strong>
      <li>animal</li>
      <li>beast</li>
      <li>dragon</li>
      <li>magical beast</li>
      <li>undead</li>
      <div class="well well-lg">
        <div class="row">

          <!-- Box1 -->
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <div class="wel well-sm">
                <h2>Add Monster</h2>
                  <form class="" action="monsterInsert.php" method="post">
                    Monster Name: <input type="text" name="Monster_name" value=""> <br><br>
                    Monster Level: <input type="text" name="Monster_level" value="1 to 99"> <br><br>
                    Monster Type: <input type="text" name="Monster_type" value="Lower Case Only"> <br><br>
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
                  <form class="" action="monsterInsert.php" method="post">
                    Monster Name: <input type="text" name="Monster_name" value=""> <br><br>
                    Monster Level: <input type="text" name="Monster_level" value=""> <br><br>
                    Monster Type: <input type="text" name="Monster_type" value=""> <br><br>
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
                <h2>Delete NPC</h2>
                  <form class="" action="monsterInsert.php" method="post">
                    Monster Name: <input type="text" name="Monster_name" value=""> <br><br>
                    Monster Level: <input type="text" name="Monster_level" value=""> <br><br>
                    Monster Type: <input type="text" name="Monster_type" value=""> <br><br>
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
        <div id = "flip12"> <string><u>Cick to display all Monster Data</u></strong>
          <div id = "panel12">
            <table>
              <tr>
                <th>Monster Name</th>
                <th>Monster Level</th>
                <th>Monster Type</th>
              </tr>
              <?php
                $mysqli_connection = new MySQLi('vergil.u.washington.edu', 'root', '0505007pP', 'dungeon', 6498);
                if($mysqli_connection->connect_error){
                   echo "Not connected, error: ".$mysqli_connection->connect_error;
                }
                else{
                   echo "Connected.";
                }
                $sql = "SELECT Monster_name, Monster_level, Monster_type FROM MONSTER";
                $result = $mysqli_connection->query($sql);
                if ($result->num_rows > 0) {
                  while ($row = $result-> fetch_assoc()) {
                    echo "<tr><td>". $row["Monster_name"] . "</td><td>". $row["Monster_level"] ."</td><td>". $row["Monster_type"] ."</td></tr>";
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
    <!-- Start Episode Monster -->
    <div class="container">
      <h2 id = "epiMonster">Monster In Episode (Add / Update / Delete)</h2>
      <div class="well well-lg">
        <div class="row">

          <!-- Box1 -->
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <div class="wel well-sm">
                <h2>Add Monster to Episode</h2>
                  <form class="" action="epiMonster.php" method="post">
                    Monster Name: <input type="text" name="Monster_name" value=""> <br><br>
                    Monster Level: <input type="text" name="Monster_level_epi" value="1 to 99"> <br><br>
                    Drop Item: <input type="text" name="Drop_item" value=""> <br><br>
                    Episode Number: <input type="text" name="Monster_epi" value="See Episode Num">
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
                <h2>Add Monster to Episode</h2>
                  <form class="" action="epiMonster.php" method="post">
                    Monster Name: <input type="text" name="Monster_name" value=""> <br><br>
                    Monster Level: <input type="text" name="Monster_level_epi" value="1 to 99"> <br><br>
                    Drop Item: <input type="text" name="Drop_item" value=""> <br><br>
                    Episode Number: <input type="text" name="Monster_epi" value="See Episode Num">
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
                <h2>Add Monster to Episode</h2>
                  <form class="" action="epiMonster.php" method="post">
                    Monster Name: <input type="text" name="Monster_name" value=""> <br><br>
                    Monster Level: <input type="text" name="Monster_level_epi" value="1 to 99"> <br><br>
                    Drop Item: <input type="text" name="Drop_item" value=""> <br><br>
                    Episode Number: <input type="text" name="Monster_epi" value="See Episode Num">
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
        <div id = "flip13"> <string><u>Cick to display all Monster With Episode Number</u></strong>
          <div id = "panel13">
            <table>
              <tr>
                <th>Episode Number</th>
                <th>Monster ID</th>
                <th>Monster Name</th>
                <th>Monster Level</th>
                <th>Drop Item</th>
              </tr>
              <?php
                $mysqli_connection = new MySQLi('vergil.u.washington.edu', 'root', '0505007pP', 'dungeon', 6498);
                if($mysqli_connection->connect_error){
                   echo "Not connected, error: ".$mysqli_connection->connect_error;
                }
                else{
                   echo "Connected.";
                }
                $sql = "SELECT Monster_epi, Monster_id, Monster_name, Monster_level_epi, Drop_item FROM EPISODE_MONSTER";
                $result = $mysqli_connection->query($sql);
                if ($result->num_rows > 0) {
                  while ($row = $result-> fetch_assoc()) {
                    echo "<tr><td>". $row["Monster_epi"] . "</td><td>". $row["Monster_id"] ."</td><td>". $row["Monster_name"] ."</td><td>". $row["Monster_level_epi"] . "</td><td>".$row["Drop_item"] ."</td></tr>";
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
    <br><br><br>
    <!-- Last insert Inlucde Camp Monster -->
    <div class="container">
      <h2 id = "campMonster">Monster In CAMPAIGN (Add / Update / Delete)</h2>
      <div class="well well-lg">
        <div class="row">

          <!-- Box1 -->
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <div class="wel well-sm">
                <h2>Add Monster to Campaign</h2>
                  <form class="" action="camMonster.php" method="post">
                    Camapign Name: <input type="text" name="Camp_name_mons" value="Campaign Name"> <br><br>
                    Monster Name: <input type="text" name="Monster_name_camp" value="Monster Name"> <br><br>
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
                <h2>Add Monster to Campaign</h2>
                  <form class="" action="camMonster.php" method="post">
                    Camapign Name: <input type="text" name="Camp_name_mons" value="Campaign Name"> <br><br>
                    Monster Name: <input type="text" name="Monster_name_camp" value="Monster Name"> <br><br>
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
                <h2>Add Monster to Campaign</h2>
                  <form class="" action="camMonster.php" method="post">
                    Camapign Name: <input type="text" name="Camp_name_mons" value="Campaign Name"> <br><br>
                    Monster Name: <input type="text" name="Monster_name_camp" value="Monster Name"> <br><br>
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
        <div id = "flip14"> <string><u>Cick to display all Monster With Episode Number</u></strong>
          <div id = "panel14">
            <table>
              <tr>
                <th>Campaign Name</th>
                <th>Monster Name</th>
              </tr>
              <?php
                $mysqli_connection = new MySQLi('vergil.u.washington.edu', 'root', '0505007pP', 'dungeon', 6498);
                if($mysqli_connection->connect_error){
                   echo "Not connected, error: ".$mysqli_connection->connect_error;
                }
                else{
                   echo "Connected.";
                }
                $sql = "SELECT Camp_name_mons, Monster_name_camp FROM INCLUDE_CAMP_MONSTER";
                $result = $mysqli_connection->query($sql);
                if ($result->num_rows > 0) {
                  while ($row = $result-> fetch_assoc()) {
                    echo "<tr><td>". $row["Camp_name_mons"] . "</td><td>". $row["Monster_name_camp"] ."</td></tr>";
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
    <br><br><br>
  </body>
</html>
