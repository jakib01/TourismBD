
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
            <li><center><h3><?php echo $_SESSION['username']; ?></h3></center></li>
            
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span><b> Logout </b></a></li>
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
                <img src="img/slider1.jpg" alt="Los Angeles" style="width:100%">
                <div class="carousel-caption">
                  <h3>Bandarbon</h3>
                  <p>Bandarbon is always so much fun!</p>
                </div>
              </div>

              <div class="item">
                <img src="img/slider2.jpg" alt="Chicago" style="width:100%;">
                <div class="carousel-caption">
                  <h3>Sundarban</h3>
                  <p>Thank you, Shundorban!</p>
                </div>
              </div>
            
              <div class="item">
                <img src="img/slider3.jpg" alt="New York" style="width:100%;">
                <div class="carousel-caption">
                  <h3>Highway</h3>
                  <p>Long drive is enjoyful!</p>
                </div>
              </div>

              <div class="item">
                <img src="img/slider4.jpg" alt="New York" style="width:100%;">
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


   <!-- ============================================================= Blog ============================================================ -->
      <!-- <hr class="style13"> -->
      <br><br><br>
      <div class="container-fluid">
        <div class="row">
         <font face="Cooper Black"> <h1> Polular Places To Visit</h1> </font>
            <font face="Arial Rounded MT Bold"> <h2>Don't forget to make a visit </h2></font>
          <br>
          <br>

          <div class="col-lg-1"></div>

          <!-- <font face="Cooper Black"> <h1 class="fnt"> Polular Places To Visit</h1> </font> -->

          <div class="col-lg-3" style="background-color:#F8F9F9" >
            <a class="photo1" href="#" target="blank"> <img src="img/ahsan-monjil.jpg" alt="" title="Dhaka" height="220" width="320"> </a>
            <p></p>
            <font face="Arial Rounded MT Bold" size="4">
              <font face="Arial Rounded MT Bold"><h3> <b>Dhaka is a nice place to visit</b> </h3></font>
              <p>Dhaka is the capital of Bangladesh.For that reason most of the important works are based over this city.Dhaka is populated city with full of dreams.people are friendly here.<a href="#"> See More...</a></p>
            </font> 
          </div>  


          <div class="col-lg-3" style="background-color:#F8F9F9" >
            <a class="photo1" href="#" target="blank"> <img src="img/Cox_s Bazar1.jpg" alt="" title="Dhaka" height="220" width="320"> </a>
            <p></p>
            <font face="Arial Rounded MT Bold" size="4">
              <font face="Arial Rounded MT Bold"><h3> <b>Beauty queen of Bangladesh</b> </h3></font>
              <p>Chittagong is a place where you must have to visit if you want to see the real beauty of the neature of Bangladesh.The beauty of chittagong byond thinking.It has see,hills,.<a href="#"> See More...</a></p>
            </font>
          </div> 


          <div class="col-lg-3" style="background-color:#F8F9F9" >
            <a class="photo1" href="#" target="blank"> <img src="img/blog.jpg" alt="dhaka" title="Dhaka" height="220" width="320"> </a>
            <p></p>
            <font face="Arial Rounded MT Bold" size="4">
              <font face="Arial Rounded MT Bold"><h3> <b>Largest mangrove forest</b> </h3></font>
              <p></p>
              <p>The Sundarbans mangrove forest, one of the largest such forests in the world (140,000 ha), lies on the delta of the Ganges, Brahmaputra and Meghna rivers on the Bay of Bengal.<a href="#"> See More...</a></p>
            </font>
          </div> 

          <div class="col-lg-1"></div>

        </div> 
      </div>
   <!-- =========================================================== Blog ============================================================ -->



 <!-- ========================================================= Blog Photos ======================================================== -->
    <br><br><br>
    <div class="container-fluid">
      <div class="row">
        <font face="Cooper Black"> <h2>Image Gallery</h2> </font>
        <br>
       <div class="col-lg-1">
         
       </div> 
      <div class="col-lg-10">
        <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="img/blogphoto/blogphoto1.jpg">
            <img src="img/blogphoto/blogphoto1.jpg" alt="Trolltunga Norway" width="300" height="200">
          </a>
          <div class="desc">Amikum,Bandarban</div>
        </div>
      </div>


      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="img/blogphoto/blogphoto2.jpg">
            <img src="img/blogphoto/blogphoto2.jpg" alt="Forest" width="300" height="200">
          </a>
          <div class="desc">Sundarban,Khulna</div>
        </div>
      </div>

      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="img/blogphoto/blogphoto3.jpg">
            <img src="img/blogphoto/blogphoto3.jpg" alt="Northern Lights" width="300" height="200">
          </a>
          <div class="desc">Sonargaon,Dhaka</div>
        </div>
      </div>

      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="img/blogphoto/blogphoto4.jpg">
            <img src="img/blogphoto/blogphoto4.jpg" alt="Mountains" width="300" height="200">
          </a>
          <div class="desc">Royal Bengal Tigar</div>
        </div>
      </div>
     
     <!--  <hr class="style13"> -->

      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="img/blogphoto/blogphoto5.jpg">
            <img src="img/blogphoto/blogphoto5.jpg" alt="Mountains" width="300" height="200">
          </a>
          <div class="desc">Ratargul Forest,Sylhet</div>
        </div>
      </div>

      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="img/blogphoto/blogphoto6.jpg">
            <img src="img/blogphoto/blogphoto6.jpg" alt="Mountains" width="300" height="200">
          </a>
          <div class="desc">Largest Mangrove forest</div>
        </div>
      </div>
       
       <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="img/blogphoto/blogphoto7.jpg">
            <img src="img/blogphoto/blogphoto7.jpg" alt="Mountains" width="300" height="200">
          </a>
          <div class="desc">Village Beauty</div>
        </div>
      </div>

      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="img/blogphoto/blogphoto1.jpg">
            <img src="img/blogphoto/blogphoto1.jpg" alt="Mountains" width="300" height="200">
          </a>
          <div class="desc">Bandarban</div>
        </div>
      </div>
      </div>
      

      <div class="col-lg-1">
        
      </div>

      <div class="clearfix"></div>

      </div>
    </div>

      
 <!-- ======================================================= Blog Photos End ====================================================== -->


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