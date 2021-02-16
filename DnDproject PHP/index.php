<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <title> Dungeons and Dragon Welcome Page</title>
    <!-- <link rel="stylesheet" href="styleWelcome.css"> -->
    <style>
    @import url(https://fonts.googleapis.com/css?family=Shadows+Into+Light);
    * {
      padding: 0;
      margin: 0;
      font-family: "Shadows Into Light";
      /* font-family: sans-serif; */
    }
    body{
      background: #000;
      background-image: url('logo_royalty_free.png');
      background-repeat: no-repeat;
      background-size: 300px 300px;
      background-position: center;
      padding-top: 30%;
    }
    .container{
      text-align: center;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
      width: 100%;
    }
    .container span{
      text-transform: uppercase;
      display: black;
    }
    .text1{
      color: red;
      font-size: 60px;
      font-weight: 700;
      letter-spacing: 8px;
      margin-bottom: 20px;
      position: relative;
      animation: text 3s 1;
    }

    .text2{
      font-size: 30px;
      color: white;
      background: black;
      text-align: center;
    }
    .link1 li{
      font-size: 50px;
      text-align: center;
    }
    @keyframes text {
      0%{
        color: black;
        margin-bottom: -40px;
      }
      30%{
        letter-spacing: 25px;
        margin-bottom: -40px;
      }
      85%{
        letter-spacing: 8px;
        margin-bottom: -40px;
      }
    }
    </style>
  </head>
  <body>
    <div class="container">
      <span class="text1">Welcome to D&D DB</span>
      <br>
      <span class="text2">Team SQeaL</span>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="link1">
      <li>
        <a href="main.php"> <b> Enter To Database</b>
      </li>
    </div>
  </body>
</html>
