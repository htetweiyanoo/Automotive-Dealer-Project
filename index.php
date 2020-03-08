<!DOCTYPE html>
<html lang="en">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Automative Dealer</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Default Description">
<meta name="keywords" content="fashion, store, E-commerce">
<meta name="robots" content="*">
<link rel="icon" href="#" type="image/x-icon">
<link rel="shortcut icon" href="#" type="image/x-icon">

<!-- CSS Style -->
<link rel="stylesheet" type="text/css" href="stylesheet/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="stylesheet/font-awesome.css" media="all">
<link rel="stylesheet" type="text/css" href="stylesheet/bootstrap-select.css">
<link rel="stylesheet" type="text/css" href="stylesheet/revslider.css" >
<link rel="stylesheet" type="text/css" href="stylesheet/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="stylesheet/owl.theme.css">
<link rel="stylesheet" type="text/css" href="stylesheet/jquery.bxslider.css">
<link rel="stylesheet" type="text/css" href="stylesheet/jquery.mobile-menu.css">
<link rel="stylesheet" type="text/css" href="stylesheet/style.css" media="all">
<link rel="stylesheet" type="text/css" href="stylesheet/responsive.css" media="all">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700,800' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Teko:300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Saira+Condensed:300,400,500,600,700,800" rel="stylesheet">
</head>
<body>

<?php 
	$con = mysqli_connect("localhost", "root", "", "automotive_dealer");

	function getCar()
	{
		global $con;
		$get_car = "SELECT * FROM cars";
		$run_get_car = mysqli_query($con, $get_car);
		while ($row_car = mysqli_fetch_array($run_get_car)) {
			$car_id = $row_car['car_id'];
			$car_name = $row_car['car_name'];
			$car_img = $row_car['car_img'];
			$car_price = $row_car['price'];
			$car_rating = $row_car['rating'];
			echo "
            <div class='item'>
              <div class='item-inner'>
                <div class='item-img'>
                  <div class='item-img-info'><a href='accessories-detail.html' title='Retis lapen casen' class='product-image'><img src='$car_img'alt='Retis lapen casen'></a>
                    <div class='new-label new-top-left'>Used</div>
                    <div class='sale-label sale-top-left'>-15%</div>
                    	<div class='item-box-hover'>
                      <div class='box-inner'>
                        <div class='add_cart'>
                          <button class='button btn-cart' type='button'></button>
                        </div>
                      </div>
                    </div>
                  	</div>
                </div>
                <div class='item-info'>
                  <div class='info-inner'>
                    <div class='item-title'><a href='accessories-detail.html' title='Retis lapen casen'>$car_name</a> </div>
                    <div class='item-content'>
                      <div class='rating'>
                        <div class='ratings'>
                          <div class='rating-box'>
                            <div class='rating' style='width:$car_rating'></div>
                          </div>
                          <p class='rating-links'><a href='#''>1 Review(s)</a> <span class='separator'>|</span> <a href='#''>Add Review</a> </p>
                        </div>
                      </div>
                      <div class='item-price'>
                        <div class='price-box'><span class='regular-price'><span class='price'>$car_price</span> </span> </div>
                      </div>
                      <div class='other-info'>
                        <div class='col-km'><i class='fa fa-tachometer'></i> 4875km</div>
                        <div class='col-engine'><i class='fa fa-gear'></i> Automatic</div>
                        <div class='col-date'><i class='fa fa-calendar' aria-hidden='true'></i> 2018</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
			";


		}
	}
?>

