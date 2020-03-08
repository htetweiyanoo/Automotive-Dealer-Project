     
		  <?php
				error_reporting(1);
	
				include("dbconnect.php");
	
				$del = "DELETE FROM car_list WHERE car_id='{$_GET['delete_car_id']}'";
				$result = mysqli_query($con, $del);
				unlink("product_images/".$_GET['delete_car_img']);
				rmdir("product_images/".$_GET['delete_car_img']);
				echo "<script>alert('Product has been deleted successfully!')</script>";
				echo "<script>window.open('view_product.php','_self')</script>";
		  ?>
		
        