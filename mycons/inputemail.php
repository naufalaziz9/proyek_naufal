
<?php
session_start();
// if(isset($_SESSION["confirmation"])){
//     header("Location: confirmation.php");
// }


?>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width" />
    <!-- NOTE: external links are for testing only -->
    <link href="//cdn.muicss.com/mui-0.1.2/email/mui-email-styletag.css" rel="stylesheet" />
    <link href="//cdn.muicss.com/mui-0.1.2/email/mui-email-inline.css" rel="stylesheet" />
    <style>
        nav {
            margin: auto;
            text-align: center;

            width: 85%;
            margin: 10px auto;
        }

        nav ul ul {
            display: none;
        }

        nav ul {
            background: white;
            padding: 0 20px;
            list-style: none;
            position: relative;
            display: inline-table;
            width: 100%;
        }

        nav ul li {
            float: left;
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

        /* nav ul ul li {
            float: none;
            border-top: 1px soild #53bd84;
            border-bottom: 1px solid #53bd84;
            position: relative;
        } */

        nav ul ul li a {
            padding: 15px 40px;
            color: black;
        }

        nav ul li:hover {
            background: #38a7bb;
            text-decoration: none;
        }

        nav ul li:hover a {
            color: #fff;
        }

        nav ul ul li a:hover {
            background-color: red;
            text-decoration: none;
        }

        .inputemail{
            margin:20px;
            width:300px;
            height:50px;
            padding:10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size:17px;
            line-height: 1.42857143;
            color: #555;
        }
    </style>
</head>

<body>
    <nav
        style='width:100%;margin:0px;position:fixed;z-index:1;font-family: "Roboto",Helvetica,Arial,sans-serif;line-height: 1.5;font-weight: 570;text-transform: uppercase;letter-spacing: 0.1em;'>
        <ul>
        <li><img src="assets/images/manok.png" style='height:80px;width:192px;margin-top:17px;margin-left:10px;'
                    onclick="window.location.href='index.php'"></li>
            <li><a href="music.php" style="margin-top: 20px;text-decoration: none;" class="yes-hover">Music</a></li>
            <li><a href="drama.php" style="margin-top: 20px;text-decoration: none;" class="yes-hover">Theatrical</a>
            </li>
            <li><a href="orchestra.php" style="margin-top: 20px;text-decoration: none;" class="yes-hover">Orchestra </a>
            </li>
            <li><a href="expo.php" style="margin-top: 20px;text-decoration: none;" class="yes-hover">Expo</a>
            </li>
            <li style="float: right;" class="yes-hover"><a href="login.php"
                    style="margin-top: 20px;text-decoration: none;" class="yes-hover"></a>
            </li>
            <li style="float: right;" class="yes-hover"><a href="login.php"
                    style="margin-top: 20px;text-decoration: none;" class="yes-hover">Log In</a></li>
            <li style="float: right;" class="yes-hover"><a href="signup.php"
                    style="margin-top: 20px;text-decoration: none;" class="yes-hover">Register</a></li>
        </ul>
    </nav>
    <table class="mui-body" cellpadding="0" cellspacing="0" border="0">
        <tr>
            <td style="padding:50px;" class="mui-panel">
                <center>

                    <!--[if mso]><table><tr><td class="mui-container-fixed"><![endif]-->
                    <div style="text-align:center;" class="mui-container">
                        <!--

              email goes here

              -->
              <form action="aksiemail.php" method="post">
                        <div class="mui-divider-bottom">
                            
                            <h2 style='margin-bottom:0px;'>
                                Dapatkan tiketmu!
                            </h2>
                            <!-- <div class="mui-divider-bottom"></div> -->
                            <p style="padding:20px; text-align:center;">
                                Masukkan emailmu di bawah ini untuk mendapat tiket.</p>
                            <!-- <li style="margin-top:32px;margin-left: 20px;"> -->
                            <input type="text" class='inputemail' placeholder="Email" required="" name="email"
                                style="width: 500px">
                            <!-- </li> -->
                           <button style="background-color: #FFF;border-width:0cm;"> <a class="mui-btn mui-btn-primary mui-btn-lg">Kirimkan email anda</a></button>
                            <br><br>
                        </div>
                        </form>
                    </div>
                    <!--[if mso]></td></tr></table><![endif]-->
                </center>
            </td>
        </tr>
    </table>
</body>

</html>