<div id="page">
  <header>
    <div class="container">
      <div class="row">
        <div id="header">
          <div class="header-container">
            <div class="header-logo"> <a href="index-2.html" title="Car HTML" class="logo">
              <div><img src="images/logo.png" alt="Car Store"></div>
              </a> </div>
            <div class="header__nav">
              <div class="header-banner">
                <div class="col-lg-6 col-xs-12 col-sm-6 col-md-6">
                  <div class="assetBlock">
                    <div style="height: 20px; overflow: hidden;" id="slideshow">
                      <p style="display: block;">Hot days! - <span>50%</span> Get ready for summer! </p>
                      <p style="display: none;">Save up to <span>40%</span> Hurry limited offer!</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-lg-6 col-xs-12 col-sm-6 col-md-6 call-us"><i class="fa fa-clock-o"></i> Mon - Fri : 09am to 06pm <i class="fa fa-phone"></i> +1 800 789 0000</div>
              </div>
              <div class="fl-header-right">
                <div class="fl-links">
                  <div class="no-js"> <a title="" class="clicker"></a>
                    <div class="fl-nav-links">
                      <div class="language-currency">
                        <div class="fl-language">
                        <h3>Language</h3>
                          <ul class="lang">
                            <li><a href="#"> <img src="images/english.png" alt="English"> <span>English</span> </a></li>
                            <li><a href="#"> <img src="images/francais.png" alt="French"> <span>French</span> </a></li>
                            <li><a href="#"> <img src="images/german.png" alt="German"> <span>German</span> </a></li>
                          </ul>
                        </div>
                        <!--fl-language--> 
                        <!-- END For version 1,2,3,4,6 --> 
                        <!-- For version 1,2,3,4,6 -->
                        <div class="fl-currency">
                         <h3>Currency</h3>
                          <ul class="currencies_list">
                            <li><a href="#" title="EGP"> <strong>£</strong> Pound Sterling</a></li>
                            <li><a href="#" title="EUR"> <strong>€</strong> Euro</a></li>
                            <li><a href="#" title="USD"> <strong>$</strong> US Dollar</a></li>
                          </ul>
                        </div>
                        <!--fl-currency--> 
                        <!-- END For version 1,2,3,4,6 --> 
                      </div>
                       <h3>My Acount</h3>
                      <ul class="links">
                        <li><a href="login.html" title="My Account">Login</a></li>
                        <li><a href="login.html" title="Wishlist">Register</a></li>
                        </ul>
                    </div>
                  </div>
                </div>
                <div class="fl-cart-contain">
                  <div class="mini-cart">
                    <div class="basket"> <a href="shopping-cart.php"></a></div>
                    <div class="fl-mini-cart-content" style="display: none;">
                      <div class="block-subtitle">
                        <div class="top-subtotal">2 items, <span class="price">$259.99</span> </div>
                        <!--top-subtotal--> 
                        <!--pull-right--> 
                      </div>
                      <!--block-subtitle-->
                      <ul class="mini-products-list" id="cart-sidebar">
                        <li class="item first">
                          <div class="item-inner"><a class="product-image" title="timi &amp; leslie Sophia Diaper Bag, Lemon Yellow/Shadow White" href="#l"><img alt="timi &amp; leslie Sophia Diaper Bag, Lemon Yellow/Shadow White" src="products-images/p4.jpg"></a>
                            <div class="product-details">
                              <div class="access"><a class="btn-remove1" title="Remove This Item" href="#">Remove</a> <a class="btn-edit" title="Edit item" href="#"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
                              <!--access--> 
                              <strong>1</strong> x <span class="price">$179.99</span>
                              <p class="product-name"><a href="accessories-detail.html">timi &amp; leslie Sophia Diaper Bag...</a></p>
                            </div>
                          </div>
                        </li>
                        <li class="item last">
                          <div class="item-inner"><a class="product-image" title="JP Lizzy Satchel Designer Diaper Bag - Slate Citron" href="#"><img alt="JP Lizzy Satchel Designer Diaper Bag - Slate Citron" src="products-images/p3.jpg"></a>
                            <div class="product-details">
                              <div class="access"><a class="btn-remove1" title="Remove This Item" href="#">Remove</a> <a class="btn-edit" title="Edit item" href="#"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
                              <!--access--> 
                              <strong>1</strong> x <span class="price">$80.00</span>
                              <p class="product-name"><a href="accessories-detail.html">JP Lizzy Satchel Designer Diaper Ba...</a></p>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <div class="actions">
                        <button class="btn-checkout" title="Checkout" type="button" onClick="window.location=checkout.html"><span>Checkout</span></button>
                      </div>
                      <!--actions--> 
                    </div>
                    <!--fl-mini-cart-content--> 
                  </div>
                </div>
                <!--mini-cart-->
                <div class="collapse navbar-collapse">
                  <form class="navbar-form" role="search">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search">
                      <span class="input-group-btn">
                      <button type="submit" class="search-btn"> <span class="glyphicon glyphicon-search"> <span class="sr-only">Search</span> </span> </button>
                      </span> </div>
                  </form>
                </div>
                <!--links--> 
              </div>
              <div class="fl-nav-menu">
                <nav>
                  <div class="mm-toggle-wrap">
                    <div class="mm-toggle"><i class="fa fa-bars"></i><span class="mm-label">Menu</span> </div>
                  </div>
                  <div class="nav-inner"> 
                    <!-- BEGIN NAV -->
                    <ul id="nav" class="hidden-xs">
                      <li class="active"> <a class="level-top" href="#"><span>Home</span></a></li>
                      <li class="level0 parent drop-menu">
                      	<a class="level-top" href="list.php"><span>Car Listing‎</span></a>
                    
                      </li>
                      <li class="level0 parent drop-menu"> <a class="level-top" href="#"><span>Blog</span></a>
                        <ul class="level1">
                          <li class="level1 first"><a href="blog.html"><span>Blog List</span></a></li>
                          <li class="level1 nav-10-2"> <a href="blog-detail.html"> <span>Blog Detail</span> </a> </li>
                        </ul>
                      </li>
                      <li class="mega-menu hidden-sm"> <a class="level-top" href="compare.html"><span>Compare Cars‎</span></a> </li>
                      <li class="level0 parent drop-menu"><a href="#"><span>Pages</span> </a> 
                        <!--sub sub category-->
                        <ul class="level1">
                          <li class="level1"> <a href="about-us.html"> <span>About us</span> </a> </li>
                          <li class="level1 nav-10-4"> <a href="shopping-cart.php"> <span>Cart Page</span> </a> </li>
                          <li class="level1 first parent"><a href="checkout.html"><span>Checkout</span></a> 
                            <!--sub sub category-->
                            <ul class="level2 right-sub">
                              <li class="level2 nav-2-1-1 first"><a href="checkout-method.html"><span>Method</span></a></li>
                              <li class="level2 nav-2-1-5 last"><a href="checkout-billing-info.html"><span>Billing Info</span></a></li>
                            </ul>
                            <!--sub sub category--> 
                          </li>
                          <li class="level1 nav-10-4"> <a href="wishlist.html"> <span>Wishlist</span> </a> </li>
                          <li class="level1"> <a href="dashboard.html"> <span>Dashboard</span> </a> </li>
                          <li class="level1"> <a href="multiple-addresses.html"> <span>Multiple Addresses</span> </a> </li>
                          <li class="level1"><a href="contact-us.html"><span>Contact us</span></a> </li>
                          <li class="level1"><a href="404error.html"><span>404 Error Page</span></a> </li>
                          <li class="level1"><a href="login.html"><span>Login Page</span></a> </li>
                          <li class="level1"><a href="quickview.html"><span>Quick View</span></a> </li>
                          <li class="level1"><a href="newsletter.html"><span>Newsletter</span></a> </li>
                        </ul>
                      </li>
                      <li class="fl-custom-tabmenulink mega-menu"> <a href="#" class="level-top"> <span>Custom</span> </a>
                        <div class="level0-wrapper fl-custom-tabmenu" style="left: 0px; display: none;">
                          <div class="container">
                            <div class="header-nav-dropdown-wrapper clearer">
                              <div class="grid12-3">
                                <div><img src="images/custom-img1.jpg" alt="custom-image"></div>
                                <h4 class="heading">SALE UP TO 30% OFF</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                              </div>
                              <div class="grid12-3">
                                <div><img src="images/custom-img2.jpg" alt="custom-image"></div>
                                <h4 class="heading">SALE UP TO 30% OFF</h4>
                                <p>Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.</p>
                              </div>
                              <div class="grid12-3">
                                <div><img src="images/custom-img3.jpg" alt="custom-image"></div>
                                <h4 class="heading">SALE UP TO 30% OFF</h4>
                                <p>Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.</p>
                              </div>
                              <div class="grid12-3">
                                <div><img src="images/custom-img4.jpg" alt="custom-image"></div>
                                <h4 class="heading">SALE UP TO 30% OFF</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                    <!--nav--> 
                  </div>
                </nav>
              </div>
            </div>
            
            <!--row--> 
            
          </div>
        </div>
      </div>
    </div>
  </header>
  <!--container-->
  
  <div class="content">
    <div class="container-fluid">
      
      <div class="row"> 
        <!-- Slider -->
        <div class="home-slider5">
          <div id="thmg-slideshow" class="thmg-slideshow">
            <div id='rev_slider_4_wrapper' class='rev_slider_wrapper fullwidthbanner-container' >
              <div id='rev_slider_4' class='rev_slider fullwidthabanner'>
                <ul>
                  <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='images/slide-img1.jpg'><img src='images/slide-img1.jpg'  data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>
                    <div class="container">
                      <div class="content_slideshow">
                        <div class="row">
                          <div>
                            <div class="info">
                              <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'><span>Top Brands 2019</span> </div>
                              <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'><span style="font-weight:normal; display:block">Modern-classic</span> incredible </div>
                              <div class='tp-caption Title sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1450' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'>Get 40% OFF on selected items.</div>
                              <div class='tp-caption sfb  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href='#' class="buy-btn">Book Appointment</a> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='images/slide-img2.jpg'><img src='images/slide-img2.jpg'  data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>
                    <div class="container">
                      <div class="content_slideshow">
                        <div class="row">
                          <div>
                            <div class="info">
                              <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'><span>Top Brands 2018</span> </div>
                              <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'><span style="font-weight:normal; display:block">Modern-classic</span> Decorative </div>
                              <div class='tp-caption Title sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1450' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'>Get 40% OFF on selected items.</div>
                              <div class='tp-caption sfb  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href='#' class="buy-btn">Book Appointment</a> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
                <div class="tp-bannertimer"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!--Category slider Start-->
    
    <!--Category silder End-->
    
    <div id="top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> <a href="#" data-scroll-goto="1"> <img src="images/speakers.png" alt="promotion-banner1"> </a> </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> <a href="#" data-scroll-goto="2"> <img src="images/schedule.png" alt="promotion-banner2"> </a> </div>
        </div>
      </div>
    </div>
    
    <!-- best Pro Slider -->
    <section class=" wow bounceInUp animated">
      <div class="hot_deals slider-items-products container">
        <div class="new_title">
          <h2>Deals of the Week</h2>
          <div class="box-timer">
            <div class="countbox_1 timer-grid"></div>
          </div>
        </div>
        <div id="hot_deals" class="product-flexslider hidden-buttons">
          <div class="slider-items slider-width-col4 products-grid">
            
            <?php 
            	
            	getCar();
            ?>
          </div>
        </div>
      </div>
    </section>
