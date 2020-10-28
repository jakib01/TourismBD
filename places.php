
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
            <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span><b> Sign Up </b></a></li>
            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span><b> Login </b></a></li>
          </ul>
       </div>

    </div>
  </nav><!-- Nav end --> 


  <!-- ============================================================ Nav Bar End =========================================================== -->


  <!-- =============================================================== Slider ============================================================ -->

    <!-- Slider -->
      <div class="container-fluid">
        <div class="col-12" >

            <div id="myCarousePlc" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousePlc" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousePlc" data-slide-to="1"></li>
              <li data-target="#myCarousePlc" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">

              <div class="item active">
                <img src="img/Cox_s Bazar1.jpg" alt="Cox's Bazar" style="width:100%">
                <div class="carousel-caption">
                  <h3>Cox's Bazar</h3>
                  <p>Longest sea beach of the world!</p>
                </div>
              </div>

              <div class="item">
                <img src="img/Cox_s Bazar2.jpg" alt="Cox's Bazar" style="width:100%;">
                <div class="carousel-caption">
                  <h3>Cox's Bazar</h3>
                  <p>Thank you, Cox's Bazar!</p>
                </div>
              </div>
            
              <div class="item">
                <img src="img/Cox_s Bazar3.jpg" alt="Cox's Bazar" style="width:100%;">
                <div class="carousel-caption">
                  <h3>Cox's Bazar</h3>
                  <p>We love the Big view!</p>
                </div>
              </div>
          
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousePlc" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousePlc" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a> -->
          </div>
           <div class="responsive">
            
          </div>

        </div>    
      </div> 
      <!-- Slider -->

  <!-- ============================================================= Slider End ======================================================== -->

<!-- ========================================================== Place Description ====================================================== -->
  <br>
  <div class="container">
    <br>
    <ul class="nav nav-tabs">
      <li class="active"><a data-toggle="tab" href="#home"><b>Travellers Stories</b></a></li>
      <li><a data-toggle="tab" href="#menu1"><b>Explore By Map</b></a></li>
      <li><a data-toggle="tab" href="#menu2"><b>Top Things To Do</b></a></li>
      <li><a data-toggle="tab" href="#menu3"><b>Gallery</b></a></li>
      <li><a data-toggle="tab" href="#menu4"><b>Accomodation</b></a></li>
      <li><a data-toggle="tab" href="#menu5"><b>Packages</b></a></li>
    </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <br><br>
      <h3><b>Cox's Bazar</b></h3>
      <p>Cox's Bazar (Bengali: কক্সবাজার, pronounced [kɔksbadʒaɾ]) is a city, fishing port, tourism centre and district headquarters in Bangladesh. The beach in Cox's Bazar is sandy and has a gentle slope; with a unbroken length of 120 km (75 mi), it is the longest natural sea beach in the world.[2][3][4] It is located 150 km (93 mi) south of the industrial port of Chittagong. Cox's Bazar is also known by the name Panowa, which Translates literally as "yellow flower." Another old name was "Palongkee".</p>
      <br>
      <p>The modern Cox's Bazar derives its name from Captain Hiram Cox, an officer of the British East India Company. Cox was appointed Superintendent of Palongkee outpost after Warren Hastings became Governor of Bengal. He embarked upon the task of rehabilitation and settlement of the Arakanese refugees in the area.[5] Captain Cox died in 1799 before he could finish his work. To commemorate his role in rehabilitation work, a market was established and named Cox's Bazar after him. Unlike many locations in the Indian Subcontinent where place names dating from the colonial period have been changed, Cox's name is still retained in the city he founded.</p>
      <br>
      <p>Today, Cox's Bazar is one of the most visited tourist destinations in Bangladesh, although not a major international tourist destination. In 2013, the Bangladesh Government formed the Tourist Police unit to protect local and foreign tourists better, as well as to look after the nature and wildlife in the tourist spots of Cox's Bazar.</p>

      
      <hr class="style13">

      <h3><b>Town</b></h3>
      <p>Cox's Bazar Town was constituted in 1869, eventually becoming a B-grade municipality in 1989. Located along the Bay of Bengal in South Eastern Bangladesh, Cox's Bazar Town is a health resort. But it is famous mostly for its long natural sandy beach. The municipality covers an area of 6.85 km2 (2.64 sq mi) with 27 mahallas and 9 wards and has a population of 51,918.[8] Cox's Bazar is connected by road and air with Chittagong.</p>

      
      <hr class="style13">
      <h3><b>History</b></h3>
      <p>The greater Chittagong area, including Cox's Bazar, was under the rule of Arakan kings from the early 9th century until its conquest by the Mughals in 1666 AD.[10] When the Mughal Prince Shah Shuja was passing through the hilly terrain of the present-day Cox's Bazar on his way to Arakan, he was attracted to its scenic and captivating beauty. He commanded his forces to camp there. His retinue of one thousand palanquins stopped there for some time. A place named Dulahazara, meaning "one thousand palanquins," still exists in the area. After the Mughals, the place came under the control of the Tipras and the Arakanese, followed by the Portuguese and then the British.

