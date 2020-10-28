<!DOCTYPE html>
<html lang="en">
<head>
	 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>TourismBD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="css/reset.css" />
  <link rel="stylesheet" type="text/css" href="css/main.css" />
  <link rel="stylesheet" href="css/stylesheet.css" type="text/css" charset="utf-8" />
  <link rel="stylesheet" href="css/progressbar.css" type="text/css" />
  <link rel="stylesheet" href="css/print.css" type="text/css" media="print" />

  <link href="js/script.js" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


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
                <img src="img/Tourism/g1.jpg" alt="Los Angeles" style="width:100%">
                <div class="carousel-caption">
                  <h3>Kanchonjongha</h3>
                  
                </div>
              </div>

              <div class="item">
                <img src="img/Tourism/g2.jpg" alt="Chicago" style="width:100%;">
                <div class="carousel-caption">
                  <h3>Guliakhali Beach</h3>
                  
                </div>
              </div>
            
              <div class="item">
                <img src="img/Tourism/g3.jpg" alt="New York" style="width:100%;">
                <div class="carousel-caption">
                  <h3>Tanguar Haor</h3>
                 
                </div>
              </div>

              <div class="item">
                <img src="img/Tourism/g4.jpg" alt="New York" style="width:100%;">
                <div class="carousel-caption">
                  <h3>Khagrachori</h3>
              
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

          <div class="responsive">
            
          </div>
            <!-- Search -->
           <form class="col-sm-12" id="searchForm">
              <div class="form-group col-sm-4 col-sm-offset-4">
                <div class="input-group input-group-lg center-block">
                  <input type="text" class="form-control" placeholder="What can I help you with today?">
                  <!-- <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span> -->
                  <span class="input-group-btn center-block">
                        <button class="btn btn-info btn-lg" type="button">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
                </div>
              </div>
            </form><!-- Search Ends -->

        </div>    
      </div> 
      <!-- Slider -->

  <!-- ============================================================= Slider End ============================================================ -->


<div id="container">
<div id="header">
        <ul>
          <li><a href="#">Portfolio</a></li>

          <li><a href="#">Contact</a></li>
        </ul><a href="#" class="social_contact">facebook</a> <a href="#" class=
        "social_contact">twitter</a>
      </div>

      <div class="section sectiontop">
        <img src="img/profilepicture2.png" id="profilepicture" width="110" height="110"
        alt="profile_picture" />

        <h1>Nahid
        <a href="guidehire.php" class="btn btn-primary btn-lg" data-toggle="">HIRE</a>
        </h1>

        <h2>Tour Guide</h2>




        <ul>
          <li><span>E-mail:</span> <a href="#">newman@sitename.com</a></li>

          <li><span>Website:</span> <a href="#">johnnewman.com</a></li>

          <li><span>Phone:</span> (123) 456-7890</li>

          <li><span>Address:</span> 32 Your Street, City, Country</li>
        </ul>
      </div>


<div class="section education">
        <div class="left">
          <h3>Education</h3>

          <p>Nullam a pulvinar tellus. Donec laoreet posuere felis, sit amet convallis
          urna porta in.</p>
        </div>

        <div class="right">
          <div class="row selection_education">
            <h4>Yo Yo University</h4>

            <h5>CSE</h5>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a pulvinar
            tellus. Donec laoreet posuere felis, sit amet convallis urna porta
            in.</p><a href="#">2008-2012</a>
          </div>

          <div class="row">
            <h4>Monipur High School</h4>

            <h5>HIgher Secondery</h5>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a pulvinar
            tellus. Donec laoreet posuere felis, sit amet convallis urna porta
            in.</p><a href="#">1996-2008</a>
          </div>
        </div>
      </div>