</form>
    
    <!-- Logo Brand Block -->
    <div class="brand-logo wow bounceInUp animated">
      <div class="container">
        <div class="row">
          <div class="home-banner col-lg-2 hidden-md col-xs-12 hidden-sm"> </div>
          <div class="col-lg-
8 col-md-12 col-sm-12 col-xs-12">
            <div class="testimonials-section">
              <div class="offer-slider parallax parallax-2">
                <ul class="bxslider">
                  <li>
                    <div class="avatar"><img src="images/member1.png" alt="Image"></div>
                    <div class="testimonials">Perfect Themes and the best of all that you have many options to choose! Very fast responding! I highly recommend this theme and these people!</div>
                    <div class="clients_author">Smith John <span>Happy Customer</span> </div>
                  </li>
                  <li>
                    <div class="avatar"><img src="images/member2.png" alt="Image"></div>
                    <div class="testimonials">Code, template and others are very good. The support has served me immediately and solved my problems when I need help. Are to be congratulated.</div>
                    <div class="clients_author">Sahara Anderson <span>Happy Customer</span> </div>
                  </li>
                  <li>
                    <div class="avatar"><img src="images/member3.png" alt="Image"></div>
                    <div class="testimonials">Our support and response has been amazing, helping me with several issues I came across and got them solved almost the same day. A pleasure to work with them! </div>
                    <div class="clients_author">Stephen Smith <span>Happy Customer</span> </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Home Lastest Blog Block -->
  <div class="latest-blog wow bounceInUp animated animated container"> 
    <!--exclude For version 6 -->
    <div class="blog-home-inner">
      <div class="blog-title">
        <h2>Latest Blog post</h2>
      </div>
      <!--For version 1,2,3,4,5,6,8 -->
      <div class="row">
        <div class="col-lg-4 col-md-4 col-xs-12 col-sm-4 blog-post">
          <div class="blog_inner">
            <div class="blog-img"> <a href="blog-detail.html"> <img src="images/blog-img1.jpg" alt="blog image"> </a> </div>
            <!--blog-img-->
            <div class="blog-info">
              <div class="post-date"> <span class="entry-date">14  Jan, 2019</span> </div>
              <ul class="post-meta">
                <li><i class="fa fa-user"></i>Posted by <a href="#">admin</a> </li>
                <li><i class="fa fa-comments"></i><a href="#">4 comments</a> </li>
              </ul>
              <h3><a href="blog-detail.html">Powerful and flexible premium Ecommerce themes</a></h3>
              <p>Fusce ac pharetra urna. Duis non lacus sit amet lacus interdum facilisis sed non est. Ut mi metus, semper eu dictum nec...</p>
            </div>
          </div>
          <!--blog_inner--> 
        </div>
        <div class="col-lg-4 col-md-4 col-xs-12 col-sm-4 blog-post">
          <div class="blog_inner">
            <div class="blog-img"> <a href="blog-detail.html"> <img src="images/blog-img2.jpg" alt="blog image"> </a> </div>
            <!--blog-img-->
            <div class="blog-info">
              <div class="post-date"> <span class="entry-date">23  Dec, 2018</span> </div>
              <ul class="post-meta">
                <li><i class="fa fa-user"></i>Posted by <a href="#">admin</a> </li>
                <li><i class="fa fa-comments"></i><a href="#">8 comments</a> </li>
              </ul>
              <h3><a href="blog-detail.html">Awesome template with lot's of features on the board!</a></h3>
              <p>Aliquam laoreet consequat malesuada. Integer vitae diam sed dolor euismod laoreet eget ac felis erat sed elit bibendum ...</p>
            </div>
          </div>
          <!--blog_inner--> 
        </div>
        <div class="col-lg-4 col-md-4 col-xs-12 col-sm-4 blog-post">
          <div class="blog_inner">
            <div class="blog-img"> <a href="blog-detail.html"> <img src="images/blog-img3.jpg" alt="blog image"> </a> </div>
            <!--blog-img-->
            <div class="blog-info">
              <div class="post-date"> <span class="entry-date">23  Dec, 2018</span> </div>
              <ul class="post-meta">
                <li><i class="fa fa-user"></i>Posted by <a href="#">admin</a> </li>
                <li><i class="fa fa-comments"></i><a href="#">8 comments</a> </li>
              </ul>
              <h3><a href="blog-detail.html">Awesome template with lot's of features on the board!</a></h3>
              <p>Aliquam laoreet consequat malesuada. Integer vitae diam sed dolor euismod laoreet eget ac felis erat sed elit bibendum ...</p>
            </div>
          </div>
          <!--blog_inner--> 
        </div>
      </div>
    </div>
    <!--END For version 1,2,3,4,5,6,8 --> 
    <!--exclude For version 6 --> 
    <!--container--> 
  </div>
  <footer> 
    <!-- BEGIN INFORMATIVE FOOTER -->
    <div class="footer-inner">
      <div class="our-features-box wow bounceInUp animated animated">
        <div class="container">
          <ul>
            <li>
              <div class="feature-box">
                <div class="icon-truck"><img src="images/world-icon.png" alt="Image"></div>
                <div class="content">
                  <h6>World's #1</h6>
                  <p>Largest Auto portal</p>
                </div>
              </div>
            </li>
            <li>
              <div class="feature-box">
                <div class="icon-support"><img src="images/car-sold-icon.png" alt="Image"></div>
                <div class="content">
                  <h6>Car Sold</h6>
                  <p>Every 4 minute</p>
                </div>
              </div>
            </li>
            <li>
              <div class="feature-box">
                <div class="icon-money"><img src="images/tag-icon.png" alt="Image"></div>
                <div class="content">
                  <h6>Offers</h6>
                  <p>Stay updated pay less</p>
                </div>
              </div>
            </li>
            <li class="last">
              <div class="feature-box">
                <div class="icon-return"><img src="images/compare-icon.png" alt="Image"></div>
                <div class="content">
                  <h6>Compare</h6>
                  <p>Decode the right car</p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="newsletter-row">
        <div class="container">
          <div class="row"> 
            
            <!-- Footer Newsletter -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col1">
              <div class="newsletter-wrap">
                <h5>Newsletter</h5>
                <h4>Get Notified Of any Updates!</h4>
                <form action="#" method="post" id="newsletter-validate-detail1">
                  <div id="container_form_news">
                    <div id="container_form_news2">
                      <input type="text" name="email" id="newsletter1" title="Sign up for our newsletter" class="input-text required-entry validate-email" placeholder="Enter your email address">
                      <button type="submit" title="Subscribe" class="button subscribe"><span>Subscribe</span></button>
                    </div>
                    <!--container_form_news2--> 
                  </div>
                  <!--container_form_news-->
                </form>
              </div>
              <!--newsletter-wrap--> 
            </div>
          </div>
        </div>
        <!--footer-column-last--> 
      </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-4 col-xs-12 col-lg-4">
            <div class="co-info">
              <h4>SHOWROOM</h4>
              <address>
              <div><span>ThemesGround, 789 Main rd, Anytown, <br>
                CA 12345 USA</span></div>
              <div> <span> +1 800 789 0000</span></div>
              <div> <span><a href="#">Harrier@themesground.com</a></span></div>
              <div> <span>Mon - Fri : 09am to 06pm</span></div>
              </address>
            </div>
          </div>
          <div class="col-sm-8 col-xs-12 col-lg-8">
            <div class="footer-column">
              <h4>Quick Links</h4>
              <ul class="links">
                <li class="first"><a title="How to buy" href="http://themesground.com/blog/">Blog</a></li>
                <li><a title="FAQs" href="#">FAQs</a></li>
                <li><a title="Payment" href="#">Payment</a></li>
                <li><a title="Shipment" href="#">Shipment</a></li>
                <li><a title="Where is my order?" href="#">Where is my order?</a></li>
                <li class="last"><a title="Return policy" href="#">Return policy</a></li>
              </ul>
            </div>
            <div class="footer-column">
              <h4>Style Advisor</h4>
              <ul class="links">
                <li class="first"><a title="Your Account" href="#">Your Account</a></li>
                <li><a title="Information" href="#">Information</a></li>
                <li><a title="Addresses" href="#">Addresses</a></li>
                <li><a title="Addresses" href="#">Discount</a></li>
                <li><a title="Orders History" href="#">Orders History</a></li>
                <li class="last"><a title=" Additional Information" href="#"> Additional Information</a></li>
              </ul>
            </div>
            <div class="footer-column">
              <h4>Information</h4>
              <ul class="links">
                <li class="first"><a title="Site Map" href="#">Site Map</a></li>
                <li><a title="Search Terms" href="#">Search Terms</a></li>
                <li><a title="Advanced Search" href="#">Advanced Search</a></li>
                <li><a title="History" href="#">About Us</a></li>
                <li><a title="History" href="#">Contact Us</a></li>
                <li><a title="Suppliers" href="#">Suppliers</a></li>
              </ul>
            </div>
          </div>
          
          <!--col-sm-12 col-xs-12 col-lg-8--> 
          <!--col-xs-12 col-lg-4--> 
        </div>
        <!--row--> 
        
      </div>
      
      <!--container--> 
    </div>
    <!--footer-inner-->
    
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-4">
            <div class="social">
              <ul>
                <li class="fb"><a href="#"></a></li>
                <li class="tw"><a href="#"></a></li>
                <li class="googleplus"><a href="#"></a></li>
                <li class="rss"><a href="#"></a></li>
                <li class="pintrest"><a href="#"></a></li>
                <li class="linkedin"><a href="#"></a></li>
                <li class="youtube"><a href="#"></a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12 coppyright"><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></div>
          <div class="col-xs-12 col-sm-4">
            <div class="payment-accept"> <img src="images/payment-1.png" alt=""> <img src="images/payment-2.png" alt=""> <img src="images/payment-3.png" alt=""> <img src="images/payment-4.png" alt=""> </div>
          </div>
        </div>
      </div>
    </div>
    <!-- BEGIN SIMPLE FOOTER --> 
  </footer>
  <!-- End For version 1,2,3,4,6 --> 
  
