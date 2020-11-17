
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.1/assets/img/favicons/favicon.ico">
    <style>
        #nav
        {
          background-color: lightgrey;
          width: 50%;
          border: 5px solid lightgrey;
          padding: 50px;
          margin: 20px;
        }
</style>
    <title></title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item ">
            <a class="nav-link" href="complain.php">Complains</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="pending.php">Pending</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="solved.php">Solved</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <a href="EmpHome.html" class="btn btn-outline-light my-2 my-sm-2" role="button"style="margin:5px;">Home</a>

          <a href="index.php" class="btn btn-outline-light my-2 my-sm-2" role="button" style="margin:5px;">Logout</a>
        </form>
      </div>
    </nav>

    <main role="main" >

      <div class="starter-template">
         <center>
            <br><br><br><br><br><br>
            
           <?php 
				session_start();

				$conn=mysqli_connect("localhost","evoting","evoting","Complain");

				$sql1="UPDATE complaint set Solved_Engineer='Y',Remark_Engineer='".$_POST["r1"]."' WHERE Complain_no='".$_SESSION['cno1']."';";
				    mysqli_query($conn,$sql1);    
			?>
			<br><br><br>
 				<p style="color:#1e58c6;font-size:40px">Thank you!!!!</p>
 				<p style="font-size: 30px;color: red">Your Complain Status Changed Successfully.</p>
			<br>

            
        </center>
    </div>

    </main><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 		<?php header("Refresh:1.5; url=EngHome.html");?>

  </body>
</html>



 