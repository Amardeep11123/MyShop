<?php

	include("includes/db.php");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Amar Shop</title>
<link rel="stylesheet" href="styles/style.css" media="all" />
</head>

<body>
	<!-- Main Container Starts -->
	<div class="main_wrapper">
	
	
		<!-- Header Section Starts -->
		<div class="header_wrapper">
			<img src="images/amarlogo.png"  width="300" height="100" style="float:left">
			<img src="images/banner.gif" style="float:right">
		
		</div>
		<!-- Header Section End -->
		
		<!-- Navigation Section Starts -->
		<div id="navbar">
		
			<ul id="menu">
				<li><a href="index.php">Home</li>
				<li><a href="#">All Products</li>
				<li><a href="#">My Account</li>
				<li><a href="#">Sign Up</li>
				<li><a href="#">Shopping Cart</li>
				<li><a href="#">Contact Us</li>
				
			</ul>
			
			<div id="form">
				<form method="get" action="results.php" enctype="multipart/form-data">
				
					<input type="text" name="user_query" placeholder="Search a Product" />
					<input type="submit" name="search" value="Search" />
					
					
				</form>
			
			
			</div>
			
		</div>	
		<!-- Navigation Section End -->
		
		<div class="content_wrapper">
		
			<div id="left_content">
			
				<div id="sidebar_title">Categories </div>
			
				<ul id="cats">
				
				<?php
				
				$get_cats = "select * from categories";
				$run_cats = mysqli_query($con ,$get_cats);
				while($row_cats = mysqli_fetch_array($run_cats)) {
				
				$cat_id = $row_cats['cat_id'];
				$cat_title = $row_cats['cat_title'];
				
				
				echo "<li><a href='index.php?cat=$cat_id'>$cat_title</a></li>";
				}
				?>
				</ul>
				<div id="sidebar_title">Brands </div>
				<ul id="cats">
				<?php
				$get_brands = "select * from brands";
				$run_brands = mysqli_query($con ,$get_brands);
				while($row_brands = mysqli_fetch_array($run_brands)){
				
				$brand_id = $row_brands['brand_id'];
				$brand_title = $row_brands['brand_title'];
				echo "<li><a href='index.php?brand=$brand_id'>$brand_title</a></li>";
				}
				?>
				</ul>
				
			</div>
			<div id="right_content">
				<div id="headline">
					<div id="headline_content">
					<b> Welcome Guest! </b>
					<b style="color:yellow;"> Shopping Cart </b>
					<span>- Item : - Price :</span>
					</div>
				</div>

				<div id="products_box"> 

				<?php

				$get_products ="select * from products order by rand() LIMIT 0,6";
				$run_products = mysqli_query($con,$get_products);
				while ($row_products = mysqli_fetch_array($run_products)) {
					$pro_id = $row_products['product_id'];
					$pro_title = $row_products['product_title'];
					$pro_cat = $row_products['cat_id'];
					$pro_brand = $row_products['brand_id'];
					$pro_desc = $row_products['product_desc'];
					$pro_price = $row_products['product_price'];
					$pro_image = $row_products['product_img1'];
					echo "

					<div id='single_product'>
					<h3>$pro_title</h3>
					<br/>
					<img src='admin_area/product_images/$pro_image' width='180' height='180' /></br>
					<p><b>Price: $pro_price</b></p>
					<a href='details.php?pro_id=$pro_id' style='float:left;'>Details</a>
					<a href='index.php?add_cart=$pro_id'><button style='float:right;'>Add to Cart </button></a>


					</div>



					";
				}

				?>
					

				</div>
			
			</div>
			
		
		</div>
		
		
		<div class="footer">
		
		<h1 style="color:#000000; padding-top:30px; text-decoration:none; text-align:center;">&copy; 2018 - by Amardeep Chimankar </h1>
		</div>





	</div>
	<!-- Main Container End -->
</body>
</html>
