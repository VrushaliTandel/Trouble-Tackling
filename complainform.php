<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/animate.css">
    
    
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/fl-bigmug-line.css">
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body style="overflow: hidden;">
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

      <div class="site-navbar bg-dark">
        <div class="container py-1">
          <div class="row align-items-center">

            <div class="col-4 col-md-4 col-lg-8">
              
            </div>
      
            <div class="col-8 col-md-8 col-lg-4 text-right">
              <a href="EngHome.html" class="btn btn-outline-light my-2 my-sm-2 rounded-0 " style="margin: 5px">HOME</a>
              <a href="index.php" class="btn btn-outline-light my-2 my-sm-2 rounded-0 " style="margin: 5px">LOGOUT</a>
            </div>


          </div>
        </div>
      </div>
    </div>
  
    <div class="unit-5 overlay" style="background-image: url('images/hero_bg_1.jpg');">
      <div class="container text-center">
        <h2 class="mb-0">ComplainForm</h2>
        <p class="mb-0 unit-6"><a href="new.html">Home</a> <span class="sep">></span> <span>Register Complain</span></p>
      </div>
    </div>


    <div class="site-section bg-light" style="padding: 10px">
      <div class="container">
        <div class="row">

          <div class="col-md-12 col-lg-6 mb-5" style="margin : 0% 25%">
          
            <form action="complaindb.php" class="p-5 bg-white" method="POST">
             <center>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="Emp_Id">Employee Id</label>
                  <br>
                  <input type="text" name="id" id="id1" value="<?php echo $_SESSION['eid'];?>" readonly>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="Ctype">Complain Type</label>
                  <br>
                  <input type="radio" name="Ctype" id="ctype" value="H" checked>Hardware
                  <input type="radio" name="Ctype" id="ctype" value="S">Software
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="desc">Description</label>
                  <br>
                  <textarea name="desc1" id="desc" placeholder="Explain your problem..." style="height:60%;width: 50%" required ></textarea> 
                </div>
              </div>
              
            
              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" name="submit" value="Submit" class="btn btn-primary  py-2 px-4 rounded-0">
                  <input type="reset"  name="reset" value="Reset" class="btn btn-primary  py-2 px-4 rounded-0">
                </div>
              </div>

            </center>
            </form>
          </div>

          
        </div>
      </div>
    </div>

   


  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>