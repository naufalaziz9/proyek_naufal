<html>

<heAD>
  <title>login</title>
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

    nav ul li:hover {
      background: #666;
    }

    nav ul li:hover a {
      color: #fff;
    }

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

    nav ul ul li a:hover {
      background-color: #666;
    }

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

   
  </style>
  <nav>
    <ul>
      <li class='logo'><a href='index.php'>MY CONS</a></li>
      <li><a href="music.php">Music</a></li>
      <li><a href="drama.php">Drama</a>
        <!-- <ul>
    <li><a href="#">Music</a></li>
    <li><a href="#">Art & Culture</a></li>
    <li><a href="#">Park</a></li>
    </ul> -->
      </li>
      <li><a href="orchestra.php">Orchestra </a>
        <!-- <ul>
    <li><a href="#">Peminjaman</a></li>
    <li><a href="#">Pengembalian</a></li>
    </ul> -->
      </li>
      <li><a href="expo.php">Expo</a>
        <!-- <ul>
    <li><a href="#">Peminjaman</a></li>
    <li><a href="#">Pengembalian</a></li>
    </ul> -->
      </li>
      <!-- <li style="float: right;margin: 20">Log In</li>
      <li><a href="#" onClick="return confirm ('Yakin?')"> </a></li> -->
    </ul>
  </nav>


  <div class="container">

    <form class="form-signin" method="post" action="receive.php" action="index.php">
      <h2 style="text-align: center" class="form-signin-heading">Please sign in</h2>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input style="width: 450px" type="email" id="inputEmail" class="form-control" placeholder="Email address"
        required="" autofocus="" name="emaillogin">
      <label for="inputPassword" class="sr-only">Password</label>
      <input style="width: 450px" type="password" id="inputPassword" class="form-control" placeholder="Password"
        required="" name="passwordlogin">
      <div class="checkbox">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="login"  >Sign in</button>
      <button class="btn btn-lg btn-primary btn-block" type="submit" onclick="window.location.href='signup.php'">Sign
        up</button>
      <hr style="width: 40%; size:10px;color:#333;">
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in with google </button>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in with facebook</button>
    </form>

  </div> <!-- /container -->


  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

  <link rel="stylesheet" href="external.css">
  <script src="asset/script/jquery-3.4.1.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</BODY>

</html>