</div>
<!--page--> 
<!-- Mobile Menu-->
<div id="mobile-menu">
  <ul>
        <li>
      <div class="mm-search">
        <form id="search1" name="search">
          <div class="input-group">
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit"><i class="fa fa-search"></i> </button>
            </div>
            <input type="text" class="form-control simple" placeholder="Search ..." name="srch-term" id="srch-term">
          </div>
        </form>
      </div>
    </li>
     <li class="active"> <a class="level-top" href="#"><span>Home</span></a></li>
    <li><a href="list.php">Car Listing</a>
      <ul class="level1">
        <li class="level1 first"><a href="grid.html"><span>Car Grid</span></a></li>
        <li class="level1 nav-10-2"> <a href="list.php"> <span>Car List</span> </a> </li>
        <li class="level1 nav-10-3"> <a href="grid1.html"> <span>Accessories Grid</span> </a> </li>
        <li class="level1 nav-10-4"> <a href="list1.html"> <span>Accessories List</span> </a> </li>
        <li class="level1 first parent"><a href="car-detail.html"><span>Car Detail</span></a> </li>
        <li class="level1 first parent"><a href="accessories-detail.html"><span>Accessories Detail</span></a> </li>
      </ul>
    </li>
    <li><a href="grid.html">Blog</a>
       <ul class="level1">
          <li class="level1 first"><a href="blog.html"><span>Blog List</span></a></li>
          <li class="level1 nav-10-2"> <a href="blog-detail.html"> <span>Blog Detail</span> </a> </li>
        </ul>
    </li>
    <li><a href="compare.html">Compare Cars‎</a></li>
    <li><a href="#">Pages</a>
       <ul class="level1">
                          <li class="level1"> <a href="about-us.html"> <span>About us</span> </a> </li>
                          <li class="level1 nav-10-4"> <a href="shopping-cart.php"> <span>Cart Page</span> </a> </li>
                          <li class="level1 first parent"><a href="checkout.html"><span>Checkout</span></a> 
                            <!--sub sub category-->
                            <ul class="level2 right-sub">
                              <li class="level2 nav-2-1-1 first"><a href="checkout-method.html"><span>Method</span></a></li>
                              <li class="level2 nav-2-1-5 last"><a href="checkout-billing-info.html"><span>Billing Info</span></a></li>
                            </ul>
                            <!--sub sub category--> 
                          </li>
                          <li class="level1 nav-10-4"> <a href="wishlist.html"> <span>Wishlist</span> </a> </li>
                          <li class="level1"> <a href="dashboard.html"> <span>Dashboard</span> </a> </li>
                          <li class="level1"> <a href="multiple-addresses.html"> <span>Multiple Addresses</span> </a> </li>
                          <li class="level1"><a href="contact-us.html"><span>Contact us</span></a> </li>
                          <li class="level1"><a href="404error.html"><span>404 Error Page</span></a> </li>
                          <li class="level1"><a href="login.html"><span>Login Page</span></a> </li>
                          <li class="level1"><a href="quickview.html"><span>Quick View</span></a> </li>
                          <li class="level1"><a href="newsletter.html"><span>Newsletter</span></a> </li>
                        </ul>
    </li>
    <li><a href="#">Custom</a></li>
   </ul>
