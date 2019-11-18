<?php define( 'MYTHEMEDIR',""); ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Travel joy</title>

    <link rel="stylesheet" type="text/css" href="<?php echo MYTHEMEDIR; ?>/css/style.css">
     
    <!-- bootstrap -->
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo MYTHEMEDIR; ?>/css/bootstrap.min.css"> -->
    <!-- end of bootstrap link -->


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
                    
                    <div class="slideshow-container">

                    <div class="mySlides fade">
                        <img src="<?php echo MYTHEMEDIR; ?>/image/landing-1-bg.png" alt="image02"/>
                    </div>

                    <div class="mySlides fade">
                        <img src="<?php echo MYTHEMEDIR; ?>/image/landing-1-bg.png" alt="image02"/>
                    </div>

                    <div class="mySlides fade">
                        <img src="<?php echo MYTHEMEDIR; ?>/image/landing-1-bg.png" alt="image02"/>
                    </div>

                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>

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
                    <form class="description-box" action="">
                        <div class="item item-1">
                            <select>
                                <option value="Neitherland" selected>Neitherland</option>
                                <option value="Nepal">Nepal</option>
                                <option value="America">America</option>
                                <option value="Cananda">Cananda</option>
                            </select>
                        </div>
                        <div class="item item-2">
                            <select>
                                <option value="Trip Type">Trip Type</option>
                                <option value="List 1">List 1</option>
                                <option value="List 2">List 2</option>
                                <option value="List 3">List 3</option>
                            </select>
                        </div>
                        <div class="item item-3">
                            <input type="search" placeholder="Keyword" id="search" >
                        </div>
                        <div class="item item-4">
                            <button>Search</button>
                        </div>
                        </form>
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
       <!-- section 2  -->
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
            <!-- ENd of section 3 -->

            <!-- section 4 -->
            <div class="section-4">
            <div class="section-wrapper">
                <div class="section__header">
                    <div class="title">
                        <h2>Popular Destination</h2>
                        <p>Just select where you want to go, we take care of rest</p>
                    </div>
                    <div class="button-item">
                                <button class="bttn text-black title-btn">view</button>
                            </div>

                    
                </div>
                <div class="section04-gallery">
                    <section class="grid-box">
                                    <ul>
                                      <li>
                                        <figure>
                                          
                                          <img src="<?php echo MYTHEMEDIR; ?>/image/grid-2.jpg">
                                          <div class="overlay">
                                                
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
                                          
                                          <img src="<?php echo MYTHEMEDIR; ?>/image/grid-2.jpg" alt="Three different glasses of beer">
                                          <div class="overlay">
                                                
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
                                          
                                          <img src="<?php echo MYTHEMEDIR; ?>/image/grid-2.jpg" alt="Three different glasses of beer">
                                          <div class="overlay">
                                                
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
            </div>
                <!-- End of section4  -->

                <!-- secton 5 -->
                <div class="section-5">
                    <div class="section-wrapper">
                        <div class="flex-box">
                            <div class="flex__image-box">
                                <img src="<?php echo MYTHEMEDIR; ?>/image/grid-2.jpg" alt="">
                            </div>
                            <div class="flex__description-box">
                               <div class="title">
                                    <h3>Discover the joy of<br> skiing with us</h3>
                               </div>
                               <div class="review-box">
                                   <p>$720</p>
                                   <div class="review-item__right">
                                        <span>
                                            <i class="star1 fas fa-star"></i>
                                            <i class="star2 fas fa-star"></i>
                                            <i class="star3 fas fa-star"></i>
                                            <i class="star4 fas fa-star"></i>
                                            <i class="star5 fas fa-star"></i>
                                        </span>
                                        <p>4 reviews</p>
                                   </div> 


                               </div>
                               <div class="flex__description">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Eligendi, natus. Laudantium odio id, 
                        
                               </div>
                               <div class="button__box">
                                    <button class="btn-prop">Explore All Adventure</button>
                               </div>
                               <div class="flex__footer">
                                   <div class="bottom-position">
                                       <div class="flex-define">
                                        <div class="column">
                                                <div class="title"><p>Fixed Departure</p> </div>
                                                <div class="detail"><p>14 Nov - 18 Nov</p></div>
                                            </div>
                                            <div class="column">
                                                    <div class="title"><p>Trip Type</p></div>
                                                <div class="detail"><p>Adventure Trip</p></div>
                                            </div>
                                            <div class="column">
                                                    <div class="title"><p>Group Sizes</p></div>
                                                <div class="detail"><p>15 pax</p></div>
                                            </div>
                                            <div class="column">
                                                    <div class="title"><p>Location</p></div>
                                                <div class="detail"><p>Austria</p></div>
                                            </div>
                                       </div>
                                        
                                   </div>
                                  
                                  

                               </div>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>

                
                <!-- End of section 5 -->
                <br>
                <br>
                <br>
                <br>
                 <!-- section 6  -->
        <div class="section-6">
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
                <div class="section06-gallery">
                    <section class="grid-box">
                                    <ul>
                                      <li>
                                        <figure>
                                            <div class="image-top">
                                                <img src="<?php echo MYTHEMEDIR; ?>/image/grid-2.jpg">
                                                <div class="overlay">
                                                    <div class="image-overlay overlay__bottom">
                                                        <div class="left">
                                                            <h2> <strike>$1500</strike></h2>
                                                            <h1>$1000</h1>
                                                            
                                                        </div>
                                                        <div class="right ">
                                                            <button >Group Discount</button>
                                                        
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                             
                                            <div class="other-info">
                                                    <div class="title">
                                                        <h3>Holiday Inn Express Hotel</h3>
                                                        <div class="address-time">
                                                            <span><i class="fas fa-map-marker-alt"></i> <p>3 Days</p></span>
                                                            <span><i class="fas fa-clock"></i><p>Thamel, Kathmandu</p></span>
                                                        </div>
                                                    </div>
                                                    <div class="depature-time">
                                                        <div class="title">
                                                            <h3>next-depature</h3> 
                                                        </div>
                                                    <div class="dept-detail">
                                                        <span><p id="date">Dec 10, 2019</p>- <p id="day-left">7</p> Spaces left</span>
                                                        <span><p id="date">Dec 10, 2019</p>- <p id="day-left">7</p> Spaces left</span>
                                                        <span><p id="date">Dec 10, 2019</p>- <p id="day-left">7</p> Spaces left</span>
                                                    </div>

                                                </div>
                                                <div class="botton__box">
                                                    <button class="btn__prop">view details</button>
                                                </div>
                                           </div>
                                        </figure>
                                        
                                      </li>
                                      <li>
                                      <figure>
                                            <div class="image-top">
                                                <img src="<?php echo MYTHEMEDIR; ?>/image/grid-2.jpg">
                                                <div class="overlay">
                                                    <div class="image-overlay overlay__bottom">
                                                        <div class="left">
                                                            <h2> <strike>$1500</strike></h2>
                                                            <h1>$1000</h1>
                                                            
                                                        </div>
                                                        <div class="right ">
                                                            <button >Group Discount</button>
                                                        
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                             
                                            <div class="other-info">
                                                    <div class="title">
                                                        <h3>Holiday Inn Express Hotel</h3>
                                                        <div class="address-time">
                                                            <span><i class="fas fa-map-marker-alt"></i> <p>3 Days</p></span>
                                                            <span><i class="fas fa-clock"></i><p>Thamel, Kathmandu</p></span>
                                                        </div>
                                                    </div>
                                                    <div class="depature-time">
                                                        <div class="title">
                                                            <h3>next-depature</h3> 
                                                        </div>
                                                    <div class="dept-detail">
                                                        <span><p id="date">Dec 10, 2019</p>- <p id="day-left">7</p> Spaces left</span>
                                                        <span><p id="date">Dec 10, 2019</p>- <p id="day-left">7</p> Spaces left</span>
                                                        <span><p id="date">Dec 10, 2019</p>- <p id="day-left">7</p> Spaces left</span>
                                                    </div>

                                                </div>
                                                <div class="botton__box">
                                                    <button class="btn__prop">view details</button>
                                                </div>
                                           </div>
                                        </figure>
                                        </figure>
                                        
                                       
                                      </li>
                                      <li>
                                      <figure>
                                            <div class="image-top">
                                                <img src="<?php echo MYTHEMEDIR; ?>/image/grid-2.jpg">
                                                <div class="overlay">
                                                    <div class="image-overlay overlay__bottom">
                                                        <div class="left">
                                                            <h2> <strike>$1500</strike></h2>
                                                            <h1>$1000</h1>
                                                            
                                                        </div>
                                                        <div class="right ">
                                                            <button >Group Discount</button>
                                                        
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                             
                                            <div class="other-info">
                                                    <div class="title">
                                                        <h3>Holiday Inn Express Hotel</h3>
                                                        <div class="address-time">
                                                            <span><i class="fas fa-map-marker-alt"></i> <p>3 Days</p></span>
                                                            <span><i class="fas fa-clock"></i><p>Thamel, Kathmandu</p></span>
                                                        </div>
                                                    </div>
                                                    <div class="depature-time">
                                                        <div class="title">
                                                            <h3>next-depature</h3> 
                                                        </div>
                                                        <div class="dept-detail">
                                                            <span><p id="date">Dec 10, 2019</p> - <p id="day-left">7</p> Spaces left</span>
                                                            <span><p id="date">Dec 10, 2019</p> - <p id="day-left">7</p> Spaces left</span>
                                                            <span><p id="date">Dec 10, 2019</p> - <p id="day-left">7</p> Spaces left</span>
                                                        </div>

                                                </div>
                                                <div class="botton__box">
                                                    <button class="btn__prop">view details</button>
                                                </div>
                                           </div>
                                        </figure>
                                        
                                      </li>
                                </ul>
                            </section>
     
                    </div>
                </div>
            </div>
                <!-- End of section 6 -->

                <!-- Section 7 -->
                <div class="section-7">
                    <div class="section-wrapper">
                        <div class="section-container">
                            <div class="flex__item">
                                <h2>762</h2>
                                <p>No. of Customer</p>

                            </div>
                            <div class="flex__item">
                                <h2>603</h2>
                                <p>No. of Trips</p>
                            </div>
                            <div class="flex__item">
                                <h2>52</h2>
                                <p>Trips Types</p>
                            </div>
                            <div class="flex__item">
                                <h2>108</h2>
                                <p>Adventure Activity</p>
                            </div>
                        </div>
                </div>
            </div>
                <!-- End of section 7 -->
            <br><br><br><br>
            
                <!-- section 8 -->
            
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
                                                
                                                <div class="position__bottom">
                                                    <div class="info">
                                                        <div class="top">
                                                            <p>November 13, 2019</p>
                                                            <h1>Where Should you<br> travel in october </h1>
                                                        
                                                        </div>
                                                        <div class="bottom ">
                                                            <button class="bttn">Read</button>
                                                        
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div> 
                                        </figure>
                                        
                                      </li>
                                      <li>
                                        <figure>
                                          
                                          <img src="<?php echo MYTHEMEDIR; ?>/image/grid-2.jpg">
                                          <div class="overlay">
                                                
                                                <div class="position__bottom">
                                                    <div class="info">
                                                        <div class="top">
                                                            <p>November 13, 2019</p>
                                                            <h1> 
                                                            Tips for your first solo adventure
                                                            </h1>
                                                        
                                                        </div>
                                                        <div class="bottom ">
                                                            <button class="bttn">Read</button>
                                                        
                                                        </div>
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
                                                
                                                <div class="position__bottom">
                                                    <div class="info">
                                                        <div class="top">
                                                            <p>November 13, 2019</p>
                                                            <h1>7 tips for nomads on<br> a budget trips</h1>
                                                        
                                                        </div>
                                                        <div class="bottom ">
                                                            <button class="bttn ">Read</button>
                                                        
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div> 
                                        </figure>
                                        
                                      </li>
                                </ul>
                            </section>
     
                    </div>
                </div>
            </div>
                
                <!-- End of section 8 -->
                <!-- Section 9 -->
                <div class="section-8 section">
                    <div class="section-wrapper">
                        <div class="section__header">
                            <div class="title">
                                <h2>Testimonials</h2>
                                <div class="line"></div>
                            </div> 
                        </div>
                       
                        <div class="slider-box">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                    <img class="d-block w-100" src="..." alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                    <img class="d-block w-100" src="..." alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                    <img class="d-block w-100" src="..." alt="Third slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                                </div>
                        </div>
                    </div>
                </div>
            
                <!-- End of section 9 -->

                <!-- Section 10 -->
                <div class="section-8 section">
                    <div class="section-wrapper">
                        <div class="section__header">
                            <div class="title">
                                <h2>Featured On</h2>
                                <div class="line"></div>
                            </div> 
                        </div>
                        <div class="section02-gallery">
                                <section class="grid-box">
                                    <ul>
                                      <li>
                                        <figure>
                                          <img src="<?php echo MYTHEMEDIR; ?>/image/tripAdvisor.png">
                                          
                                        </figure>
                                        
                                      </li>
                                      <li>
                                        <figure>
                                          <img src="<?php echo MYTHEMEDIR; ?>/image/belfius-pgn.png">
                                          
                                        </figure>
                                      </li>
                                      <li>
                                        <figure>
                                          <img src="<?php echo MYTHEMEDIR; ?>/image/tripAdvisor.png">
                                          
                                        </figure>
                                        
                                      </li>
                                      <li>
                                        <figure>
                                          <img src="<?php echo MYTHEMEDIR; ?>/image/belfius-pgn.png">
                                          
                                        </figure>
                                      </li>
                                      <li>
                                        <figure>
                                          <img src="<?php echo MYTHEMEDIR; ?>/image/belfius-pgn.png">
                                          
                                        </figure>
                                      </li>
                                      
                                </ul>
                            </section>
     
                    </div>
                    </div>
                </div>
            
                <!-- End of section 10 -->
            

        
    </div>
    <script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
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