
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
            <br><br><br>
            <div id="nav">
           <?php
                session_start();
                $type=$_SESSION['ctype'];
                if($type=='S')
                    $type='Software';
                else
                    $type='Hardware';
                echo "<b><br><br>Complain Number :</b>".$_SESSION['cno1']."<br><br>"."<b>Complain Type :</b>".$type."<br><br> <b>Description :</b>".$_SESSION['desc'];
            ?>
  
            <form method="POST" action="complainstatusdb.php">
                <br><br><br>
                <b>Is it Solved Properly:</b>
                <input type="checkbox" name="sol[]" value="Y" required>Yes
                <br><br>
                <b>Remarks:</b>
                <textarea name="r1" id="remark1" required></textarea>
                <br><br>
                 <input type="submit" name="submit" value="submit" class="btn btn-success">
            </form>

            </div>
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
    

  </body>
</html>
            