<!DOCTYPE html>
<html lang="en">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Harrier Cart Page</title>
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
  error_reporting(1);
  session_start();
  $cart=0;
  if(isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $qty) {
      $cart = $cart+$qty;
    }
  }  
    $con = mysqli_connect("localhost", "root", "", "automotive_dealer") or die(mysqli_connect_error());

    if($cart<1) {
      header("location: index.php");
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
                    <div class="basket"> <a href="shopping-cart.php"></a> </div>
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
                      <li class="active"> <a class="level-top" href="index.php"><span>Home</span></a></li>
                      <li class="mega-menu"> <a class="level-top" href="grid1.html">
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
                          <li class="level1 nav-10-4"> <a href="shopping-cart.html"> <span>Cart Page</span> </a> </li>
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
         
  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
        <div class="page-title">
<h2>Shopping Cart</h2>
</div>
        </div>
      </div>
    </div>
  </div>
       
<!-- BEGIN Main Container -->  
          
       <div class="main-container col1-layout wow bounceInUp animated">     
              
	       <div class="main">                     
                            <div class="cart wow bounceInUp animated">
    
            <div class="table-responsive shopping-cart-tbl  container">
    <form action="#" method="post">
        <input name="form_key" type="hidden" value="EPYwQxF6xoWcjLUr">
        <fieldset>
            <table id="shopping-cart-table" class="data-table cart-table table-striped">
                <colgroup><col width="1">
                <col>
                <col width="1">
                                        <col width="1">
                                        <col width="1">
                            <col width="1">
                                        <col width="1">

                            </colgroup><thead>
                   <tr class="first last">
                        <th rowspan="1">&nbsp;</th>
                        <th rowspan="1"><span class="nobr">Car Name</span></th>
                        <th class="a-center" colspan="1"><span class="nobr">Car Unit Price</span></th>
                        <th rowspan="1" class="a-center">Qty</th>                       
                        <th rowspan="1" class="a-center">Rating</th>
                        <th rowspan="1" class="a-center">&nbsp;</th>
                    </tr>
                                    </thead>
                <tfoot>
                  <form method="post" action="shopping-cart.php">
                    <tr class="first last">
                        <td colspan="50" class="a-right last">
                                                            <button type="button" title="Continue Shopping" class="button btn-continue" onClick="continueFunction()"><span><span>Continue Shopping</span></span></button>
                                                        <button type="submit" name="submit_btn" title="Submit" class="button btn-submit"><span><span>Submit</span></span></button>
                            <button type="submit" name="empty_cart_btn" title="Clear Cart" class="button btn-empty"><span><span>Clear Cart</span></span></button>
                  
                        </td>
                    </tr>
                </tfoot>
              </form>
                <tbody>
<?php 
$total = 0;
foreach ($_SESSION['cart'] as $id => $qty):
  $result = mysqli_query($con, "SELECT * FROM car_list WHERE car_id=$id");
    $row = mysqli_fetch_assoc($result);
    $car_id = $row['car_id'];
    $car_name = $row['car_name'];
    $car_img = $row['car_img'];
    $car_des = $row['car_description'];
    $car_price = $row['car_price'];
    $car_rating = $row['car_rating'];
    $total += $row['price'] * $qty;


    if(isset($_POST['submit_btn']))
    {
      $insertSql = "INSERT INTO shopping_cart(car_id, car_img, car_name, unit_price, qty, car_rating) VALUES ('$car_id', '$car_img', '$car_name', '$car_price', '$qty', '$car_rating')";
    if (mysqli_query($con, $insertSql)) {
      echo "<script>alert('Thank You!! Your car has been successfully bought.')</script>";
      $car_name = "";
      $car_img = "";
      $car_price = "";
      $qty = "";
      $car_rating = "";
      echo "<script>window.open('list.php','_self')</script>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }   
    }
?>         
<tr class="first last odd">
    <td class="image hidden-table"><a href="product-detail.html" title="Women&#39;s Georgette Animal Print" class="product-image"><img src="admin/<?php echo $row['car_img'] ?>"width="75"></a></td>
    <td>
        <h2 class="product-name">
                    <a href="product-detail.html"><?php echo $row['car_name']; ?></a>
        </h2>
                                                        </td>
   
    
                <td class="a-right hidden-table">
                    <span class="cart-price">
                                                <span class="price"><?php echo $row['car_price'] ?></span>                
            </span>


                    </td>
                        <td class="a-center movewishlist">
        <input name="cart[26340][qty]" value="<?php echo $qty ?>" size="4" title="Qty" class="input-text qty" maxlength="12">
    </td>
        <td class="a-right movewishlist">
                    <span class="cart-price">
        
                                                <span class="price"><?php echo $row['car_rating']; ?></span>                            
        </span>
            </td>
            <td class="a-center last">

   <a href="#" title="Remove item" class="button remove-item"><span><span>Remove item</span></span></a></td>

</tr> 
<?php 
  endforeach; 
  if(isset($_POST['empty_cart_btn'])) 
    {
      session_destroy();
      echo "<script>alert('Your shopping cart is empty!!!')</script>";
      echo "<script>window.open('list.php','_self')</script>";
    }
?>
                       </tbody>
            </table>
            
        </fieldset>
    </form>
</div>

   <!-- BEGIN CART COLLATERALS -->


<div class="cart-collaterals container"> 
<!-- BEGIN COL2 SEL COL 1 -->


<!-- BEGIN TOTALS COL 2 -->
<div class="col-sm-4">

        
<div class="shipping">

        <h3>Estimate Shipping and Tax</h3>
        <div class="shipping-form">
       <form action="#" method="post" id="shipping-zip-form">
            <p>Enter your destination to get a shipping estimate.</p>
            <ul class="form-list">
                <li>
                    <label for="country" class="required"><em>*</em>Country</label>
                    <div class="input-box">
                        <select name="country_id" id="country" class="validate-select" title="Country"><option value=""> </option><option value="AF">Afghanistan</option><option value="AX">Åland Islands</option><option value="AL">Albania</option><option value="DZ">Algeria</option><option value="AS">American Samoa</option><option value="AD">Andorra</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AQ">Antarctica</option><option value="AG">Antigua and Barbuda</option><option value="AR">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option value="AU">Australia</option><option value="AT">Austria</option><option value="AZ">Azerbaijan</option><option value="BS">Bahamas</option><option value="BH">Bahrain</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="BY">Belarus</option><option value="BE">Belgium</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BO">Bolivia</option><option value="BA">Bosnia and Herzegovina</option><option value="BW">Botswana</option><option value="BV">Bouvet Island</option><option value="BR">Brazil</option><option value="IO">British Indian Ocean Territory</option><option value="VG">British Virgin Islands</option><option value="BN">Brunei</option><option value="BG">Bulgaria</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="KH">Cambodia</option><option value="CM">Cameroon</option><option value="CA">Canada</option><option value="CV">Cape Verde</option><option value="KY">Cayman Islands</option><option value="CF">Central African Republic</option><option value="TD">Chad</option><option value="CL">Chile</option><option value="CN">China</option><option value="CX">Christmas Island</option><option value="CC">Cocos [Keeling] Islands</option><option value="CO">Colombia</option><option value="KM">Comoros</option><option value="CG">Congo - Brazzaville</option><option value="CD">Congo - Kinshasa</option><option value="CK">Cook Islands</option><option value="CR">Costa Rica</option><option value="CI">Côte d’Ivoire</option><option value="HR">Croatia</option><option value="CU">Cuba</option><option value="CY">Cyprus</option><option value="CZ">Czech Republic</option><option value="DK">Denmark</option><option value="DJ">Djibouti</option><option value="DM">Dominica</option><option value="DO">Dominican Republic</option><option value="EC">Ecuador</option><option value="EG">Egypt</option><option value="SV">El Salvador</option><option value="GQ">Equatorial Guinea</option><option value="ER">Eritrea</option><option value="EE">Estonia</option><option value="ET">Ethiopia</option><option value="FK">Falkland Islands</option><option value="FO">Faroe Islands</option><option value="FJ">Fiji</option><option value="FI">Finland</option><option value="FR">France</option><option value="GF">French Guiana</option><option value="PF">French Polynesia</option><option value="TF">French Southern Territories</option><option value="GA">Gabon</option><option value="GM">Gambia</option><option value="GE">Georgia</option><option value="DE">Germany</option><option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GR">Greece</option><option value="GL">Greenland</option><option value="GD">Grenada</option><option value="GP">Guadeloupe</option><option value="GU">Guam</option><option value="GT">Guatemala</option><option value="GG">Guernsey</option><option value="GN">Guinea</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="HT">Haiti</option><option value="HM">Heard Island and McDonald Islands</option><option value="HN">Honduras</option><option value="HK">Hong Kong SAR China</option><option value="HU">Hungary</option><option value="IS">Iceland</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Iran</option><option value="IQ">Iraq</option><option value="IE">Ireland</option><option value="IM">Isle of Man</option><option value="IL">Israel</option><option value="IT">Italy</option><option value="JM">Jamaica</option><option value="JP">Japan</option><option value="JE">Jersey</option><option value="JO">Jordan</option><option value="KZ">Kazakhstan</option><option value="KE">Kenya</option><option value="KI">Kiribati</option><option value="KW">Kuwait</option><option value="KG">Kyrgyzstan</option><option value="LA">Laos</option><option value="LV">Latvia</option><option value="LB">Lebanon</option><option value="LS">Lesotho</option><option value="LR">Liberia</option><option value="LY">Libya</option><option value="LI">Liechtenstein</option><option value="LT">Lithuania</option><option value="LU">Luxembourg</option><option value="MO">Macau SAR China</option><option value="MK">Macedonia</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MY">Malaysia</option><option value="MV">Maldives</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MH">Marshall Islands</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Mexico</option><option value="FM">Micronesia</option><option value="MD">Moldova</option><option value="MC">Monaco</option><option value="MN">Mongolia</option><option value="ME">Montenegro</option><option value="MS">Montserrat</option><option value="MA">Morocco</option><option value="MZ">Mozambique</option><option value="MM">Myanmar [Burma]</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NL">Netherlands</option><option value="AN">Netherlands Antilles</option><option value="NC">New Caledonia</option><option value="NZ">New Zealand</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NF">Norfolk Island</option><option value="MP">Northern Mariana Islands</option><option value="KP">North Korea</option><option value="NO">Norway</option><option value="OM">Oman</option><option value="PK">Pakistan</option><option value="PW">Palau</option><option value="PS">Palestinian Territories</option><option value="PA">Panama</option><option value="PG">Papua New Guinea</option><option value="PY">Paraguay</option><option value="PE">Peru</option><option value="PH">Philippines</option><option value="PN">Pitcairn Islands</option><option value="PL">Poland</option><option value="PT">Portugal</option><option value="PR">Puerto Rico</option><option value="QA">Qatar</option><option value="RE">Réunion</option><option value="RO">Romania</option><option value="RU">Russia</option><option value="RW">Rwanda</option><option value="BL">Saint Barthélemy</option><option value="SH">Saint Helena</option><option value="KN">Saint Kitts and Nevis</option><option value="LC">Saint Lucia</option><option value="MF">Saint Martin</option><option value="PM">Saint Pierre and Miquelon</option><option value="VC">Saint Vincent and the Grenadines</option><option value="WS">Samoa</option><option value="SM">San Marino</option><option value="ST">São Tomé and Príncipe</option><option value="SA">Saudi Arabia</option><option value="SN">Senegal</option><option value="RS">Serbia</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SK">Slovakia</option><option value="SI">Slovenia</option><option value="SB">Solomon Islands</option><option value="SO">Somalia</option><option value="ZA">South Africa</option><option value="GS">South Georgia and the South Sandwich Islands</option><option value="KR">South Korea</option><option value="ES">Spain</option><option value="LK">Sri Lanka</option><option value="SD">Sudan</option><option value="SR">Suriname</option><option value="SJ">Svalbard and Jan Mayen</option><option value="SZ">Swaziland</option><option value="SE">Sweden</option><option value="CH">Switzerland</option><option value="SY">Syria</option><option value="TW">Taiwan</option><option value="TJ">Tajikistan</option><option value="TZ">Tanzania</option><option value="TH">Thailand</option><option value="TL">Timor-Leste</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad and Tobago</option><option value="TN">Tunisia</option><option value="TR">Turkey</option><option value="TM">Turkmenistan</option><option value="TC">Turks and Caicos Islands</option><option value="TV">Tuvalu</option><option value="UG">Uganda</option><option value="UA">Ukraine</option><option value="AE">United Arab Emirates</option><option value="GB">United Kingdom</option><option value="US" selected="selected">United States</option><option value="UY">Uruguay</option><option value="UM">U.S. Minor Outlying Islands</option><option value="VI">U.S. Virgin Islands</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VA">Vatican City</option><option value="VE">Venezuela</option><option value="VN">Vietnam</option><option value="WF">Wallis and Futuna</option><option value="EH">Western Sahara</option><option value="YE">Yemen</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option></select>                    </div>
                </li>
                            <li>
                    <label for="region_id">State/Province</label>
                    <div class="input-box">
                        <select id="region_id" name="region_id" title="State/Province" defaultvalue="" class="required-entry validate-select">
                            <option value="">Please select region, state or province</option>
                        <option value="1" title="Alabama">Alabama</option><option value="2" title="Alaska">Alaska</option><option value="3" title="American Samoa">American Samoa</option><option value="4" title="Arizona">Arizona</option><option value="5" title="Arkansas">Arkansas</option><option value="6" title="Armed Forces Africa">Armed Forces Africa</option><option value="7" title="Armed Forces Americas">Armed Forces Americas</option><option value="8" title="Armed Forces Canada">Armed Forces Canada</option><option value="9" title="Armed Forces Europe">Armed Forces Europe</option><option value="10" title="Armed Forces Middle East">Armed Forces Middle East</option><option value="11" title="Armed Forces Pacific">Armed Forces Pacific</option><option value="12" title="California">California</option><option value="13" title="Colorado">Colorado</option><option value="14" title="Connecticut">Connecticut</option><option value="15" title="Delaware">Delaware</option><option value="16" title="District of Columbia">District of Columbia</option><option value="17" title="Federated States Of Micronesia">Federated States Of Micronesia</option><option value="18" title="Florida">Florida</option><option value="19" title="Georgia">Georgia</option><option value="20" title="Guam">Guam</option><option value="21" title="Hawaii">Hawaii</option><option value="22" title="Idaho">Idaho</option><option value="23" title="Illinois">Illinois</option><option value="24" title="Indiana">Indiana</option><option value="25" title="Iowa">Iowa</option><option value="26" title="Kansas">Kansas</option><option value="27" title="Kentucky">Kentucky</option><option value="28" title="Louisiana">Louisiana</option><option value="29" title="Maine">Maine</option><option value="30" title="Marshall Islands">Marshall Islands</option><option value="31" title="Maryland">Maryland</option><option value="32" title="Massachusetts">Massachusetts</option><option value="33" title="Michigan">Michigan</option><option value="34" title="Minnesota">Minnesota</option><option value="35" title="Mississippi">Mississippi</option><option value="36" title="Missouri">Missouri</option><option value="37" title="Montana">Montana</option><option value="38" title="Nebraska">Nebraska</option><option value="39" title="Nevada">Nevada</option><option value="40" title="New Hampshire">New Hampshire</option><option value="41" title="New Jersey">New Jersey</option><option value="42" title="New Mexico">New Mexico</option><option value="43" title="New York">New York</option><option value="44" title="North Carolina">North Carolina</option><option value="45" title="North Dakota">North Dakota</option><option value="46" title="Northern Mariana Islands">Northern Mariana Islands</option><option value="47" title="Ohio">Ohio</option><option value="48" title="Oklahoma">Oklahoma</option><option value="49" title="Oregon">Oregon</option><option value="50" title="Palau">Palau</option><option value="51" title="Pennsylvania">Pennsylvania</option><option value="52" title="Puerto Rico">Puerto Rico</option><option value="53" title="Rhode Island">Rhode Island</option><option value="54" title="South Carolina">South Carolina</option><option value="55" title="South Dakota">South Dakota</option><option value="56" title="Tennessee">Tennessee</option><option value="57" title="Texas">Texas</option><option value="58" title="Utah">Utah</option><option value="59" title="Vermont">Vermont</option><option value="60" title="Virgin Islands">Virgin Islands</option><option value="61" title="Virginia">Virginia</option><option value="62" title="Washington">Washington</option><option value="63" title="West Virginia">West Virginia</option><option value="64" title="Wisconsin">Wisconsin</option><option value="65" title="Wyoming">Wyoming</option></select>
                      
                       <input type="text" id="region" name="region" value="" title="State/Province" class="input-text required-entry" style="display: none;">
                   </div>
                </li>
                                        <li>
                    <label for="postcode">Zip/Postal Code</label>
                    <div class="input-box">
                        <input class="input-text validate-postcode" type="text" id="postcode" name="estimate_postcode" value="">
                    </div>
                </li>
            </ul>
           <div class="buttons-set11">
              <button type="button" title="Get a Quote" onClick="coShippingMethodForm.submit()" class="button get-quote"><span>Get a Quote</span></button>
            </div> <!--buttons-set11-->
        </form>
      

    </div>
</div>
 
</div>   

<div class="col-sm-4">    
    
<div class="discount">
      <h3>Discount Codes</h3>
  <form id="discount-coupon-form" action="#" method="post">                       
            <label for="coupon_code">Enter your coupon code if you have one.</label>
            <input type="hidden" name="remove" id="remove-coupone" value="0">                          
                <input class="input-text fullwidth" type="text" id="coupon_code" name="coupon_code" value="">                                                      
                  <button type="button" title="Apply Coupon" class="button coupon " onClick="discountForm.submit(false)" value="Apply Coupon"><span>Apply Coupon</span></button>                
                               
</form>

</div> <!--discount--> 
</div> <!--col-sm-4-->

<div class="col-sm-4">
 <div class="totals">
<h3>Shopping Cart Total</h3>
<div class="inner">

    <table id="shopping-cart-totals-table" class="table shopping-cart-table-total">
        <colgroup><col>
        <col width="1">
        </colgroup><tfoot>
            <tr>
    <td style="" class="a-left" colspan="1">
        <strong>Grand Total</strong>
    </td>
    <td style="" class="a-right">
        <strong><span class="price">$129.00</span></strong>
    </td>
</tr>
        </tfoot>
        <tbody>
            <tr>
    <td style="" class="a-left" colspan="1">
        Subtotal    </td>
    <td style="" class="a-right">
        <span class="price">$129.00</span>    </td>
</tr>
        </tbody>
    </table>
  
<ul class="checkout">           
<li>
    <button type="button" title="Proceed to Checkout" class="button btn-proceed-checkout" onClick=""><span>Proceed to Checkout</span></button>
</li><br>
<li><a href="multiple-addresses.html" title="Checkout with Multiple Addresses">Checkout with Multiple Addresses</a>
</li><br>
</ul>                
</div><!--inner-->
 </div><!--totals-->
</div> <!--col-sm-4-->


</div> <!--cart-collaterals-->



</div>  <!--cart-->
          
	       </div><!--main-container-->
          
          </div> <!--col1-layout-->
          

 
  <!-- For version 1,2,3,4,6 -->
  
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
     <li class="active"> <a class="level-top" href="index.php"><span>Home</span></a></li>
    <li><a href="list.php">Car Listing‎</a>
      <ul class="level1">
        <li class="level1 first"><a href="grid.html"><span>Car Grid</span></a></li>
        <li class="level1 nav-10-2"> <a href="list.html"> <span>Car List</span> </a> </li>
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
    <li><a href="compare.html">Sandwiches‎</a></li>
    <li><a href="#">Pages</a>
       <ul class="level1">
                          <li class="level1"> <a href="about-us.html"> <span>About us</span> </a> </li>
                          <li class="level1 nav-10-4"> <a href="shopping-cart.html"> <span>Cart Page</span> </a> </li>
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
<!-- JavaScript --> 
<script type="text/javascript" src="js/jquery.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/parallax.js"></script> 
<script type="text/javascript" src="js/revslider.js"></script> 
<script type="text/javascript" src="js/common.js"></script> 
<script type="text/javascript" src="js/jquery.bxslider.min.js"></script> 
<script type="text/javascript" src="js/jquery.flexslider.js"></script> 
<script type="text/javascript" src="js/owl.carousel.min.js"></script> 
<script type="text/javascript" src="js/jquery.mobile-menu.min.js"></script>
<script>
    function continueFunction() {
      window.location.href = "list.php";
    }
</script>


</body>
</html>