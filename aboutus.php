
<!DOCTYPE html>
<html lang="en">
<head>
  <title>TourismBD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/tourguidelist.css" rel="stylesheet">
  <link href="js/script.js" rel="stylesheet">

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
  </nav> <!-- Nav end --> 

  <!-- ============================================================ Nav Bar End =========================================================== -->


  <!-- =============================================================== Slider ============================================================ -->

    <!-- Slider -->
      <div class="container-fluid">
        <div class="col-12" >

            <div id="myCarouse" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarouse" data-slide-to="0" class="active"></li>
              <li data-target="#myCarouse" data-slide-to="1"></li>
              <li data-target="#myCarouse" data-slide-to="2"></li>
              <li data-target="#myCarouse" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">

              <div class="item active">
                <img src="img/Tourism/tl1.jpg" alt="Los Angeles" style="width:100%">
                <div class="carousel-caption">
                  <h3>Bandarbon</h3>
                  <p>Bandarbon is always so much fun!</p>
                </div>
              </div>

              <div class="item">
                <img src="img/Tourism/tl2.jpg" alt="Chicago" style="width:100%;">
                <div class="carousel-caption">
                  <h3>Kuakata Beach</h3>
                  
                </div>
              </div>
            
              <div class="item">
                <img src="img/Tourism/tl3.jpg" alt="New York" style="width:100%;">
                <div class="carousel-caption">
                  <h3>Bichnakandi,Sylhet</h3>
                  <p>We love!</p>
                </div>
              </div>

              <div class="item">
                <img src="img/Tourism/tl4.jpg" alt="New York" style="width:100%;">
                <div class="carousel-caption">
                  <h3>Khagrachori</h3>
                  <p>peace is here!</p>
                </div>
              </div>
          
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarouse" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarouse" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>    
      </div> 
      <!-- Slider -->

  <!-- ============================================================= Slider End ============================================================ -->



   <!-- ============================================================= Blog ============================================================ -->
      <!-- <hr class="style13"> -->
     
      
 <!-- ======================================================= Blog Photos End ====================================================== -->
      <div class="fuck">
         <br><br><br>
        <font face="Cooper Black"> <h1> About Us</h1> </font>
        <font face="Arial Rounded MT Bold"> <h2>List of Group Member</h2></font>
      <br><br>
      </div>
    

    <div class="row">
      <div class="col-sm-1"></div>

       <div class="column">
        <div class="card">
          <img src="us/nahid.jpg" alt="Mike" style="width:100%">
          <div class="container">
            <h3>Nahid</h3>
            <p class="title">Notun Bazar,Dhaka</p>
            <p>Report , SLide , Mockup , Frontend</p>

            <a href="" target="blank"><button class="button" style="width: 328px;">Contact</button></a>
          </div>
        </div>
      </div>

     <div class="column">
        <div class="card">
          <img src="us/shahriar.jpg" alt="Mike" style="width:100%">
          <div class="container">
            <h2>Shahriar Hossain</h2>
            <p class="title">Mirpur,Dhaka</p>
            <p>Frontend , Backend,Backend.</p>
            
            <a href="" target="blank"><button class="button" style="width: 328px;">Contact</button></a>
          </div>
        </div>
      </div> 

      <div class="column">
        <div class="card">
          <img src="us/arpita.jpg" alt="John" style="width:100%">
          <div class="container">
            <h2>Arpita</h2>
            <p class="title">Notun Bazar,Dhaka</p>
            <p>Slide, Report</p>
            
           <a href="" target="blank"><button class="button" style="width: 328px;">Contact</button></a>
          </div>
        </div>
      </div>
      <div class="col-sm-1"></div>
    

    <!--<div class="row">
      <div class="col-sm-1"></div>
      <div class="column">
        <div class="card">
          <img src="us/arpita.jpg" alt="Jane" style="width:100%">
          <div class="container">
            <h2>Arpita</h2>
            <p class="title">Notun Bazar,Dhaka</p>
            <p>Slide, Report</p>
            
            <a href="" target="blank"><button class="button" style="width: 328px;">Contact</button></a>
          </div>
        </div>
      </div>

     <div class="column">
        <div class="card">
          <img src="us/mashroor.jpg" alt="Mike" style="width:100%">
          <div class="container">
            <h2>Tausif Hossain</h2>
            <p class="title">Dhanmondi,Dhaka</p>
            <p>Slide , Map</p>
            
            <a href="" target="blank"><button class="button" style="width: 328px;">Contact</button></a>
          </div>
        </div>
      </div>


      <div class="column">
        <div class="card">
          <img src="us/shams.jpg" alt="John" style="width:100%">
          <div class="container">
            <h2>Shamsul Arefin</h2>
            <p class="title">Dhaka</p>
            <p> </p>
            
            <a href="" target="blank"><button class="button" style="width: 328px;">Contact</button></a>
          </div>
        </div>
      </div>-->
      <div class="col-sm-1"></div>
    </div>
    </div>

  <!-- =========================================================== footer ============================================================ -->


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