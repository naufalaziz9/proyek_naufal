<?php
session_start();
if(isset($_SESSION["nama"])){
  header("Location: homepagelogin.php");
}
?>



<html>

<heAD>
  <title>signup</title>
  <!--<link rel="stylesheet" href="asset/bootstrap/css/bootstrap-theme.css" rel="stylesheet">-->
  <link rel="stylesheet" href="loginexternal.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">

</heAD>

<BODY>
  <style>
    * {
      margin: 0;
      padding: 0;
    }

    body {
      background-color: #fff;
      font-family: Arial, Helvetica, sans-serif;
      color: black;
    }

    nav {
      margin: auto;
      text-align: center;

      width: 85%;
      margin: 0px auto;
    }

    nav ul ul {
      display: none;
    }

    nav ul li:hover>ul {
      display: block;
      width: 150px;
    }

    nav ul {
      background: white;
      padding: 0 20px;
      list-style: none;
      position: relative;
      display: inline-table;
      width: 100%;
    }

    nav ul:after {
      content: "";
      clear: both;
      display: block;
    }

    nav ul li {
      float: left;
    }

    /* nav ul li:hover {
      background: #38a7bb;
    } */

    /* nav ul li:hover a {
      color: white;
    } */

    nav ul li a {
      display: block;
      padding: 25px;
      color: black;
      text-decoration: none;
    }

    nav ul ul {
      background: #53bd84;
      border-radius: 0px;
      padding: 0;
      position: absolute;
      top: 100%;
    }

    nav ul ul li {
      float: none;
      border-top: 1px soild #53bd84;
      border-bottom: 1px solid #53bd84;
      position: relative;
    }

    nav ul ul li a {
      padding: 15px 40px;
      color: black;
    }

    /* nav ul ul li a:hover {
      background-color: #666;
    } */

    nav ul ul ul {
      position: absolute;
      left: 100%;
      top: 0;
    }

    .logo {
      color: black;
      font-family: sans-serif;
      font-size: 40px;
      font-style: italic;
      padding: 10px;
    }

    .social-media {

      float: left;
    }

    .social-media2 {

      float: left;
    }

    .sosmed {
      width: 35.5%;
      margin-left: 32.5%
    }

    .sosmed button {
      width: 250px;
      background-color: #CC0000
    }

    .container {
      margin-top: 100px
    }

    .lihover:hover {
      /* text-decoration: none; */
      background: #38a7bb;
    }

    .lihover:hover a {
      color: white;
    }

    .ahover:hover {
      text-decoration: none;
      /* background: #38a7bb; */
      color: #fff;
    }
  </style>
  <nav
    style='top:0px;width:100%;margin:0px;position:fixed;z-index:1;font-family: "Roboto",Helvetica,Arial,sans-serif;line-height: 1.5;font-weight: 570;text-transform: uppercase;letter-spacing: 0.1em;'>
    <ul>
      <li><img src="assets/images/manok.png" style='height:80px;width:192px;margin-top:16px;margin-left:10px;'
          onclick="window.location.href='index.php'"></li>
      <li class='lihover'><a href="music.php" style="margin-top: 20px;text-decoration:none;" class="ahover">Music</a>
      </li>
      <li class='lihover'><a href="drama.php" style="margin-top: 20px;text-decoration:none;"
          class="ahover">Theatrical</a>
      </li>
      <li class='lihover'><a href="orchestra.php" style="margin-top: 20px;text-decoration:none;"
          class="ahover">Orchestra </a>
      </li>
      <li class='lihover'><a href="expo.php" style="margin-top: 20px;text-decoration:none;" class="ahover">Expo</a>
      </li>
    </ul>
  </nav>


  <div class="container">

    <form class="form-signin" method="post" action="registerrecive.php">

      <h2 style="text-align: center" class="form-signin-heading">Please sign up</h2>
      <label for="username" class="sr-only">Username</label>
      <input style="width: 450px" type="username" id="inputuser" class="form-control" placeholder="Username" required=""
        autofocus="" name="usernameregris">
      <label for="inputEmail" class="sr-only">Email address</label>
      <input style="width: 450px" type="email" id="inputEmail" class="form-control" placeholder="Email address"
        required="" autofocus="" name="emailregris">
      <label for="inputPassword" class="sr-only">Password</label>
      <input style="width: 450px" type="password" id="inputPassword" class="form-control" placeholder="Password"
        required="" name="regrispassword">
      <div class="checkbox">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>

      <button class="btn btn-lg btn-primary btn-block" style=" background-color:#337ab7" type="submit"
        name="btregris">Register</button>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="btregris"
        onclick="window.location.href='login.php'">Login</button>
      <hr style="width: 40%; size:10px;color:#333;">

    </form>

  </div> <!-- /container -->
  <div class='sosmed'>
    <div class="social-media">
      <a
        href="https://accounts.google.com/signin/v2/identifier?hl=en&continue=https%3A%2F%2Fwww.google.com%2Fsearch%3Fq%3Dgmail%2Blogin%26rlz%3D1C1GGRV_enID815ID815%26oq%3Dgmail%26aqs%3Dchrome.1.69i57j35i39j0l2j69i61l2.4270j0j7%26sourceid%3Dchrome%26ie%3DUTF-8&flowName=GlifWebSignIn&flowEntry=AddSession">
        <button style="float:left;background-color:#337ab7" class="btn btn-lg btn-primary btn-block" type="submit">Sign
          in with google </button>
      </a>

    </div>
    <div class="social-media2">

      <a href="https://www.facebook.com/"> <button
          style="float:right;position:relative;left:20px;background-color:#337ab7"
          class="btn btn-lg btn-primary btn-block" type="submit"> Sign in with facebook </button></a>
    </div>
  </div>

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>



  <link rel="stylesheet" href="external.css">
  <script src="asset/script/jquery-3.4.1.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</BODY>

</html>