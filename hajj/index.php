<?php
include('main/login.php');
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
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">
<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
<link rel="stylesheet" type="text/css"  href="css/dayMode.css">
<link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/modernizr.custom.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="jquery-3.2.1.min.js"></script>
</head>
<body>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">

  <div class="container-fluid">

    <div class="navbar-header">
      <a href="index.php">
            <img src="2.jpg" style="height: 65px; float: left; padding-right: 15px;" >
          </a>
      <a class="navbar-brand" href="#">Al-Hajj Bank</a>
    </div>
    
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="main/about.php">About</a></li>
      <li><a href="main/contact.php">Contact</a></li>
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
                      <p>If you want to edit your profile<a href="main/profile.php"> Click Here</a></p>
                      <button class="btn btn-default"><a href="main/logout.php">Logout</a></button>
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
                      <form action="main/login.php" method="post">            
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
  
<header class="text-center" name="home">
  <?php
            if(isset($_SESSION['login_user'])){ 
            ?>
            <div id="userDiv">
      <?php
      $id = $_SESSION['mid'];
      $sql = "SELECT * From Member WHERE mid = $id";
      $result = $conn->query($sql);
      $row = $result->fetch_assoc();
      ?>
      <div class="col-md-12 ">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 style="color:#00b1b1;"><?php echo $_SESSION['FName']," ",$_SESSION['Lname']?>
                  </h4>
          </div>
          <div class="panel-body">
            <div class="box box-info">
              <div class="box-body">
                <div class="col-sm-12" align="center">
                  
                  <!-- /input-group -->
                  
                  <hr style="margin:5px 0;">
                </div>
                <div class="clearfix">
                </div>
              </div>
             
              
              <div class="clearfix">
              </div>
              <div class="bot-border">
              </div>
              <div class="col-xs-8">
                <div class="col-sm-5" >Date Of Birth:
                </div>
                <div class="col-sm-5">
                  <input type="Date" class="form-control" id="BirthDate" value=<?php echo $row['BirthDate']; ?>>
                </div>
              </div>
              <div class="clearfix">
              </div>
              <div class="bot-border">
              </div>
              <div class="col-xs-8">
                <div class="col-sm-5" >Username:
                </div>
                <div class="col-sm-5">
                  <input type="text" maxlength="15"  onkeyup="SendSearchRequest()"
                  <?php
                  echo 'class="form-control" id="login_user" value='.$row['UserName'].'>';
                  ?>
                  <p id="search_result"> </p>
                </div>
              </div>
              
              <div class="bot-border">
              </div>
              <div class="col-xs-8">
                <div class="col-sm-5" >Mobile:
                </div>
                <div class="col-sm-5">
                  <input type="text" maxlength="10" class="form-control" id="Mobile" value=<?php echo $row['Mobile']; ?>>
                </div>
              </div>
              <div class="clearfix">
              </div>
              <div class="clearfix">
              </div>
              <div class="bot-border">
              </div>
              <div class="col-xs-8">
                <div class="col-sm-5" >City:
                </div>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="City" value=<?php echo $row['City']; ?>>
                </div>
              </div>
              <div class="clearfix">
              </div>
              <div class="bot-border">
              </div>
              <div class="col-xs-8">
                <div class="col-sm-5">Country:
                </div>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="Country" value=<?php echo $row['Country']; ?>>
                </div>
              </div>
              <div class="clearfix">
              </div>
              <div class="bot-border">
              </div>
              <div class="col-xs-8">
                <div class="col-sm-5" >Email:
                </div>
                <div class="col-sm-5">
                  <input type="email" class="form-control" id="Email" value=<?php echo $row['Email'];?>>
                </div>
              </div>
              <div class="clearfix">
              </div>
              <div class="bot-border">
              </div>
              <div class="col-xs-8">
                <div class="col-sm-5" >Balance in SR:
                </div>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="PersonHomePage" value=<?php echo $row['balance'];?>>
                </div>
              </div>
              <div class="clearfix">
              </div>
              <div class="bot-border">
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
        </div>
      </div>
    </div>

            <?php
            }
            else
            {     
            ?>
    <div class="intro-text" style=" background-image: url('1.png'); max-height: 580px; background-repeat: no-repeat; imag">
      <h1>Welcome to <span class="color">Al-Hajj Bank</span></h1>
      <h3 style="color: black;"> We provide cashless shopping</h3>
      <div class="clearfix"></div>
      <a href="main/about.php" class="btn btn-default btn-lg page-scroll">Learn More</a> </div>
      <?php 
    }
    ?>
  </header>


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