</div>
</div>

<!-- JavaScript --> 
<script type="text/javascript" src="js/jquery.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script src="js/bootstrap-slider.min.js"></script> 
<script src="js/bootstrap-select.min.js"></script> 
<script type="text/javascript" src="js/parallax.js"></script> 
<script type="text/javascript" src="js/revslider.js"></script> 
<script type="text/javascript" src="js/common.js"></script> 
<script type="text/javascript" src="js/jquery.bxslider.min.js"></script> 
<script type="text/javascript" src="js/owl.carousel.min.js"></script> 
<script type="text/javascript" src="js/jquery.mobile-menu.min.js"></script> 
<script src="js/countdown.js"></script> 
<script type="text/javascript" src="js/shopping-cart.js"></script>
<script>
        jQuery(document).ready(function(){
            jQuery('#rev_slider_4').show().revolution({
                dottedOverlay: 'none',
                delay: 5000,
                startwidth: 1170,
	            startheight:650,

                hideThumbs: 200,
                thumbWidth: 200,
                thumbHeight: 50,
                thumbAmount: 2,

                navigationType: 'thumb',
                navigationArrows: 'solo',
                navigationStyle: 'round',

                touchenabled: 'on',
                onHoverStop: 'on',
                
                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,
            
                spinner: 'spinner0',
                keyboardNavigation: 'off',

                navigationHAlign: 'center',
                navigationVAlign: 'bottom',
                navigationHOffset: 0,
                navigationVOffset: 20,

                soloArrowLeftHalign: 'left',
                soloArrowLeftValign: 'center',
                soloArrowLeftHOffset: 20,
                soloArrowLeftVOffset: 0,

                soloArrowRightHalign: 'right',
                soloArrowRightValign: 'center',
                soloArrowRightHOffset: 20,
                soloArrowRightVOffset: 0,

                shadow: 0,
                fullWidth: 'on',
                fullScreen: 'off',

                stopLoop: 'off',
                stopAfterLoops: -1,
                stopAtSlide: -1,

                shuffle: 'off',

                autoHeight: 'off',
                forceFullWidth: 'on',
                fullScreenAlignForce: 'off',
                minFullScreenHeight: 0,
                hideNavDelayOnMobile: 1500,
            
                hideThumbsOnMobile: 'off',
                hideBulletsOnMobile: 'off',
                hideArrowsOnMobile: 'off',
                hideThumbsUnderResolution: 0,

                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                startWithSlide: 0,
                fullScreenOffsetContainer: ''
            });
        });
        </script> 
<script>
      var dthen1 = new Date("12/25/17 11:59:00 PM");
      start = "08/04/15 03:02:11 AM";
      start_date = Date.parse(start);
      var dnow1 = new Date(start_date);
      if (CountStepper > 0)
      ddiff = new Date((dnow1) - (dthen1));
      else
      ddiff = new Date((dthen1) - (dnow1));
      gsecs1 = Math.floor(ddiff.valueOf() / 1000);
      
      var iid1 = "countbox_1";
      CountBack_slider(gsecs1, "countbox_1", 1);
    </script>

<script>
	const cartBtn = document.getElementsByClassName("button btn-cart");

	cartBtn.forEach(function myFunction(btn){
		btn.addEventListener("click", function(event) {
			console.log(event.target);
		});
	});
</script>
</body>

</html>
