<!DOCTYPE html>
<html lang="en">
<head>
  <title>TourismBD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="js/script.js" rel="stylesheet">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>



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
                <img src="img/Tourism/1.jpg" alt="Los Angeles" style="width:100%">
                <div class="carousel-caption">
                  <h3>National Martyrs’ Memorial</h3>
                  
                </div>
              </div>

              <div class="item">
                <img src="img/Tourism/2.jpg" alt="Chicago" style="width:100%;">
                <div class="carousel-caption">
                  <h3>Ahasan Monjil</h3>
                 
                </div>
              </div>
            
              <div class="item">
                <img src="img/Tourism/5.jpg" alt="New York" style="width:100%;">
                <div class="carousel-caption">
                  <h3>Lalbag Fort</h3>
                 
                </div>
              </div>

              <div class="item">
                <img src="img/Tourism/6.jpg" alt="New York" style="width:100%;">
                <div class="carousel-caption">
                  <h3>Mawua Ghat</h3>
                
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





  <!-- main content -->

   <div class="col-md-9">
                         
                     <div class="row">
    
                     <div class="col-md-12">
                      <div class="carousel-inner">
    
        
                   <div class="item active">
               
                                                <div class="col-md-12">
                                                    <p>
                                                        <h2>AMARI DHAKA</h2>
                                                    </p>
                                                    
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
      
    
    
      <div class="row">
        <div class="col-m-6">
    
        
          <div class="well">
             <img  src="img/superior-room-1.jpg">                                          <!--img src="ahsan-monjil.jpg" class="img-responsive" -->
        </div>
        </div>

        <div class="col-sm-12">
          <div class="well">
          <h4>SUPERIOR ROOM</h4>
      <h5>Adults: 2 Child: 1</h5>
            <p>Room Size: 17m².1 queen size bed. Air-conditioned room with modern decor. 
      The room comes with a flat screen TV with cable connection, seating area, wardrobe and work desk.
      The ensuite bathroom is furnished with bathtub, hairdryer and free toiletries</p>
      <h5>Per Night</h5>
      <h5>৳ 4,160</h5>
            <a href="info.php" class="btn btn-primary btn-lg" data-toggle="">Reserve Now</a>                     
            </div>
        </div>
      </div>
    
    </a>
    
    
    
      <div class="row">
        <div class="col-sm-6">
          <div class="well" style="
    width: 970px;
">
           <img src="img/deluxelakeview1.jpg">
         </div>
        </div>
        <div class="col-sm-12">
          <div class="well">
          <h4>DELUXE LAKE VIEW</h4>
      <h5>Adults: 4 Child: 2</h5>
            <p>Room Size: 21m², 2 queen size bed. Air-conditioned room with modern decor. The room comes with a flat screen 
      TV with cable connection, ironing facilities, seating area, 
      wardrobe, work desk and ironing facility. The ensuite bathroom is furnished with bathtub, hairdryer and free toiletries.</p>
      <h5>Per Night</h5>
      <h5>৳ 5,520</h5>
            <a href="info.php" class="btn btn-primary btn-lg" data-toggle="">Reserve Now</a>                     
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <div class="well" style="
    width: 970px;
">
           <img src="img/one-bedroom-1.jpg">
         </div>
        </div>
        <div class="col-sm-12">
          <div class="well">
          <h4>ONE BED ROOM</h4>
            <p>Room Size: 15m², 1 Queen Size bed. Air-conditioned room with modern decor. The room comes with a flat screen TV with cable connection,
        wardrobe, work desk and ironing facilities. The ensuite bathroom is furnished with bathtub, hairdryer and free toiletries</p>
        <h5>Per Night</h5>
      <h5>৳ 3,600</h5>
            <a href="info.php" class="btn btn-primary btn-lg" data-toggle="">Reserve Now</a>                     
      </div>
        </div>
      </div>     

  </div>


                        <div class="col-md-1">
                        </div>
                    </div>
                </div>
                </div>
                </div>
                <div class="container background-white">
                    <div class="row padding-vert-40">
                        <div class="col-md-12">
                            
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- === END CONTENT === -->









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