The name Cox's Bazar originated from the name of a British East India Company officer, Captain Hiram Cox, who was appointed as the Superintendent of Palonki (today's Cox's Bazar) outpost. He succeeded Warren Hastings, who became the Governor of Bengal following the British East India Company Act in 1773. The Captain rehabilitated many refugees in the area, but died in 1799 before he could finish his work. To commemorate him, a market was established and named after him, called Cox's Bazar. Cox's Bazar then was first established in 1854 and became a municipality in 1869.[10]

After the Sepoy Mutiny (Indian Rebellion of 1857) in 1857, the British East India Company was highly criticised and questioned on humanitarian grounds, specially for its opium trade monopoly over the Indian Sub-Continent. However, after its dissolution on 1 January 1874, all of the company's assets including its Armed Forces were acquired by the British Crown. After this historic take over, Cox's Bazar was declared a district of the Bengal Province under the British Crown.</p>
    </div>

    <div id="menu1" class="tab-pane fade">
      <br><br><br>
      <h3><b>Explore By Map</b></h3>
      <div id="map" style="width:100%;height:400px;">
        <iframe width="100%" height="80%" frameborder="0" style="border:0" src="exploremap.php" allowfullscreen></iframe>
      </div>

      </div>


    <div id="menu2" class="tab-pane fade">
      <!-- <h3>Top things to do along the Great Ocean Road</h3>

      <hr class="style13"> -->
      <br><br>
      <h3><b>Take in the scenery</b></h3>
      <p>Victoria's dramatic south-west coastline covers an incredible range of scenery. See the world-famous waves at Bells Beach or laze on the sand at Anglesea. Visit the charming old fishing village of Port Fairy and get among the buzzing arts community in Lorne. Of course, you can't miss the 12 Apostles. These craggy limestone stacks rising majestically from the Southern Ocean are a must-see. Join a scenic flight with  to see the Bay of Islands, London Bridge or the entire Shipwreck Coast all the way to Australia's oldest lighthouse at Cape Otway.</p>

      <hr class="style13">
      <h3><b>Get into nature</b></h3>
      <p>From rainforests and rivers to old volcanoes and rugged coastlines, the Great Ocean Road showcases nature at its most diverse. In Great Otway National Park you'll see thundering waterfalls and sparkling gorges and walk through the tops of ancient, mossy trees. The  is a 600 metre (0.4 mile) long elevated treetop walk that ascends at a gentle grade through a magnificent stand of cool temperate rainforest. Thrill seekers can choose the  and zip between "cloud stations" 30 metres (98 feet) above the forest floor. Need to stretch your legs? See deserted sandy beaches, thick forests and some of Australia's highest sea cliffs on the 91 kilometre (57 mile)</p>

      <hr class="style13">
      <h3><b>Sample the local produce</b></h3>
      <p>The Great Ocean Road will tempt your tastebuds with sumptuous local produce, great dining and excellent wineries. For seafood, visit the Lorne Fisheries Co-Op to taste the local fishermen's morning catch (the freshly shucked oysters are a must) or the Apollo Bay Fishermen's Co-Op for delicious flake and chips. Pick your own raspberries and blackberries from the  and blueberries from Shoebridge Blueberry Farm. Or get into the gourmet cheeses at delicatessens in Allansford, Timboon and Cooriemungle. Cool climate wineries stretch the length of the Great Ocean Road. Stop off at a cellar door, such as the  in the Henty wine region, or  near Bells Beach. Book well in advance for dinner at upmarket restaurant , which serves a set menu created from the highest quality local ingredients.</p>

       <hr class="style13">
      <h3><b>Meet the wildlife</b></h3>
      <p>The Great Ocean Road is home to an abundance of native wildlife. At Logans Beach in Warrnambool you can watch southern right whales calve in a nursery close to shore between May and September. Join a  tour to see hundreds of fur seals at Cape Bridgewater, or  at Queenscliff on the Bellarine Peninsula. See koalas in the wild at Kennett River and in the Great Otway National Park, and enjoy a game of golf alongside grazing kangaroos at Anglesea. For something completely different, canoe alongside platypus on Lake Elizabeth on a  at dawn.</p>

       <hr class="style13">
      <h3><b>Sample the local produce</b></h3>
      <p>The Great Ocean Road will tempt your tastebuds with sumptuous local produce, great dining and excellent wineries. For seafood, visit the Lorne Fisheries Co-Op to taste the local fishermen's morning catch (the freshly shucked oysters are a must) or the Apollo Bay Fishermen's Co-Op for delicious flake and chips. Pick your own raspberries and blackberries from the  and blueberries from Shoebridge Blueberry Farm. Or get into the gourmet cheeses at delicatessens in Allansford, Timboon and Cooriemungle. Cool climate wineries stretch the length of the Great Ocean Road. Stop off at a cellar door, such as the  in the Henty wine region, or  near Bells Beach. Book well in advance for dinner at upmarket restaurant , which serves a set menu created from the highest quality local ingredients.</p>

    </div>

    <div id="menu3" class="tab-pane fade">
      <br><br>
      <h3><b>Gallery</b></h3>    
       <div class="gallery">
        <a href="img/placeGallery/cozGallery1.jpg" target="blank"><img src="img\placeGallery/cozGallery1sml.jpg"></a>
        <a href="img/placeGallery/cozGallery2.jpg" target="blank"><img src="img\placeGallery/cozGallery2sml.jpg"></a>
        <a href="img/placeGallery/cozGallery3.jpg" target="blank"><img src="img\placeGallery/cozGallery3sml.jpg"></a>
        <a href="img/placeGallery/cozGallery4.jpg" target="blank"><img src="img\placeGallery/cozGallery4sml.jpg"></a>
        <a href="img/placeGallery/cozGallery5.jpg" target="blank"><img src="img\placeGallery/cozGallery5sml.jpg"></a>
        <a href="img/placeGallery/cozGallery6.jpg" target="blank"><img src="img\placeGallery/cozGallery6sml.jpg"></a>
        <a href="img/placeGallery/cozGallery7.jpg" target="blank"><img src="img\placeGallery/cozGallery7sml.jpg"></a>
        <a href="img/placeGallery/cozGallery8.jpg" target="blank"><img src="img\placeGallery/cozGallery8sml.jpg"></a>
        <a href="img/placeGallery/cozGallery9.jpg" target="blank"><img src="img\placeGallery/cozGallery9sml.jpg"></a> 
        <a href="img/placeGallery/cozGallery10.jpg" target="blank"><img src="img\placeGallery/cozGallery10sml.jpg"></a> 

        <a href="img/placeGallery/cozGallery1.jpg" target="blank"><img src="img\placeGallery/cozGallery1sml.jpg"></a>
        <a href="img/placeGallery/cozGallery2.jpg" target="blank"><img src="img\placeGallery/cozGallery2sml.jpg"></a>
        <a href="img/placeGallery/cozGallery3.jpg" target="blank"><img src="img\placeGallery/cozGallery3sml.jpg"></a>
        <a href="img/placeGallery/cozGallery4.jpg" target="blank"><img src="img\placeGallery/cozGallery4sml.jpg"></a>
        <a href="img/placeGallery/cozGallery5.jpg" target="blank"><img src="img\placeGallery/cozGallery5sml.jpg"></a>
        <a href="img/placeGallery/cozGallery6.jpg" target="blank"><img src="img\placeGallery/cozGallery6sml.jpg"></a>
        <a href="img/placeGallery/cozGallery7.jpg" target="blank"><img src="img\placeGallery/cozGallery7sml.jpg"></a>
        <a href="img/placeGallery/cozGallery8.jpg" target="blank"><img src="img\placeGallery/cozGallery8sml.jpg"></a>
        <a href="img/placeGallery/cozGallery9.jpg" target="blank"><img src="img\placeGallery/cozGallery9sml.jpg"></a> 
        <a href="img/placeGallery/cozGallery10.jpg" target="blank"><img src="img\placeGallery/cozGallery10sml.jpg"></a> 
       </div>
    </div>

    <div id="menu4" class="tab-pane fade">
      <br><br><br>
      <h3><b>Accomodation</b></h3>
      <div id="accomodation" style="width:100%;height:400px;">
      <a href="http://www.sayemanresort.com/" class="btn btn-primary btn-lg" data-toggle="">Sayeman Ressort</a>
        <iframe width="100%" height="80%" frameborder="0" style="border:0"class="btn btn-primary btn-lg" data-toggle="" src="http://www.sayemanresort.com/" allowfullscreen></iframe>


        </div>

      <div id="accomodation" style="width:100%;height:400px;">

        <a href="http://www.seagullhotelbd.com/" class="btn btn-primary btn-lg" data-toggle="">Hotel Sea Gull</a>
        <iframe width="100%" height="80%" frameborder="0" style="border:0"class="btn btn-primary btn-lg" data-toggle="" src="http://www.seagullhotelbd.com/" allowfullscreen></iframe>


      </div>
      <div id="accomodation" style="width:100%;height:400px;">
      <a href="http://hotelseacrownbd.com/" class="btn btn-primary btn-lg" data-toggle="">Hotel Sea Crown</a>
        <iframe width="100%" height="80%" frameborder="0" style="border:0"class="btn btn-primary btn-lg" data-toggle="" src="http://hotelseacrownbd.com/" allowfullscreen></iframe>


        </div>



      </div>

