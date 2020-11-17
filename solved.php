
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.1/assets/img/favicons/favicon.ico">

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
          <li class="nav-item">
            <a class="nav-link" href="complain.php">Complains</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pending.php">Pending</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="solved.php">Solved</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <a href="EngHome.html" class="btn btn-outline-light my-2 my-sm-2" role="button"style="margin:5px;">Home</a>

          <a href="index.php" class="btn btn-outline-light my-2 my-sm-2" role="button" style="margin:5px;">Logout</a>
        </form>
      </div>
    </nav>

    <main role="main" class="container">

      <div class="starter-template">
        <?php
  session_start();
  $conn=mysqli_connect("localhost","evoting","evoting","Complain");
  $sql="SELECT * FROM complaint WHERE Solved_Employee='Y';";
  $result = mysqli_query($conn,$sql);
  $count=mysqli_num_rows($result);
  $sr=1;
  echo "<br><br><br><br>";
  if($count>0)
  {
      echo "
      <table class='table'>
        <thead class='table-active'>
          <tr>
            <th scope='col'>Sr.No</th>
            <th scope='col'>Complain No</th>
            <th scope='col'>Employee Id</th>
            <th scope='col'>Complain Type</th>
            <th scope='col'>Description</th>
            <th scope='col'>Solved_Date</th>
            <th scope='col'>Remark_Engineer</th>
          </tr>
        </thead>
        <tbody>
      ";
        while($count > 0) 
            {
                while($row = mysqli_fetch_assoc($result))
                {
                  $cno=$row['Complain_No'];
                  $ctype=$row['Complain_Type'];
                  $Eid=$row['Employee_Id'];
                  $desc=$row['Description'];
                  $Re_Eng=$row['Remark_Engineer'];
                  $date=$row['Solved_Date'];
                  echo "<tr>
                          <th scope='row'>$sr</th>
                          <td>$cno</td>
                          <td>$Eid</td>
                          <td>$ctype</td>
                          <td>$desc</td>
                          <td>$date</td>
                          <td>$Re_Eng</td>
                        </tr>";
                        $sr+=1;
                }
                $count=$count-1;  
            }
            echo "</tbody>
            </table>";
  }
  else
  {
    echo "<center><strong style='font-size:150%; color:brown'>No Data Found</strong></center>";
  }
?>
        
      </div>

    </main><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
  </body>
</html>
