<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Insert Product</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="adminstyle.css" rel="stylesheet" type="text/css" />
<!-- CuFon: Enables smooth pretty custom font rendering. 100% SEO friendly. To disable, remove this section -->
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
<!-- CuFon ends -->

<?php
	error_reporting(1);
	include("auth.php");
	$con = mysqli_connect("localhost", "root", "", "automotive_dealer");
	if(isset($_POST['insert']))
	{
		// Check connection
		if (!$con) {
			die("Connection failed: ". mysqli_connect_error());
		}

		$car_name = $_POST['car_name'];
		$car_price = $_POST['car_price'];
		$car_img = $_FILES['car_img']['name'];
		$car_rating =$_POST['car_rating'];
		$car_desc = $_POST['car_desc'];
		
		move_uploaded_file($_FILES['car_img']['tmp_name'],"product_images/$car_img");
		
		$sql = "INSERT INTO car_list (car_name, car_img, car_description, car_price, car_rating) VALUES('$car_name','product_images/$car_img','$car_desc','$car_price','$car_rating')";
		// $query = mysqli_query($con,$insert_car);
		if (mysqli_query($con, $sql)) {
			echo "<script>alert('Product has been successfully inserted into the database.')</script>";
			echo "<script>window.open('insert_product.php','_self')</script>";
		} else {
			echo "Error: " .$sql."<br>".mysqli_error($con);
		}
		mysqli_close($con);		
	}
?>

</head>
<body>
<div class="main">

  <div class="header">
    <div class="header_resize">
      <div class="menu_nav">
        <ul>
          <li><a href="home.php"><span><span>Home</span></span></a></li>
          <li class="active"><a href="insert_product.php"><span><span>Add Product</span></span></a></li>
          <li><a href="view_product.php"><span><span>View Products</span></span></a></li>
        </ul>
      </div>
	  <div class="clr"></div>
      
          
    </div>
  </div>

  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2>Insert Product</h2>
		  <form method="post" action="insert_product.php" enctype="multipart/form-data">
			<table border="0" cellpadding="10px" align="center" style="font-size:16px; font-weight:bold;">
				
				<tr>
					<td>Car Name</td>
					<td><input type="text" name="car_name" required></td>
				</tr>
				<tr>
					<td>Car Price</td>
					<td><input type="text" name="car_price" required></td>
				</tr>
				<tr>
					<td>Car Image</td>
					<td><input type="file" name="car_img" required></td>
				</tr>
				<tr>
					<td>Car Rating</td>
					<td><input type="text" name="car_rating" required></td>
				</tr>
				<tr>
					<td>Product Description</td>
					<td><textarea name="car_desc" cols="20"  rows="10" required></textarea></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" name="insert" value="Insert Product"></td>
				</tr>
			</table>
		  </form>
        </div>
        
      </div>
      
      <div class="clr"></div>
    </div>
  </div>

  
  <div class="footer">
    <div class="footer_resize">
      
      <ul class="fmenu">
        <li><a href="home.php">Home</a></li>
        <li class="active"><a href="insert_product.php">Add Product</a></li>
        <li><a href="view_product.php">View Products</a></li>
      </ul>
      <div class="clr"></div>
    </div>
  </div>
</div>
</body>
</html>
