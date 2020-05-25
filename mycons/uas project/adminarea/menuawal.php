
<?php
include("../configonline.php");
$total=mysqli_query($con,"select * from user");
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css" rel="stylesheet">
      
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">
        <link rel="canonical" href="https://getbootstrap.com/docs/3.3/examples/dashboard/">
    
        <title>Dashboard Template for Bootstrap</title>
    
        
      </head>
    <body>
    <?php echo include('logo.html');?>
    <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">MyCons Est.2019</a>
            </div>
                  
          </div>
        </nav>
        <div id='a' >
    
    </div>
        <div class="container-fluid">
          <div class="row">
          <?php include("sidebar.php")?>
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main"style="position: relative;margin-top:-750px">
              <h1 class="page-header">User MyCons</h1>


   
    
             
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>ID User</th>
                      <th>Nama User</th>
                      <th>Email</th>
                      <th>Password</th>
                      <th>Nomor Telepon</th>
                      <th>Alamat</th>
                     
                    </tr>
                  </thead>
                  <tbody>
                    <?php while($tampung=mysqli_fetch_assoc($total)): ?>
                    <tr>
                      <td><?php echo $tampung['user_id']   ?></td>
                      <td><?php echo $tampung['nama']   ?></td>
                      <td><?php echo $tampung['email']   ?></td>
                     
                      <td><?php echo $tampung['password']   ?></td>
                      <td><?php echo $tampung['no_telp']   ?></td>
                      <td><?php echo $tampung['alamat']   ?></td>
                     
                     
                 
                      
                    </tr>
                    <?php endwhile; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
    
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
        <script src="../../dist/js/bootstrap.min.js"></script>
        <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
        <script src="../../assets/js/vendor/holder.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
      
        <script src="../assets/script/jquery-3.4.1.min.js"></script>
        <script src="../assets/bootstrap/js/bootstrap.js"></script>
        <script src="script.js"></script>
    </body>
</html>