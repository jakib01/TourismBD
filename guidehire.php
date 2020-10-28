<?php
    session_start();
    require_once('dbconfig/config.php');
    //phpinfo();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>TourismBD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="js/script.js" rel="stylesheet">
  <link rel="stylesheet" href="css/style2.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>



    <!-- ============================================================== Nav Bar ============================================================ -->



 <nav class="navbar navbar-default"> <!-- Navber -->
    <div class="container">

      <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Menu</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="home.php"><img src="img/logo1.png" alt=""></a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b>Place to go</b> <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="places.php">Cox's Bazar</a></li>
                <li><a href="#">Bandarban</a></li>
                <li><a href="#">Sylhet</a></li>
                <li><a href="#">Rangamati</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b>Acccommadation</b> <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="accomodation.php">Dhaka</a></li>
                <li><a href="#">Chittagong</a></li>
                <li><a href="#">Sylhet</a></li>
                <li><a href="#">Khulna</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b>Tour Guide </b><span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="tourguidelist.php">Dhaka</a></li>
                <li><a href="#">Chittagong</a></li>
                <li><a href="#">Sylhet</a></li>
                <li><a href="#">Khulna</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b>Gallery</b> <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Photo</a></li>
                <li><a href="#">Video</a></li>
                
              </ul>
            </li>
<li><a href="map.php"><b>Map</b></a></li>
            <li><a href="#"><b>Account</b></a></li>
            <li><a href="aboutus.php"><b>About Us</b></a></li>
          </ul>
    
          <ul class="nav navbar-nav navbar-right">
            <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span><b> Sign Up </b></a></li>
            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span><b> Login </b></a></li>
          </ul>
       </div>

    </div>
  </nav><!-- Nav end --> 


 <!-- === BEGIN CONTENT === -->
            <!-- <div id="content">
                <div class="container background-white">
                    <div class="row margin-vert-30">
                        Register Box
                        <div class="col-md-6 col-md-offset-3 col-sm-offset-3">


                            <form class="signup-page">

                                <div class="signup-header" name="registration" action="signup.php" method="post">
                                    <h2>Personal Information’s</h2> 
                                </div>

                                <label>Full Name</label>
                                <input class="form-control margin-bottom-20" type="text" name="username" placeholder="Type your name" required />

                                <label>Email Address
                                    <span class="color-red">*</span>
                                </label>
                                <input class="form-control margin-bottom-20" type="email" name="email" placeholder="Type your email" required />

                                <label>Password</label>
                                <input class="form-control margin-bottom-20" type="password" name="password" placeholder="Type your Password" required />

                                <label>Confirm Password</label>
                                <input class="form-control margin-bottom-20" type="password" name="cpassword" placeholder="Confirm your Password" required />

                                <button name="register" class="sign_up_btn" type="submit">Sign Up</button>

                                <input type="register" name="Submit" value="Register" />
                                 <label>Street</label>
                                <input class="form-control margin-bottom-20" type="text">
                                 <label>Postal code</label>
                                <input class="form-control margin-bottom-20" type="text">
                                <label>City</label>
                                <input class="form-control margin-bottom-20" type="text">
                                <label>Country</label>
                                <input class="form-control margin-bottom-20" type="text">
                
                                <hr>
                                <div class="row">
                                    <div class="col-lg-8">
                                        <label class="checkbox">
                                            <input type="checkbox">I read the
                                            <a href="#">Terms and Conditions</a>
                                        </label>
                                    </div>
                                    
                                        <a href="confirm.php" class="btn btn-primary btn-lg">CONFIRM</a> 
                                   
      
                                </div>
                            </form>


                           




                           
                                
                        </div>
                         End Register Box 
                    </div>
                </div>
            </div> -->
            <!-- === END CONTENT === -->