<div class="review">
	<div class="row">
        <div class="col-md-6">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-xs-6 col-md-6 text-center">
                        <h1 class="rating-num">
                            4.0</h1>
                        <div class="rating">
                            <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star">
                            </span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star">
                            </span><span class="glyphicon glyphicon-star-empty"></span>
                        </div>
                        <div>
                            <span class="glyphicon glyphicon-user"></span>1,050,008 total
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-6">
                        <div class="row rating-desc">
                            <div class="col-xs-3 col-md-3 text-right">
                                <span class="glyphicon glyphicon-star"></span>5
                            </div>
                            <div class="col-xs-8 col-md-9">
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                        <span class="sr-only">80%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end 5 -->
                            <div class="col-xs-3 col-md-3 text-right">
                                <span class="glyphicon glyphicon-star"></span>4
                            </div>
                            <div class="col-xs-8 col-md-9">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                        <span class="sr-only">60%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end 4 -->
                            <div class="col-xs-3 col-md-3 text-right">
                                <span class="glyphicon glyphicon-star"></span>3
                            </div>
                            <div class="col-xs-8 col-md-9">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                        <span class="sr-only">40%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end 3 -->
                            <div class="col-xs-3 col-md-3 text-right">
                                <span class="glyphicon glyphicon-star"></span>2
                            </div>
                            <div class="col-xs-8 col-md-9">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="20"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                        <span class="sr-only">20%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end 2 -->
                            <div class="col-xs-3 col-md-3 text-right">
                                <span class="glyphicon glyphicon-star"></span>1
                            </div>
                            <div class="col-xs-8 col-md-9">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 15%">
                                        <span class="sr-only">15%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end 1 -->
                        </div>
                        <!-- end row -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






<div class="section technical">
        <div class="left">
          <h3>Visited Place Experience</h3>
        </div>

        <div class="right_right">
           <h4>Cox's Bazar</h4>
                <div class="progress-bar1 green">
                    <span style="width: 90%;"></span>
                </div>
                <h4>Bandarban</h4>
                <div class="progress-bar1 orange">
                    <span style="width: 80%;"></span>
                </div>
                <h4>Shundarban</h4>
                <div class="progress-bar1 orange">
                    <span style="width: 60%;"></span>
                </div>
                <h4>Sajek Khagrachori</h4>
                <div class="progress-bar1 red">
                    <span style="width: 40%;"></span>
                </div>
          </div>

          <div class="right_left">
            <p><span>Aenean venenatis convallis diam eget sagittis. Donec iaculis felis a
            est ultrices dapibus.</span></p>

            <p>Sed cursus quam ac nibh convallis vitae faucibus quam condimentum. Nulla
            elementum ultrices fermentum. Nulla non dolor odio, quis dictum dui. Aenean
            venenatis convallis diam eget sagittis. Donec iaculis felis a est ultrices
            dapibus.</p>
          </div>
        </div>


      


       <div class="section contact">
        <div class="left">
          <h3>Contact</h3>

          <p>Suspendisse a nulla vitae orci dictum facilisis.</p>
        </div>

        <div class="right">
          <form class="form" action="#">
            <p class="name"><input type="text" name="name" id="name" value="Name" /></p>

            <p class="email"><input type="text" name="email" id="email" value="E-mail" /></p>

            <p class="text">
            <textarea name="text" rows="" cols="">Text
</textarea></p>

            <p class="submit"><input type="submit" value="Send" /></p>
          </form>

          <p class="contact_text">Sed cursus quam ac nibh convallis vitae faucibus quam
          condimentum. Nulla elementum ultrices fermentum. Nulla non dolor odio, quis
          dictum dui. Aenean venenatis convallis diam eget sagittis. Donec iaculis felis
          a est ultrices dapibus.</p>

          <div id="contact_icons">
            <a href="#" class="social_contact">facebook</a> <a href="#" class=
            "social_contact">twitter</a> <a href="#" class="social_contact">instagram</a> <a href="#"
            class="social_contact">Google+</a>
          </div>
        </div>
      </div>



</div>


 <!-- =========================================================== footer ============================================================ -->
 <!-- =========================================================== footer ============================================================ -->
   <br><br><br>
   <footer class="footer-section bg-with-black" style="background-color: gray">
        <div class="footer-top-section">
            <div class="container">
                <div class="row1">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="single-fta">
                            <img src="img/logo1.png" alt="">
                           
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
                            <h6 class="fta-title">Contact Us</h6>
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
                <div class="row1">
                    <div class="col-xs-12">
                        <div class="footer-bottom">
                            <div class="row1">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="fba-copyright">
                                        <p>Copyright © 2017 Designed by EXchange. All rights reserved.</p>
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


  
</body>
</html>
