<?php define( 'MYTHEMEDIR', get_template_directory_uri() ); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Travel joy</title>

    <link rel="stylesheet" type="text/css" href="<?php echo MYTHEMEDIR; ?>/css/style.css">
     
    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="<?php echo MYTHEMEDIR; ?>/css/bootstrap.min.css">
    <!-- end of bootstrap link -->

    <!-- slider  -->
    
	 <!--<link rel="stylesheet" type="text/css" href="<?php echo MYTHEMEDIR; ?>/css/component.css" />
    <script src="<?php echo MYTHEMEDIR; ?>/js/modernizr.custom.js"></script>  -->
    <!-- end of slider js -->

    <!-- google font link-->
    <link rel="stylesheet" type="text/css"  href="https://fonts.googleapis.com/css?family=Poppins&display=swap">
    <!-- google font -->

    <!-- Font awesome link -->
    <link rel="stylesheet" type="text/css"   href="<?php echo MYTHEMEDIR; ?>/css/all.min.css">
    <!-- End of Front awesome link -->

</head>
<body>
    <div class="wrapper">
        <header class="header">

            <!-- logo -->
            <div class="header__logo">
                <img src="<?php echo MYTHEMEDIR; ?>/image/logo-3.png" alt="brand logo">
                
            </div>
            <!-- End of logo -->

            <!-- navigation bar -->
            <nav>
                <ul>
                    <li><a href="#" class="active">Home</a></li>
                    <div class="dropdown">
                        <button class="dropbtn">Destination 
                        <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn">Trip Types 
                        <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                        </div>
                    </div>
                    <li><a href="#">Blog</a></li>
                    <li> <a href="#">Contact</a></li>
                </ul>
            </nav>
            <!-- End of navigation bar -->

            <!-- top left button -->
            <div class="header__button">
                <div class=" button-item">
                    <button class="bttn btn-left">Login </button>
                </div>
                <div class="button-item">
                    <button class="bttn btn-right">Sinup</button>
                </div>
            </div>
            <!-- End of top left buttton -->
            

        </header>
        <main class="main_section">
            <aside>
                <ul>
                    <li><a href="">Facebook</a></li>
                    <li><a href="">Twitter</a></li>
                    <li><a href="">LinkedIn</a></li>
                    <li><a href="">Instagram</a></li>
                </ul>
                <div class="down-arrow">
                    <!-- <span><i class="fas fa-arrow-down"></i><span> -->
                        <img src="<?php echo MYTHEMEDIR; ?>/image/scrolldown.png" alt="">
                </div>
            </aside>
            <div class="main__container">
                <!-- background image slider -->
                <div class="main__slider">
                    <ul id="cbp-bislideshow" class="cbp-bislideshow">
                            <!-- <li><img src="<?php echo MYTHEMEDIR; ?>/image/1.jpg" alt="image01"/></li> -->
                            <li><img src="<?php echo MYTHEMEDIR; ?>/image/landing-1-bg.png" alt="image02"/></li>
                            
                        </ul>
                        <div id="cbp-bicontrols" class="cbp-bicontrols">
                            <span class="cbp-biprev"></span>
                            <span class="cbp-bipause"></span>
                            <span class="cbp-binext"></span>
                        </div>
                    
                </div>
                <!-- end of background-image slider -->
                <div class="main-overlay">
                    <div class="description-box">
                        <h2>You are invited <br>Here to Enjoy life</h2>
                        <P>Lorem ipsum, dolor sit amet consectetur adipisicing elit.Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        </p>

                        <div class="header__button">
                            <div class=" button-item">
                                <button class="bttn btn-left">Book Now </button>
                            </div>
                            <div class="button-item">
                                <button class="bttn btn-right">Discover</button>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="botton-overlay">
                    <div class="description-box">
                        <div class="item item-1">
                            <div class="dropdown">
                                <button class="dropbtn">Neitherland 
                                <i class="fa fa-caret-down"></i>
                                </button>
                                <div class="dropdown-content">
                                <a href="#">Link 1</a>
                                <a href="#">Link 2</a>
                                <a href="#">Link 3</a>
                                </div>
                            </div>
                        </div>
                        <div class="item item-2">
                        <div class="dropdown">
                                <button class="dropbtn">Trip Types 
                                <i class="fa fa-caret-down"></i>
                                </button>
                                <div class="dropdown-content">
                                <a href="#">Link 1</a>
                                <a href="#">Link 2</a>
                                <a href="#">Link 3</a>
                                </div>
                            </div>
                        </div>
                        <div class="item item-3">
                            <input type="search" placeholder="Keyword" id="search" >
                        </div>
                        <div class="item item-4">
                            <p>Search</p>
                        </div>
                        
                    </div>

                </div>
            </div>
        </main>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        
        <div class="section-2">
            <div class="section-wrapper">
                <div class="section__header">
                    <div class="title">
                        <h2>Popular tour packages</h2>
                        <p>Just select where you want to go, we take care of rest</p>
                    </div>
                    <div class="button-item">
                                <button class="bttn text-black title-btn">view</button>
                            </div>

                    
                </div>
                <div class="section02-gallery">
                    <section class="grid-box">
                                    <ul>
                                      <li>
                                        <figure>
                                          <!-- Photo by Quentin Dr on Unsplash -->
                                          <img src="<?php echo MYTHEMEDIR; ?>/image/grid-2.jpg">
                                          <div class="overlay">
                                                <div class="image-overlay overlay__top">
                                                    <div class="left">
                                                        <h2>$50</h2>
                                                        <span><i class="fas fa-clock"></i> 3 days 0 Night</span>
                                                    </div>
                                                    <div class="right">
                                                        <span>
                                                        <i class="star1 fas fa-star"></i>
                                                        <i class="star2 fas fa-star"></i>
                                                        <i class="star3 fas fa-star"></i>
                                                        <i class="star4 fas fa-star"></i>
                                                        <i class="star5 fas fa-star"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="image-overlay overlay__bottom">
                                                    <div class="left">
                                                        <h1>Cycling</h1>
                                                        <span><i class="fas fa-map-marker-alt"></i> Neitherland </span>
                                                    </div>
                                                    <div class="right ">
                                                        <span class="right-arrow"><i class="fas fa-arrow-right"></i></span>
                                                    
                                                    </div>
                                                </div>
                                            </div> 
                                        </figure>
                                        
                                      </li>
                                      <li>
                                        <figure>
                                          
                                          <img src="<?php echo MYTHEMEDIR; ?>/image/grid-2.jpg">
                                          <div class="overlay">
                                                <div class="image-overlay overlay__top">
                                                    <div class="left">
                                                        <h2>$50</h2>
                                                        <span><i class="fas fa-clock"></i> 3 days 0 Night</span>
                                                    </div>
                                                    <div class="right">
                                                        <span>
                                                        <i class="star1 fas fa-star"></i>
                                                        <i class="star2 fas fa-star"></i>
                                                        <i class="star3 fas fa-star"></i>
                                                        <i class="star4 fas fa-star"></i>
                                                        <i class="star5 fas fa-star"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="image-overlay overlay__bottom">
                                                    <div class="left">
                                                        <h1>Cycling</h1>
                                                        <span><i class="fas fa-map-marker-alt"></i> Neitherland </span>
                                                    </div>
                                                    <div class="right ">
                                                        <span class="right-arrow"><i class="fas fa-arrow-right"></i></span>
                                                    
                                                    </div>
                                                </div>
                                            </div> 
                                        </figure>
                                        
                                       
                                      </li>
                                      <li>
                                        <figure>
                                          <!-- Photo by Rawpixel on Unsplash -->
                                          <img src="<?php echo MYTHEMEDIR; ?>/image/grid-2.jpg" alt="Three different glasses of beer">
                                          <div class="overlay">
                                                <div class="image-overlay overlay__top">
                                                    <div class="left">
                                                        <h2>$50</h2>
                                                        <span><i class="fas fa-clock"></i> 3 days 0 Night</span>
                                                    </div>
                                                    <div class="right">
                                                        <span>
                                                        <i class="star1 fas fa-star"></i>
                                                        <i class="star2 fas fa-star"></i>
                                                        <i class="star3 fas fa-star"></i>
                                                        <i class="star4 fas fa-star"></i>
                                                        <i class="star5 fas fa-star"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="image-overlay overlay__bottom">
                                                    <div class="left">
                                                        <h1>Cycling</h1>
                                                        <span><i class="fas fa-map-marker-alt"></i> Neitherland </span>
                                                    </div>
                                                    <div class="right ">
                                                        <span class="right-arrow"><i class="fas fa-arrow-right"></i></span>
                                                    
                                                    </div>
                                                </div>
                                            </div> 
                                        </figure>
                                        
                                      </li>
                                </ul>
                            </section>
     
                    </div>
                </div>
                <!-- End of section 2 -->

                <!-- section 3 -->

                <div class="section-3">
                    <div class="section-wrapper">
                        <div class="section__header">
                            <div class="title">
                                <h2>Travel Base Process</h2>
                                <p>Just select where you want to go, we take care of rest</p>
                            </div>
                            <div class="button-item">
                                        <button class="bttn text-black title-btn">view</button>
                                    </div>

                            
                        </div>
                        <div class="section03-gallery">
                            <section class="grid-box">
                                            <ul>
                                            <li>
                                                <figure>
                                                    <div class="title_top">
                                                        <img class="on_hover__off" src="<?php echo MYTHEMEDIR; ?>/image/Group29.png" alt>
                                                        <img class="on_hover" src="<?php echo MYTHEMEDIR; ?>/image/Group29_white.png" alt>
                                                            <P>Ready to Go</p>
                                                    </div>
                                                    <div class="title_top">
                                                        <p>Travel is the movement of people between distant geographical locations</p>   
                                                    </div>

                                                </figure>
                                                
                                            </li>
                                            <li>
                                                <figure>
                                                
                                                    <div class="title_top">
                                                    <img class="on_hover__off" src="<?php echo MYTHEMEDIR; ?>/image/gps.png" alt>
                                                        <img class="on_hover" src="<?php echo MYTHEMEDIR; ?>/image/gps_white.png" alt>
                                                        <P>Find an Adventure</p>
                                                    </div>
                                                    <div class="title_top">
                                                        <p>Travel is the movement of people between distant geographical locations</p> 
                                                    </div>
                                                </figure>
                                                
                                            
                                            </li>
                                            <li>
                                                <figure>
                                                <div class="title_top">
                                                    <img class="on_hover__off" src="<?php echo MYTHEMEDIR; ?>/image/air-transport.png" alt="">
                                                    <img class="on_hover"      src="<?php echo MYTHEMEDIR; ?>/image/air-transport_white.png" alt="">

                                                    <p>Know the Places</p>
                                                </div>
                                                <div class="title_top">
                                                <p>Travel is the movement of people between distant geographical locations</p>     
                                                </div>
                                                </figure>
                                                
                                            </li>
                                        </ul>
                                    </section>
            
                            </div>
                        </div>
            </div>
        </div>
    </div>
    <!-- bootstrap script link -->
    <script src="<?php echo MYTHEMEDIR; ?>/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.0.0.js"></script>
<script src="https://code.jquery.com/jquery-migrate-3.1.0.js"></script>
     <!-- bootstrap script link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<!-- imagesLoaded jQuery plugin by @desandro : https://github.com/desandro/imagesloaded -->
		<script src="js/jquery.imagesloaded.min.js"></script>
		<script src="js/cbpBGSlideshow.min.js"></script>
		<script>
			$(function() {
				cbpBGSlideshow.init();
			});
		</script>
</body>
</html>