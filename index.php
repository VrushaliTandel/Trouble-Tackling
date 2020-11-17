<?php
  session_start();
  if(isset($_POST["login"]))
  {
    $_SESSION['eid']=$_POST['id'];
    if ($_SESSION['eid']==11001111)
      header("location:EngHome.html");
    else
      header("location:EmpHome.html");
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>login</title>
    <script type="text/javascript" >
   function preventBack(){window.history.forward();}
    setTimeout("preventBack()", 0);
    window.onunload=function(){null};
</script>
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
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->


    <div class="site-section bg-light">
      <div class="container">
        <div class="row">

           <div class="col-md-12 col-lg-6 mb-5">
            <img src="logo.png" width="100%">
          </div>

          <div class="col-md-12 col-lg-6 mb-5">
              <center></center>
            <form  method="POST" class="p-5 bg-white">
              <h2 class="mb-4 text-black">Sign in</h2>
              
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email2">ID</label>
                  <input type="text" name="id" class="form-control rounded-0">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="password">Password</label>
                  <input type="password" name="password" class="form-control rounded-0">
                </div>
              </div>
              
  
              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" name="login" value="Login" class="btn btn-primary  py-2 px-4 rounded-0">
                </div>
              </div>
            </form>
            </center>
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