<div id="main-wrapper">
    <center><h2>Hiring Form</h2></center>

        <form action="guidehire.php" method="post">
            <div class="imgcontainer">
                <img src="img/avatar.png" alt="Avatar" class="avatar">
            </div>
            <div class="inner_container">
                <label><b>Full Name</b></label>
                <input type="text" placeholder="Enter Full Name" name="name" required>
                <label><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" required>
                <label><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>
                <label><b>Confirm Password</b></label>
                <input type="password" placeholder="Enter Password" name="cpassword" required>
                <label><b>Phone Number</b></label>
                <input type="text" placeholder="Enter Phone Number" name="phone" required>

                <button name="register" class="sign_up_btn" type="submit">Hire Me</button>
                
                <!-- <a href="login.php"><button type="button" class="back_btn"><< Back to Login</button></a> -->
            </div>
        </form>
        
        <?php
            if(isset($_POST['register']))
            {
                @$name=$_POST['name'];
                @$username=$_POST['username'];
                @$password=$_POST['password'];
                @$cpassword=$_POST['cpassword'];
                @$phone=$_POST['phone'];
                
                if($password==$cpassword)
                {
                    $query = "select * from guide where username='$username'";
                    //echo $query;
                $query_run = mysqli_query($con,$query);
                //echo mysql_num_rows($query_run);
                if($query_run)
                    {
                        if(mysqli_num_rows($query_run)>0)
                        {
                            echo '<script type="text/javascript">alert("This Username Already exists.. Please try another username!")</script>';
                        }
                        else
                        {
                            $query = "insert into guide values('$name','$username','$password','$phone')";
                            $query_run = mysqli_query($con,$query);
                            if($query_run)
                            {
                               echo '<script type="text/javascript">alert("Done Hiring.. Thank You for hiring")</script>';
                                echo '<script>window.location = "home.php";</script>';
                            }
                            else
                            {
                                echo '<p class="bg-danger msg-block">Registration Unsuccessful due to server error. Please try later</p>';
                            }
                        }
                    }
                    else
                    {
                        echo '<script type="text/javascript">alert("DB error")</script>';
                    }
                }
                else
                {
                    echo '<script type="text/javascript">alert("Password and Confirm Password do not match")</script>';
                }
                
            }
            else
            {
            }
        ?>
    </div>










  <br><br><br>
   <footer class="footer-section bg-with-black" style="background-color: gray">
        <div class="footer-top-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="single-fta">
                            <img src="img/logo1.png" alt="">
                          
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="single-fta">
                            <h3 class="fta-title">Find us on</h3>
                            <ul class="fta-list">
                                <li><a href="https://facebook.com/"><i class="fa fa-square"></i>Facebook</a></li>
                                <li><a href="https://instragram.com/"><i class="fa fa-square"></i>Instragram</a></li>
                                <li><a href="https://twitter.com/"><i class="fa fa-square"></i>Twitter</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="single-fta">
                            <h3 class="fta-title">Important Link</h3>
                            <ul class="fta-list">
                                <li><a href="https://www.esheba.cnsbd.com/"><i class="fa fa-square"></i>Bangladesh Railway</a></li>
                                <li><a href="https://www.biman-airlines.com/"><i class="fa fa-square"></i>Biman Bangladesh Airlines</a></li>
                                <li><a href="https://www.police.gov.bd/"><i class="fa fa-square"></i>Bangladesh Police</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="single-fta">
                            <h3 class="fta-title">Contact Us</h3>
                            <ul class="fta-list">
                                <li>Address: United International University</li>
                                <li>Phone: (+880) 1687799353 </li>
                                <li>Email: shahriar2762@gmail.com </li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="footer-bottom">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="fba-copyright">
                                        <p>Copyright © 2018 Designed by EXchange. All rights reserved.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="fba-links">
                                        <ul>
                                            <li><a href="#">About</a></li>
                                            <li><a href="#">Contact Us</a></li>
                                            <li><a href="#">Term & Conditions</a></li>
                                            <li><a href="#">Privacy Policy</a></li>
                                            <li><a href="#">Sites Map</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>  
    <!-- ========================================================== Footer End ========================================================== -->
  

</body>
</html>