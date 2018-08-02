<?php
include('login.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Al-Hajj Bank</title>

<meta name="description" content="">
<meta name="author" content="">
<!-- Favicons
    ================================================== -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="../css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../fonts/font-awesome/css/font-awesome.css">
<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="../css/style.css">
<link rel="stylesheet" type="text/css" href="../css/prettyPhoto.css">
<link rel="stylesheet" type="text/css"  href="../css/dayMode.css">
<link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/modernizr.custom.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="jquery-3.2.1.min.js"></script>
</head>
<body>
  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
       <a href="index.php">
            <img src="../2.jpg" style="height: 65px; float: left; padding-right: 15px;" >
          </a>
      <a class="navbar-brand" href="#">Al-Hajj Bank</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="../index.php">Home</a></li>
      <li><a href="about.php">About</a></li>
      <li class="active"><a href="contact.php">Contact</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span></span>language</a></li>
      <?php
            if(isset($_SESSION['login_user'])){ 
            ?>
            <li><a id="profileId" href="#" data-toggle="modal" data-target="#myInfo"> <?php echo $_SESSION['FName']," ",$_SESSION['Lname'];?></a></li>
            <div class="modal fade" id="myInfo" role="dialog">
              <div class="modal-dialog modal-md">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">profile</h4>
                  </div>
                  <div class="modal-body">
                    <div class="container">
                      <h4><?php echo "Welcom ",$_SESSION['FName']," ",$_SESSION['Lname'];?></h4>
                      <p>If you want to edit your profile<a href="../index.php"> Click Here</a></p>
                      <button class="btn btn-default"><a href="logout.php">Logout</a></button>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">close
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <?php
            }
            else
            {     
            ?>
             <li class=""><a href="#signin-section" class="page-scroll" data-toggle="modal" data-target="#myModal">Sign in</a></li>
            <div class="modal fade" id="myModal" role="dialog">
              <div class="modal-dialog modal-md">
                  <div class="modal-content">
                    <div class="modal-header">
                      <form action="login.php" method="post">            
                        <div class="form-group">
                          <label for="username">Username:</label> <input type="text"
                            class="form-control" id="UserName" placeholder="Enter username"
                            name="UserName" required>
                        </div>
                        <div class="form-group">
                          <label for="pwd">Password:</label> <input type="password"
                            class="form-control" id="pwd" placeholder="Enter password"
                            name="password" required>
                            <button type="button" class="btn btn-default"><a href="main/forgetPassword.php" > Forget password?</a></button>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox" name="remember"> Remember me</label>
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                        <div class="modal-footer">
                          <a type="button" class="btn btn-default" href="main/signup.php">Sign Up
                          </a>
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </ul>
            </div>
        <?php
        }
        ?>
    </ul>
  </div>
</nav>
  

</head>
<body>
  <div class="container">
    <div class="section-title center">
      <h2>Contact Us</h2>
      <hr>
      <div id="map" style="width:100%;height:500px">
      </div>
      <script>
      function myMap() {
        var myCenter = new google.maps.LatLng(21.6171571, 39.15624079999998);
        var mapCanvas = document.getElementById("map");
        var mapOptions = {center: myCenter, zoom: 14};
        var map = new google.maps.Map(mapCanvas, mapOptions);
        var marker = new google.maps.Marker({position:myCenter});
        marker.setMap(map);
      }
      </script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyANHR5I-6qn8qjCGDfzLd7e8cZvB7lUuT8&callback=myMap"></script>
    </div>
    <div class="col-md-4">
      <h4>Contact info</h4>
      <div class="space">
      </div>
      <p><i class="fa fa-map-marker"></i>  MACHINERY & EQUIPMENT EXHEBITION </p>
      <div class="space"></div>
      <p><i class="fa fa-envelope-o"></i> hajcc@haj.gov.sa</p>
      <div class="space"></div>
      <p><i class="fa fa-phone"></i> Phone: 800-4304444
        <br/><i class="fa fa-fax"></i> Fax: 800-4304444
      </p>
    </div>
    <div class="col-md-8">
      <h4>Leave us a message</h4>
      <form name="sentMessage" id="contactForm" action="contact_me.php" method="POST">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" id="name" class="form-control" placeholder="Name" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="email" id="email" class="form-control" placeholder="Email" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        <div class="form-group">
          <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required=""></textarea>
          <p class="help-block text-danger"></p>
        </div>
        <div id="success"></div>
        <button type="submit" class="btn btn-default">Send Message</button>
      </form>
    </div>
  </div>

  <div id="social-section">
    <div class="container">
      <div class="social">
        <ul>
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
  <div id="footer">
    <div class="container">
      <p>© Owned by <a>Abdullah Alkaff</a>, <a>Noura Alrooqi</a>, <a>Sara Zuiran</a></p>
    </div>
  </div>

</body>
</html>