<div id="menu5" class="tab-pane fade">
      <br><br><br>
      <h3><b>Tour Packages</b></h3>
      <div id="Tour Packages" style="width:100%;height:400px;">
      <a href="http://www.jinghuabanglatours.com/" class="btn btn-primary btn-lg" data-toggle="">Jingu Bangla Tours</a>
        <iframe width="100%" height="80%" frameborder="0" style="border:0"class="btn btn-primary btn-lg" data-toggle="" src="http://www.jinghuabanglatours.com/tour-packages/bangladesh-tour-packages/coxs-bazar-tour-packages/4-day-3-night-coxs-bazar-saint-martins-tour" allowfullscreen></iframe>


        </div>

      <div id="accomodation" style="width:100%;height:400px;">

        <a href="http://www.greenmaskbd.com/" class="btn btn-primary btn-lg" data-toggle="">Green Mask Bd</a>
        <iframe width="100%" height="80%" frameborder="0" style="border:0"class="btn btn-primary btn-lg" data-toggle="" src="http://www.greenmaskbd.com/package/coxs-bazar-tour-package/" allowfullscreen></iframe>


      </div>
      <div id="accomodation" style="width:100%;height:400px;">
      <a href="http://kearitourism.com/" class="btn btn-primary btn-lg" data-toggle="">Keari Tourism</a>
        <iframe width="100%" height="80%" frameborder="0" style="border:0"class="btn btn-primary btn-lg" data-toggle="" src="http://kearitourism.com/tour/dhaka-coxs-bazar-saint-martin-dhaka-3-days-4-night/" allowfullscreen></iframe>


        </div>



      </div>




  </div>
</div>


<!-- ========================================================= Place Description End ==================================================== -->



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
                                <li>Address: Mohammadia Housing Society,Mohammadpur,Dhaka</li>
                                <li>Phone: (+880) 1673952895 </li>
                                <li>Email: julkernienakib@gmail.com </li>
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
    <!--========================================================== Footer End ========================================================== -->
  
</body>
</html>